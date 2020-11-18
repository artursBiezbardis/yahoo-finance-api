<?php declare(strict_types=1);


namespace App\Models;


class QuoteFromYahoo
{

    private string $symbol;
    private string $longName;
    private float $regularMarketPrice;
    private float $regularMarketChange;
    private float $regularMarketChangePercent;
    private float $regularMarketPreviousClose;
    private string $bidSize;
    private string $askSize;
    private string $dayRange;
    private string $fiftyTwoWeekRange;
    private int $regularMarketVolume;
    private int $averageDailyVolume3Month;
    private int $marketCap;

    private string $quoteSourceName;
    private string $fullExchangeName;
    private string $currency;


    public function __construct(array $quote)
    {

        $this->symbol = $quote['symbol'];
        $this->longName = $quote['longName'];
        $this->regularMarketPrice = $quote['regularMarketPrice'];
        $this->regularMarketChange = $quote['regularMarketChange'];
        $this->regularMarketChangePercent = $quote['regularMarketChangePercent'];
        $this->regularMarketPreviousClose = $quote['regularMarketPreviousClose'];
        $this->bidSize = $quote['bidSize'] && key_exists('bid', $quote) ?
            ((string)$quote['bid'] . ' x ' . (string)$quote['bidSize'] . '00') : $quote['bidSize'];
        $this->askSize = $quote['askSize'] && key_exists('ask', $quote) ?
            ((string)$quote['ask'] . ' x ' . (string)$quote['askSize'] . '00') : $quote['askSize'];
        $this->dayRange = key_exists('dayRange', $quote) ?
            ($quote['dayRange']) :
            ((string)$quote['regularMarketDayLow']) . ' - ' . ((string)$quote['regularMarketDayHigh']);
        $this->fiftyTwoWeekRange = key_exists('fiftyTwoWeekRange', $quote) ?
            $quote['fiftyTwoWeekRange'] :
            ((string)$quote['fiftyTwoWeekLow']) . ' - ' . ((string)$quote['fiftyTwoWeekHigh']);
        $this->regularMarketVolume = $quote['regularMarketVolume'];
        $this->averageDailyVolume3Month = $quote['averageDailyVolume3Month'];
        $this->marketCap = $quote['marketCap'];

        $this->quoteSourceName = $quote['quoteSourceName'] == null ? (' - ') : $quote['quoteSourceName'];
        $this->fullExchangeName = $quote['fullExchangeName'];
        $this->currency = $quote['currency'];

    }

    /**
     * @return mixed|string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @return mixed|string
     */
    public function getLongName()
    {
        return $this->longName;
    }

    /**
     * @return float|mixed
     */
    public function getRegularMarketPrice()
    {
        return $this->regularMarketPrice;
    }

    /**
     * @return float|mixed
     */
    public function getRegularMarketChange()
    {
        return $this->regularMarketChange;
    }

    /**
     * @return float|mixed
     */
    public function getRegularMarketChangePercent()
    {
        return $this->regularMarketChangePercent;
    }

    /**
     * @return float|mixed
     */
    public function getRegularMarketPreviousClose()
    {
        return $this->regularMarketPreviousClose;
    }

    /**
     * @return string
     */
    public function getBid(): string
    {
        return $this->bidSize;
    }

    /**
     * @return string
     */
    public function getAsk(): string
    {
        return $this->askSize;
    }

    /**
     * @return string
     */
    public function getDayRange(): string
    {
        return $this->dayRange;
    }

    /**
     * @return string
     */
    public function getFiftyTwoWeekRange(): string
    {
        return $this->fiftyTwoWeekRange;
    }

    /**
     * @return int|mixed
     */
    public function getRegularMarketVolume()
    {
        return $this->regularMarketVolume;
    }

    /**
     * @return int|mixed
     */
    public function getAverageDailyVolume3Month()
    {
        return $this->averageDailyVolume3Month;
    }

    /**
     * @return int|mixed
     */
    public function getMarketCap()
    {
        return $this->marketCap;
    }

    /**
     * @return mixed|string
     */
    public function getQuoteSourceName()
    {
        return $this->quoteSourceName;
    }

    /**
     * @return mixed|string
     */
    public function getFullExchangeName()
    {
        return $this->fullExchangeName;
    }

    /**
     * @return mixed|string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    public function classToArray()
    {
        return get_object_vars($this);
    }
}