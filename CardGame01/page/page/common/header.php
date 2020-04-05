<?php
    // 汎用関数群を読み込み
    require_once($_SERVER["DOCUMENT_ROOT"] . "/CardGame01/script/server/generic_functions.php");

    // 固有設定
    $css = array("asset/css/header.css");
    linkCss($css);
    $script = array("script/client/common/jquery.min.js");
    linkScript($script);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <header>
        <h1>Project Mitsurin Card Game 01</h1>
    </header>
</body>
</html>