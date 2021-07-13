# cryptocap-pkg
Package to fetch cryptocurrency price, market value, assets etc. using coincap API endpoints.
This package was developed to work with coincap api which has useful tool for real-time pricing and market activity for over 1,000 cryptocurrencies. By collecting exchange data from thousands of markets, it also offer transparent and accurate data on asset price and availability.

For all endpoints, a single page offers 100 responses by default and supports up to 2,000 responses per page upon requests.

With this package, you don't have to bother about connecting to the endpoints, it has already be taken care of by the package facades class. To get response from the enpoints, you have to just use the related facade class which will out the response in json format.

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
 | Key       | Description               |
 |-----------|---------------------------|
 | id        |unique identifier for asset|
