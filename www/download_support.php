<?
$lang = array_keys($_POST)[0];

switch ($lang) {
    case 'ru':
        $file_name = 'Бриф_на_поддержку_сайта_веб_студия_Quazom.com.doc';
        break;
    case 'ua':
        $file_name = 'Бриф_на_підтримку_сайту_веб_студія_Quazom.com.doc';
        break;
    case 'en':
        $file_name = 'Brief_for_website_support_web_studio_Quazom.com.doc';
        break;
}

$file="./files/".iconv("UTF-8", "CP1251", $file_name);
$ctype="application/vnd.openxmlformats-officedocument.wordprocessingml.document";

if (file_exists($file)) {
    header('Content-Type: '.$ctype.'; charset=utf-8');
    header("Content-Disposition: attachment; filename=".basename($file));
    ob_clean();
    readfile($file);
    exit;
} else {
    header("Location: ".$_SERVER['HTTP_REFERER']);
    exit;
}
?>