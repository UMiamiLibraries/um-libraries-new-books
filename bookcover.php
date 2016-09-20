<?php
require_once (__DIR__ ."/um-book-cover/src/app/BookCover.php");

$bookCover = function($syndetics_client_code, $isbn, $image_size, $googleBooksKey) {
    $cover = new BookCover($syndetics_client_code, $isbn, $image_size, $googleBooksKey);
    echo $googleBooksKey;
    echo $cover->getCover();
};

$bookCover(htmlspecialchars($_GET['syndetics_client_code']), htmlspecialchars($_GET['isbn']), htmlspecialchars($_GET['image_size']), htmlspecialchars($_GET['googleBooksKey']));
