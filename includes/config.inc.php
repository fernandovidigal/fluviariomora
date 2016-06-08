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
        define("home_path", "/fluviariomora/index.php");
        define("pages_path", "/fluviariomora/pages");
        define("img_path", "/fluviariomora/imagens");
        define("scripts_path", "/fluviariomora/scripts");
    } else {
        define("path", "http://www.fluviariomora.pt");
        define("home_path", "http://www.fluviariomora.pt/index.php");
        define("pages_path", "http://www.fluviariomora.pt/pages");
        define("img_path", "http://www.fluviariomora.pt/imagens");
        define("scripts_path", "http://www.fluviariomora.pt/scripts");
    }


    // FUNCTIONS
    include("scripts/functions.php");

?>