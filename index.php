<?php
    $language = $_REQUEST["language"];
    $lang_en = "Location: /src/index.html";
    $lang_jp = "Location: /src/index_jp.html";
    
    switch ($language) {
        case "en":
            header($lang_en); 
            break;
        case "vi":
            header($lang_vi); 
            break; 
        default:
            header($lang_en);
    }
?>

