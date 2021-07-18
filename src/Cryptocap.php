<?php

namespace WisdomDiala\Cryptocap;

use WisdomDiala\Cryptocap\API\Coincap;
 

class Cryptocap
{
    public function getAssets()
    {
    	return Coincap::allAssets();
    }

    public function getAssetsWithLimit($limit)
    {
    	return Coincap::allAssetsWithLimit($limit);
    }

    public function getSingleAsset($id)
    {
    	return Coincap::singleAsset($id);
    }

    public function getAssetHistory($id, $interval)
    {
    	return Coincap::assetHistory($id, $interval);
    }

    public function getAssetMarket($id, $limit)
    {
        return Coincap::assetMarket($id, $limit);
    }

    public function getRates()
    {
        return Coincap::rates();
    }

    public function getSingleRate($id)
    {
        return Coincap::singleRate($id);
    }

    public function getExchanges()
    {
        return Coincap::exchanges();
    }

    public function getSingleExchanges($id)
    {
        return Coincap::singleExchanges($id);
    }

    public function getMarkets()
    {
        return Coincap::markets();
    }

    public function getMarketByExchangeId($exchangeId, $limit=null)
    {
        return Coincap::marketsByExchangeId($exchangeId, $limit);
    }

    public function getMarketByBaseSymbol($baseSymbol, $limit=null)
    {
        return Coincap::marketsByBaseSymbol($baseSymbol, $limit);
    }

    public function getMarketByQuoteSymbol($quoteSymbol, $limit=null)
    {
        return Coincap::marketsByBaseSymbol($quoteSymbol, $limit);
    }

    public function getMarketByBaseId($baseId, $limit=null)
    {
        return Coincap::marketsByBaseId($baseId, $limit);
    }

    public function getMarketByQuoteId($quoteId, $limit=null)
    {
        return Coincap::marketsByQuoteId($quoteId, $limit);
    }

    public function getMarketByAssetSymbol($assetSymbol, $limit=null)
    {
        return Coincap::marketsByAssetSymbol($assetSymbol, $limit);
    }

    public function getMarketByAssetId($assetId, $limit=null)
    {
        return Coincap::marketsByAssetId($assetId, $limit);
    }

    public function getCandles($exchange, $interval, $baseId, $quoteId, $start=null, $end=null)
    {
        return Coincap::candles($exchange, $interval, $baseId, $quoteId, $start, $end);
    }
}
