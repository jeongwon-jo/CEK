<?PHP
if (isset($_REQUEST['lang'])) {
    $lang = $_REQUEST['lang'];
    if ($lang == 'ko' || $lang == 'en') {
        setcookie('LANG', $lang, time() + (365 * 24 * 60 * 60), "/"); // 1년 동안 유지
    }
}
?>
