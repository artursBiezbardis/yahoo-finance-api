create table stocks
(
    symbol     varchar(4)                          not null,
    stockInfo  json                                not null,
    updateTime timestamp default CURRENT_TIMESTAMP null,
    constraint stocks_symbol_uindex
        unique (symbol)
);

alter table stocks
    add primary key (symbol);

INSERT INTO yahooDB.stocks (symbol, stockInfo, updateTime) VALUES ('AAPL', '{"symbol": "AAPL", "askSize": "119.9 x 1400", "bidSize": "119.72 x 1200", "currency": "USD", "dayRange": "118.15 - 120.99", "longName": "Apple Inc.", "marketCap": 2045316562944, "quoteSourceName": "Delayed Quote", "fullExchangeName": "NasdaqGS", "fiftyTwoWeekRange": "53.1525 - 137.98", "regularMarketPrice": 120.3, "regularMarketChange": 1.0400009, "regularMarketVolume": 91183018, "averageDailyVolume3Month": 156859778, "regularMarketChangePercent": 0.87204504, "regularMarketPreviousClose": 119.26}', '2020-11-17 12:09:33');
INSERT INTO yahooDB.stocks (symbol, stockInfo, updateTime) VALUES ('AMZN', '{"symbol": "AMZN", "askSize": "3139.26 x 800", "bidSize": "3128.01 x 1000", "currency": "USD", "dayRange": "3074.14 - 3142.7", "longName": "Amazon.com, Inc.", "marketCap": 1571012476928, "quoteSourceName": "Delayed Quote", "fullExchangeName": "NasdaqGS", "fiftyTwoWeekRange": "1626.03 - 3552.25", "regularMarketPrice": 3131.06, "regularMarketChange": 2.25, "regularMarketVolume": 3636782, "averageDailyVolume3Month": 5189492, "regularMarketChangePercent": 0.071912326, "regularMarketPreviousClose": 3128.81}', '2020-11-17 12:09:41');
INSERT INTO yahooDB.stocks (symbol, stockInfo, updateTime) VALUES ('IBM', '{"symbol": "IBM", "askSize": "118.66 x 900", "bidSize": "0 x 800", "currency": "USD", "dayRange": "117.12 - 118.55", "longName": "International Business Machines Corporation", "marketCap": 105465511936, "quoteSourceName": "Delayed Quote", "fullExchangeName": "NYSE", "fiftyTwoWeekRange": "90.56 - 158.75", "regularMarketPrice": 118.36, "regularMarketChange": 1.5100021, "regularMarketVolume": 5280658, "averageDailyVolume3Month": 5264089, "regularMarketChangePercent": 1.292257, "regularMarketPreviousClose": 116.85}', '2020-11-17 12:09:52');