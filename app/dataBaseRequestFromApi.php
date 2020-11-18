<?php

use App\Repositories\{TimeStumpRepository};
use App\Controllers\{RequestArrayOfStockSymbolsInDBForValidationController, UpdateAllDbController};


$arrayOfAllSymbolsInDB = (new RequestArrayOfStockSymbolsInDBForValidationController())->
RequestArrayOfStockSymbolsInDBForValidation();

empty($arrayOfAllSymbolsInDB) ?: $time = (new TimeStumpRepository())->execute();

if (isset($time) && (strtotime($time) + 600) <= time()) {

    (new UpdateAllDbController())->updateAllDb();
}