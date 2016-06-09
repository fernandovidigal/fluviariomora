<?php

    ob_start();

    if(stristr($_SERVER['HTTP_HOST'], 'local') || (substr($_SERVER['HTTP_HOST'], 0, 7) == '192.168'))
    {
        $local = true;
    } else {
        $local = false;
    }

    if($local)
    {
        define("path", "/fluviariomora");
        define("img_path", "/fluviariomora/imagens");
        define("scripts_path", "/fluviariomora/scripts");
    } else {
        define("path", "http://www.fluviariomora.pt");
        define("img_path", "http://www.fluviariomora.pt/imagens");
        define("scripts_path", "http://www.fluviariomora.pt/scripts");
    }

    // Outras constantes
    define("pages_path", "pages");
    define("includes_path", "includes");

    // FUNCTIONS
    include("scripts/functions.php");

?>