<?php
session_start();
if  (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
if  (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {
    $lang = 'nl';
}
switch ($lang) {
    case 'en':
        $lang_file = 'lang/en.php';
        break;
    case 'nl':
        $lang_file = 'lang/nl.php';
        break;
    default:
        $lang_file = 'lang/nl.php';
}
require_once $lang_file;

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $text['title'] ?></title>
</head>
