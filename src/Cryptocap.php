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

    public function getMarketByExchangeId($exchangeId)
    {
        return Coincap::marketsByExchangeId($exchangeId);
    }

    public function getMarketByBaseSymbol($baseSymbol)
    {
        return Coincap::marketsByBaseSymbol($baseSymbol);
    }
}
