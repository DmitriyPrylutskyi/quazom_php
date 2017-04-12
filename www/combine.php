<?php
require_once('jsmin.php');		//load javascript minifier
require_once('cssmin.php');		//load css minifier
$adir = "./min";
if (!file_exists($adir)) mkdir($adir) && chmod($adir, 0777);
$f_css = "style.css";
$f_js = "script.js";
$index = debug_backtrace()[0]['file'];
$html = file_get_contents($index);

/* регулярное выражение для нахождения всех <link rel="stylesheet"> и выделения путей к css файлам*/
$regex = '/<link[^>]+rel=\"stylesheet\"+[ a-zA-Z0-9="\/]+href=("[^http].+")+[ a-zA-Z0-9="\/]?[^>]*>/';
/*$regex_content = '/href=(".+")/';*/
preg_match_all($regex, $html, $matches, PREG_SET_ORDER);
/* сохранения всех путей в массиве $file_css*/
$files_css = array();
array_shift($matches);
foreach ($matches as $match) {
	$files_css[] = $match[1];
}

/* регулярное выражение для нахождения всех <script>...</script> и выделения путей к js файлам*/
$regex = '/<script\b[^>]+src=("[^http].+")+><\/script>/';
preg_match_all($regex, $html, $matches, PREG_SET_ORDER);
/* сохранения всех путей в массиве $files_js*/

$files_js = array();
array_shift($matches);
foreach ($matches as $match) {
	$files_js[] = $match[1];
}

$fl_css = null;								//очистка файла
if (!empty($files_css)) {
	foreach($files_css as $value) {			//объединение файлов
		$fl_css.= file_get_contents(substr($value, 1, -1)).' '.PHP_EOL;
	}
    //$fl_css = CssMin::minify($fl_css);          //минификация css
}

$fl_js = null;                              //очистка файла
if (!empty($files_js)) {
	foreach($files_js as $value) {			//объединение файлов
		$fl_js.= file_get_contents(substr($value, 1, -1)).';'.PHP_EOL;
	}
    //$fl_js = JSMin::minify($fl_js);            //минификация js
}

/*echo($fl_css);
echo ($fl_js);*/

/* Удаляем старые файлы*/
if (file_exists($adir) && $dh = opendir($adir)) 
	{
	while($fn = readdir($dh)) if ($fn[0] != ".")
		{
			unlink($adir.'/'.$fn);
		}	
	closedir($dh);
	}

file_put_contents ($adir.'/'.$f_css,$fl_css);
file_put_contents ($adir.'/'.$f_js,$fl_js);
?>