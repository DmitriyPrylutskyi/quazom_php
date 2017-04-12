<?
$lang = array_keys($_POST)[0];

switch ($lang) {
    case 'ru':
        $file_name = 'Brief_na_reklamy_sayta_web_studia_Quazom.com.doc';
        break;
    case 'ua':
        $file_name = 'Brief_na_reklamy_saytu_web_studia_Quazom.com.doc';
        break;
    case 'en':
        $file_name = 'Brief_for_website_advertising_web_studio_Quazom.com.doc';
        break;
}

$file="./files/".$file_name;
$ctype="application/vnd.openxmlformats-officedocument.wordprocessingml.document";

if (file_exists($file)) {
    header("Content-Type: ".$ctype."; charset=utf-8");
    header("Content-Disposition: attachment; filename=".basename($file));
    ob_clean();
    readfile($file);
    exit;
} else {
    header("Location: ".$_SERVER['HTTP_REFERER']);
    exit;
}
?>