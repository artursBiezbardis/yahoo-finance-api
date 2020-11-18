<?php

use Scheb\YahooFinanceApi\ApiClientFactory;
use GuzzleHttp\Client;


// Create a new client from the factory
$client = ApiClientFactory::createApiClient();

// Or use your own Guzzle client and pass it in
$options = [/*...*/];
$guzzleClient = new Client($options);

$client = ApiClientFactory::createApiClient($guzzleClient);

// Returns an array of Scheb\YahooFinanceApi\Results\SearchResult
$searchResult = $client->search("Apple");