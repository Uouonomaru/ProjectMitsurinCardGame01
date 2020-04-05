<?php
    // 汎用関数群を読み込み
    require_once($_SERVER["DOCUMENT_ROOT"] . "/CardGame01/script/server/generic_functions.php");

    // ページ固有設定
    setTitle("index");
    $css = array("asset/css/index.css");
    linkCss($css);
?>

<?php include_once(getAbsolutePath("page/page/common/header.php")); ?>
<body>
    <article>
        <h1>Project Mitsurin Card Game 01 | Index Page</h1>
        <ul>
            <li>00</li>
            <li>01</li>
            <li>02</li>
            <li>03</li>
            <li>04</li>
            <li>05</li>
            <li>06</li>
            <li>07</li>
            <li>08</li>
            <li>09</li>
            <li>10</li>
            <li>11</li>
            <li>12</li>
            <li>13</li>
            <li>14</li>
            <li>15</li>
            <li>16</li>
            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li>20</li>
            <li>21</li>
            <li>22</li>
            <li>23</li>
        </ul>
        <br>
    </article>
</body>
<?php include_once(getAbsolutePath("page/page/common/footer.php")); ?>