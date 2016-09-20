<?php
require_once (__DIR__ ."/um-book-cover/src/app/BookCover.php");

$almaCache = function($isbn, $book_cover_url, $alma_id) {

        $url = 'http://sp.library.miami.edu/external_scripts/newitems/cover_cache/alma_ids.json';
        $jsonString = file_get_contents($url);
        $data = json_decode($jsonString, true);

        $new_item[] = array($alma_id => array('book_cover' => "$book_cover_url" ,'isbn' => "$isbn"));
        array_push($data, $new_item);

        file_put_contents($url, $data);

};

$almaCache(htmlspecialchars($_GET['isbn']), htmlspecialchars($_GET['book_cover_url']), htmlspecialchars($_GET['alma_id']));
