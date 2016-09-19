<?php
require_once (__DIR__ ."/um-book-cover/src/app/BookCover.php");

$bookCover = function($syndetics_client_code, $isbn, $image_size, $update_almaIds, $book_cover_url, $alma_id) {
    $cover = new BookCover($syndetics_client_code, $isbn, $image_size);

    if($update_almaIds){
        $cover->update_idCache($alma_id, $isbn, $book_cover_url);
	}else{
        echo $cover->getCover();
    }
};

$bookCover(htmlspecialchars($_GET['syndetics_client_code']), htmlspecialchars($_GET['isbn']), htmlspecialchars($_GET['image_size']),
    htmlspecialchars($_GET['update_almaIds']), htmlspecialchars($_GET['book_cover_url']), htmlspecialchars($_GET['alma_id']));
