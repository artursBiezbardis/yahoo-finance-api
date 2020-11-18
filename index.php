<?php declare(strict_types=1);

use App\Controllers\{RequestArrayOfStockSymbolsInDBForValidationController, QuoteFromDBController};
use App\Models\QuoteFromYahoo;

require_once 'vendor/autoload.php';
require_once 'connectionToDB.php';
require_once 'app/apiRequestBuilder.php';

$arrayOfAllSymbolsInDB = (new RequestArrayOfStockSymbolsInDBForValidationController())->
RequestArrayOfStockSymbolsInDBForValidation();

if (array_key_exists('symbol', $_POST) &&
    in_array(strtoupper($_POST['symbol']), $arrayOfAllSymbolsInDB)) {

    $quoteArrayFromDB = (new QuoteFromDBController())->getQuoteFromDBController();
    $getStock = new QuoteFromYahoo(json_decode($quoteArrayFromDB, true));

} else {

    require_once 'app/stockRequestFromApi.php';
}

require_once 'app/Views/index.view.php';
require_once 'app/dataBaseRequestFromApi.php';