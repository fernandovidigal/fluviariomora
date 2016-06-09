<?php

function getPage($uri)
{
    $uri_path = $_SERVER["REQUEST_URI"];

    // SANITIZE STRING
    $uri_path = strip_tags($uri_path);
    $uri_path = htmlspecialchars($uri_path, ENT_QUOTES);
    $uri_path = preg_replace("/[^a-zA-Z\/\.]/", "", $uri_path);
    
    // SEPARATE THE URI BY /
    $uri_parts = explode("/", $uri_path);
    $page = $uri_parts[count($uri_parts) - 1];
    
    if(!empty($page))
    {
        return $page;
    } else {
        return "home.php";
    }
}

function showPage($page)
{
    if(file_exists(pages_path . "/" . $page))
    {
        include pages_path . "/" . $page;
    } else {
        header("Location: 404.php");
    }
    
    /*if(file_exists("pages/" . $page))
    {
        include "pages/" . $page;
    } else {
        header("Location: ../404.php");
    }*/
}

?>