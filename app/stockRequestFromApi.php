<?php

use App\Controllers\{AddNewStockController};
use App\Models\QuoteFromYahoo;


if (!empty($_POST['symbol']) && !empty($client->getQuote(strtoupper($_POST['symbol'])))) {

    $quoteObjectFromApi = $client->getQuote($_POST['symbol']);
    $quoteObjectFromApi = (array)json_decode(json_encode($quoteObjectFromApi, true));
    $getStock = new QuoteFromYahoo($quoteObjectFromApi);
    $json = json_encode($getStock->classToArray(), true);

    (new AddNewStockController())->AddNewStockController($json, $getStock->getSymbol());


} else {
    echo 'wrong symbol';
}