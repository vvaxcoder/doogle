<?php
    include("classes/DomDocumentParser.php");

    function followLinks($url) {
        $parser = new DomDocumentParser($url);
    }

    $startUrl = "https://yobit.net/en";
    followLinks($startUrl);
?>