<?php
    define("HOST_NAME", $_SERVER["HTTP_HOST"]);     // ホスト名
    define("SITE_ROOT", "/CardGame01/");            // 当サイトのドキュメントルート

    // URL取得(引数は当サイトドキュメントルートからのパス)
    function getURL($filepath) {
        return (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . HOST_NAME . SITE_ROOT . $filepath;
    }

    // 絶対パス取得(引数は当サイトドキュメントルートからのパス)
    function getAbsolutePath($filepath) {
        return $_SERVER["DOCUMENT_ROOT"] . SITE_ROOT . $filepath;
    }

    // ページ遷移
    function transfer($url) {
        header("Location: " . $url);
        exit;
    }

    // タイトル設定
    function setTitle($title) {
        $defaultTitle = "Project Mitsurin Card Game 01 | ";
        echo "<title>" . $defaultTitle . $title . "</title>";
    }

    // CSSファイル読み込み
    function linkCss($cssFiles) {
        foreach($cssFiles as $cssFile) {
            echo "<link href='" . getURL($cssFile) . "' rel='stylesheet'>";
        }
    }

    // Scriptファイル読み込み
    function linkScript($scriptFiles) {
        foreach($scriptFiles as $scriptFile) {
            echo "<script src='" . getURL($scriptFile) . "'></script>";
        }
    }
?>