<?php


namespace App\Services;

use App\Models\QuoteFromYahoo;
use App\Repositories\{RequestArrayOfStockSymbolsInDBForValidationRepository, AddNewStockRepository};
use Scheb\YahooFinanceApi\ApiClientFactory;
use GuzzleHttp\Client;


class UpdateAllDatabaseService
{
    public function updateBD(): void
    {

        $options = [/*...*/];
        $guzzleClient = new Client($options);
        $client = ApiClientFactory::createApiClient($guzzleClient);

        $symbolsFromDB = (new RequestArrayOfStockSymbolsInDBForValidationRepository())->request();


        (new AddNewStockRepository())->deleteAllTableContent();

        foreach ($symbolsFromDB as $symbol) {

            $quote = $client->getQuote($symbol);
            $quoteArray = json_decode(json_encode($quote, true), true);
            $getStock = new QuoteFromYahoo($quoteArray);
            $json = json_encode($getStock->classToArray(), true);
            (new AddNewStockRepository())->execute($json, $getStock->getSymbol());
            usleep(100000);
        }

    }
}