<?
class Application
{
	public $params = [];
	protected $_baseLang = 'ru';
	protected $_errorMap = [
		404 => [
			'view' => 'error.php',
			'layout' => 'error.php',
            'method' => 'action404'
		]
	];
	protected $_lang = 'en';
	protected $_langUrl;
	protected $_langs = ['ru' => 'ru', 'en' => '', 'ua' => 'ua'];
	protected $_layout = 'main.php';
	protected $_layoutsPath = '/layouts';
	protected $_log = [];
	protected $_map = [];
	protected $_rootPath = __DIR__;
	protected $_route;
	protected $_url;
	protected $_viewsPath = '/views';
    protected $_translates = [];
	
	public function __construct($config = [])
	{
		foreach ($config as $key => $value)
		{
			$this->$key = $value;
		}

		set_error_handler([$this, 'error']);
	}
	
    public function __get($name)
    {
        $getter = 'get' . $name;
        if (method_exists($this, $getter))
		{
            return $this->$getter();
        }

        if (method_exists($this, 'set' . $name)) {
            trigger_error('Getting write-only property: ' . get_class($this) . '::' . $name);
        }

        trigger_error('Getting unknown property: ' . get_class($this) . '::' . $name);
    }
	
    public function __set($name, $value)
    {
        $setter = 'set' . $name;
        if (method_exists($this, $setter))
		{
            $this->$setter($value);

            return;
        }

        if (method_exists($this, 'get' . $name))
		{
            trigger_error('Setting read-only property: ' . get_class($this) . '::' . $name);
        }

        trigger_error('Setting unknown property: ' . get_class($this) . '::' . $name);
    }

	public function actionIndex()
	{
		return $this->render($this->route['view']);
	}
	
	protected function render($view, $params = [])
	{
		$file = $this->_rootPath . $this->_viewsPath . DIRECTORY_SEPARATOR . $view;
		$this->log('View file', ['file' => $file]);
		$params['content'] = $this->renderFile($file, $params);
        $params['counters'] = $this->renderFile($this->_rootPath . $this->_viewsPath. DIRECTORY_SEPARATOR .'counters.php', $params);
		$file = $this->_rootPath . $this->_layoutsPath . DIRECTORY_SEPARATOR . $this->_layout;
		$this->log('Layout file', ['file' => $file]);
		return $this->renderFile($file, $params);
	}
	
	protected function renderFile($file, $params = [])
	{
		extract($params);
		ob_start();
		include $file;
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}
	
	public function getLang()
	{
	    if ($this->_lang == null)
        {
            $this->initLang();
        }
		return $this->_lang;
	}

    public function getLangUrl()
    {
        if ($this->_langUrl == null)
        {
            $this->_langUrl = $this->_langs[$this->lang];
        }
        return $this->_langUrl;
    }

    public function getRoute()
    {
        if ($this->_route == null)
        {
            $this->initRoute();
        }
        return $this->_route;
    }
	
	public function getMap()
	{
		return $this->_map;
	}

    public function getUrl()
    {
        if ($this->_url == null)
        {
            $this->initUrl();
        }
        return $this->_langUrl;
    }

    public function getUrls()
    {
        $segments = explode('/', $_SERVER['REQUEST_URI']);

        if ($this->langUrl === '')
        {
            return $_SERVER['REQUEST_URI'];
        }
        else
        {
            unset($segments[1]);
            return implode('/', $segments);
        }
    }
	
	public function toUrl($alias)
	{
		$langUrl = $this->langUrl == '' ? '' : '/' . $this->langUrl;
		return $langUrl . $alias;
	}
	
	public function run()
	{
		$this->resolveUrl();

		$this->log('Route:', ['route' => $this->route]);

        if (isset($this->route['layout']))
        {
            $this->_layout = $this->route['layout'];
        }

		$method = isset($this->route['method']) ? $this->route['method'] : 'actionIndex';

		return $this->$method();
	}
	
	protected function resolveUrl()
	{
        $this->initUrl();
        $this->initRoute();

		$this->log('Lang from url:', ['lang' => $this->lang]);
		$this->log('Url:', ['url' => $this->url]);
	}
	
	protected function log($message, $params)
	{
		$this->_log[] = [
			'message' => $message,
			'params' => var_export($params, true)
		];
	}

    protected function initLang()
    {
        if (count($this->_langs) == 0)
        {
            return;
        }

        $segments = explode('/', $_SERVER['REQUEST_URI']);

        foreach($this->_langs as $lang => $url)
        {
            if ($url == $segments[1])
            {
                $this->_lang = $lang;
            }
        }
    }

    protected function initUrl()
    {
        $this->initLang();

        $segments = explode('/', $_SERVER['REQUEST_URI']);

        if ($this->langUrl === '')
        {
            $this->_url = $_SERVER['REQUEST_URI'];
        }
        else
        {
            unset($segments[1]);
            $this->_url = implode('/', $segments);
        }
    }

	protected function initRoute()
	{
		if ($this->_route == null)
        {
            $this->_route = $this->getRouteRecursive($this->_map);
        }
        if ($this->_route == null)
        {
            $this->_route = $this->_errorMap[404];
        }
        return $this->_route;
	}

	protected function getRouteRecursive($map)
    {
        foreach($map as $node)
        {
            if ($node['url'] == $this->_url)
            {
                return $node;
            }
            if (isset($node['nodes']))
            {
                $node = $this->getRoute($node['nodes']);
                if ($node != null)
                {
                    return $node;
                }
            }
        }

        return null;
    }
	
	public function showLog()
	{
		echo '<pre>';
		print_r($this->_log);
		echo '</pre>';
		die;
	}
	
	public function t($category, $message, $params = [])
	{
		$this->loadTranslate($category);

		if (isset($this->_translates[$category]) && array_key_exists($message, $this->_translates[$category]))
		{
			$message = $this->_translates[$category][$message];
		}

		$placeholders = [];
        foreach ((array) $params as $name => $value)
		{
            $placeholders['{' . $name . '}'] = $value;
        }

        return ($placeholders === []) ? $message : strtr($message, $placeholders);
	}

	protected function loadTranslate($category)
	{
		if ($this->lang == $this->_baseLang || isset($this->_translates[$category]))
		{
			return;
		}

		$file = $this->_rootPath . DIRECTORY_SEPARATOR . 'translate' . DIRECTORY_SEPARATOR . $this->lang . DIRECTORY_SEPARATOR . $category . '.php';

        $this->_translates[$category] = include $file;
	}

	public function action404()
    {
        header("HTTP/1.0 404 Not Found");
        header("Status: 404 Not Found");
        return $this->render($this->route['view']);
    }

	protected function error($severity, $message, $filename, $linenumber)
    {
        $error = '';

        switch ($severity)
        {
            case E_USER_ERROR:
                $error = 'FATAL ERROR';
                break;

            case E_USER_WARNING:
                $error = 'WARNING';
                break;

            case E_USER_NOTICE:
                $error = 'NOTICE';
                break;

            default:
                $error = 'UNKNOWN ERROR';
                break;
        }

        $error .= " [$severity] $message\nline $linenumber of file '$filename'";

        trigger_error($error);
        die;
    }
}
