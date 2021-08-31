<a href="../accueil/index.php"></a>
<span class="titre"><?=APP_NAME?></span>
<br><span><?=APP_SLOGAN?></span>
<?php
if ($_SESSION["debug"]) {
    echo "<pre id='debug'>";
    echo "\$_POST = ";
    print_r($_POST);

    echo "\$_GET = ";
    print_r($_GET);

    echo "\$_SESSION = ";
    print_r($_SESSION);
    echo "</pre>";
}
?>