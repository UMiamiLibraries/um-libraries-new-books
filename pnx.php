<?php
require_once(__DIR__ . '/pnxplease/src/PnxPlease/PnxPlease/PnxPlease.php');

use PnxPlease\PnxPlease\PnxPlease;

$pnxJSON = function($alma_id) {
    $pnx = new PnxPlease($alma_id, 'http://miami-primo.hosted.exlibrisgroup.com/primo_library/libweb/action/display.do');
    echo $pnx->toJSON();
};

$pnxJSON(htmlspecialchars($_GET['alma_id']));
