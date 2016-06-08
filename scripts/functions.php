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
    
    return $uri_parts[count($uri_parts) - 1];
}

function showPage($page)
{
    
    if(file_exists("pages/" . $page))
    {
        switch($page)
        {
            case "home.php" : 
                include_once "pages/home.php";
                break;
                
            case "exposicao.php" : 
                include_once "pages/exposicao.php";
                break;
                
            case "actividades.php" : 
                include_once "pages/actividades.php";
                break;
                
            default: 
                include_once "pages/home.php";
                break;
                
        }
    } else {
        echo "falso";
        //header("Location: ../404.php");
    }
}

?>