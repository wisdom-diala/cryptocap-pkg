# cryptocap-pkg
Package to fetch cryptocurrency price, market value, assets etc. using coincap API endpoints.
This package was developed to work with coincap api which has useful tool for real-time pricing and market activity for over 1,000 cryptocurrencies. By collecting exchange data from thousands of markets, it also offer transparent and accurate data on asset price and availability.

For all endpoints, a single page offers 100 responses by default and supports up to 2,000 responses per page upon requests.

With this package, you don't have to bother about connecting to the endpoints, it has already be taken care of by the package facades class. To get response from the enpoints, you have to just use the related facade class which will output the response in json format.

### Installation
Run this composer command to install the package
```
composer require wisdom-diala/cryptocap-pkg
```
### After installing add the provider and the aliase on config/app.php
```php
// Provider 
WisdomDiala\Cryptocap\Providers\CryptocapServiceProvider::class,
// Aliase
'Cryptocap' => WisdomDiala\Cryptocap\Facades\Cryptocap::class,
```

Below are the facades you can use to fetch the coresponding data you may need from the coincap api.

### Assets
The asset price is a volume-weighted average calculated by collecting ticker data from exchanges. Each exchange contributes to this price in relation to their volume, meaning higher volume exchanges have more affect on this global price. All values are translated into USD (United States Dollar) and can be translated into other units of measurement through the /rates endpoint.

```php 

Cryptocap::getAssets();

```
#### Response
```json
{
  "data": [
    {
      "id": "bitcoin",
      "rank": "1",
      "symbol": "BTC",
      "name": "Bitcoin",
      "supply": "17193925.0000000000000000",
      "maxSupply": "21000000.0000000000000000",
      "marketCapUsd": "119150835874.4699281625807300",
      "volumeUsd24Hr": "2927959461.1750323310959460",
      "priceUsd": "6929.8217756835584756",
      "changePercent24Hr": "-0.8101417214350335",
      "vwap24Hr": "7175.0663247679233209"
    },
    {
      "id": "ethereum",
      "rank": "2",
      "symbol": "ETH",
      "name": "Ethereum",
      "supply": "101160540.0000000000000000",
      "maxSupply": null,
      "marketCapUsd": "40967739219.6612727047843840",
      "volumeUsd24Hr": "1026669440.6451482672850841",
      "priceUsd": "404.9774667045200896",
      "changePercent24Hr": "-0.0999626159535347",
      "vwap24Hr": "415.3288028454417241"
    },
   ]
 }
```` 
 ### Response Data
 | Key        | Description                |
 |------------|---------------------------|
 |id          |unique identifier for asset|
 |rank        |rank is in ascending order - this number is directly associated with the marketcap whereas the highest marketcap receives rank 1|
 |symbol      |most common symbol used to identify this asset on an exchange|
 |name        |proper name for asset|
 |supply      |available supply for trading|
 |maxSupply   |total quantity of asset issued|
 |marketCapUsd  |supply x price|
 |volumeUsd24Hr |quantity of trading volume represented in USD over the last 24 hours|
 |priceUsd      |volume-weighted price based on real-time market data, translated to USD|
 |changePercent24Hr |the direction and value change in the last 24 hours|
 |vwap24Hr          |Volume Weighted Average Price in the last 24 hours|
 
 Coincap doc link for assets: https://docs.coincap.io/#89deffa0-ab03-4e0a-8d92-637a857d2c91
 
 ### Limit Assets
 This allows you to limit the number of result you get per request.
 ```php
Cryptocap::getAssetsWithLimit(5);
 ```
 ### Single Asset
 This allows you to fetch a single asset using the asset ID
 ```php
 Cryptocap::getSingleAsset('ethereum');
 ```
 ### Asset History
 ```php
 Cryptocap::getAssetHistory('ethereum', 'h2');
 ```
The first parameter is the id of the cryptocurrency and the second parameter is point-in-time interval. minute and hour intervals represent price at that time, the day interval represents average of 24 hour periods (timezone: UTC)
Coincap asset history link: https://docs.coincap.io/#61e708a8-8876-4fb2-a418-86f12f308978

### Asset Markets
```php
Cryptocap::getAssetMarket($id = 'ethereum', $limit = 5);
```
### Rates
```php
Cryptocap::getRates();
```
Coincap rates doc link: https://docs.coincap.io/#2a87f3d4-f61f-42d3-97e0-3a9afa41c73b

### Single Rate
```php
Cryptocap::getSingleRate('bulgarian-lev');
```
### Exchanges
```php
Cryptocap::getExchanges();
```
Coincap exchanges doc link: https://docs.coincap.io/#e1c56fd0-d57a-40dd-8a24-4b0883b58cfb

### Single Exchange
```php
Cryptocap::getSingleExchanges('binance');
```
### Markets
```php
Cryptocap::getMarkets();
```
Coincap markets doc link: https://docs.coincap.io/#d8fd6001-e127-448d-aadd-bfbfe2c89dbe

### Market by exchange ID
```php
Cryptocap::getMarketByExchangeId($exchangeId = 'poloniex');
```
### Market by quote symbol
```php
Cryptocap::getMarketByQuoteSymbol($quoteSymbol = 'ETH');
```
### Market by base ID
```php
Cryptocap::getMarketByBaseId($baseId = 'bitcoin', $limit = 5);
```
### Market by quote ID
```php
Cryptocap::getMarketByQuoteId($quoteId = 'bitcoin', $limit = 5);
```
### Market by asset symbol
```php
Cryptocap::getMarketByAssetSymbol($assetSymbol = 'BTC', $limit = 5);
```
### Market by asset ID
```php
Cryptocap::getMarketByAssetId($assetId = 'bitcoin', $limit = 5);
```

### Candles
```php
Cryptocap::getCandles($exchange='poloniex', $interval='m1', $baseId='ethereum', $quoteId='bitcoin', $start=1528410925604, $end=1528411045607);
```
Coincap candles doc link: https://docs.coincap.io/#51da64d7-b83b-4fac-824f-3f06b6c8d944

You can get the full documentation and well detailed explanation of the parameters used on the facade on the link below.
https://docs.coincap.io/#ee30bea9-bb6b-469d-958a-d3e35d442d7a

Video on how to use the package: https://youtu.be/a7odUpGSia8

### If you really find this useful please give us a star.
