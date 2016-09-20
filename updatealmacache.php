<?php
$almaCache = function($isbn, $book_cover_url, $alma_id) {

    $url = 'http://sp.library.miami.edu/external_scripts/newitems/cover_cache/alma_ids.json';
    $jsonString = file_get_contents($url);
    $data = json_decode($jsonString, true);

    if (empty($data)){
        $data = array($alma_id => array('book_cover' => "$book_cover_url" ,'isbn' => "$isbn"));
    }else{
        $new_item = array($alma_id => array('book_cover' => "$book_cover_url" ,'isbn' => "$isbn"));
        $data= array_merge($data, $new_item);
    }

    $path = $_SERVER["DOCUMENT_ROOT"]."/external_scripts/newitems/cover_cache/alma_ids.json";

     $newJsonString = json_encode($data);
    file_put_contents($path, $newJsonString);

};

$almaCache(htmlspecialchars($_GET['isbn']), htmlspecialchars($_GET['book_cover_url']), htmlspecialchars($_GET['alma_id']));
