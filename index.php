<?php
    $language = $_REQUEST["language"];

    switch ($language) {
        case "en":
            include("lang_en.php"); 
            break;
        case "jp":
            include("lang_jp.php");  
            break; 
        default:
            include("lang_en.php"); 
    }
?>

