<?php
    include("classes/DomDocumentParser.php");

    function createLink($src, $url) {}

    function followLinks($url) {
        $parser = new DomDocumentParser($url);
        $linkParser = $parser->getLinks();

        foreach($linkList as $link) {
            $href = $link->getAttribute("href");

            if(strpos($href, "#") !== false) {
                continue;
            }
            else if(substr($href, 0, 11) == "javascript:") {
                continue;
            }
    
            createLink($href, $url);
            // echo $href . "<br>";
        }
    }

    $startUrl = "https://yobit.net/en";
    followLinks($startUrl);
?>