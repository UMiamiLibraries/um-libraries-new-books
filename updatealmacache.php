<?php
$almaCache = function($isbn, $book_cover_url, $alma_id) {

    $data = array($alma_id => array('book_cover' => "$book_cover_url" ,'isbn' => "$isbn"));

    $path = $_SERVER["DOCUMENT_ROOT"]."/external_scripts/newitems/cover_cache/".$alma_id.".json";

     $newJsonString = json_encode($data);
    file_put_contents($path, $newJsonString);

};

$almaCache(htmlspecialchars($_GET['isbn']), htmlspecialchars($_GET['book_cover_url']), htmlspecialchars($_GET['alma_id']));
