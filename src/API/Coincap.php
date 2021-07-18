<?php

namespace WisdomDiala\Cryptocap\API;


class Coincap
{
    public static function getRequest($url)
    {

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $url,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'GET',
		));

		$response = curl_exec($curl);

		curl_close($curl);
		return json_decode($response);
    }

    public static function domainUrl()
    {
    	return "api.coincap.io";
    }

    public static function allAssets()
    {
    	$url = self::domainUrl()."/v2/assets";
    	return self::getRequest($url);
    }

    public static function allAssetsWithLimit($limit)
    {
    	$url = self::domainUrl()."/v2/assets?limit=$limit";
    	return self::getRequest($url);
    }
 
    public static function singleAsset($id)
    {
    	$url = self::domainUrl()."/v2/assets/$id";
    	return self::getRequest($url);
    }

    public static function assetHistory($id, $interval)
    {
    	$url = self::domainUrl()."/v2/assets/$id/history?interval=$interval";
    	return self::getRequest($url);
    }

    public static function assetMarket($id, $limit)
    {
    	$url = self::domainUrl()."/v2/assets/$id/markets?limit=$limit";
    	return self::getRequest($url);
    }

    public static function rates()
    {
    	$url = self::domainUrl()."/v2/rates";
    	return self::getRequest($url);
    }

    public static function singleRate($id)
    {
    	$url = self::domainUrl()."/v2/rates/$id";
    	return self::getRequest($url);
    }

    public static function exchanges()
    {
    	$url = self::domainUrl()."/v2/exchanges";
    	return self::getRequest($url);
    }

    public static function singleExchanges($id)
    {
    	$url = self::domainUrl()."/v2/exchanges/$id";
    	return self::getRequest($url);
    }

    public static function markets()
    {
    	$url = self::domainUrl()."/v2/markets";
    	return self::getRequest($url);
    }

    public static function marketsByExchangeId($exchangeId, $limit=null)
    {
    	$url = self::domainUrl()."/v2/markets?exchangeId=$exchangeId&limit=$limit";
    	return self::getRequest($url);
    }

    public static function marketsByBaseSymbol($baseSymbol, $limit=null)
    {
    	$url = self::domainUrl()."/v2/markets?baseSymbol=$baseSymbol&limit=$limit";
    	return self::getRequest($url);
    }

    public static function marketsByQuoteSymbol($quoteSymbol, $limit=null)
    {
        $url = self::domainUrl()."/v2/markets?quoteSymbol=$quoteSymbol&limit=$limit";
        return self::getRequest($url);
    }

    public static function marketsByBaseId($baseId, $limit=null)
    {
        $url = self::domainUrl()."/v2/markets?baseId=$baseId&limit=$limit";
        return self::getRequest($url);
    }

    public static function marketsByQuoteId($quoteId, $limit=null)
    {
        $url = self::domainUrl()."/v2/markets?quoteId=$quoteId&limit=$limit";
        return self::getRequest($url);
    }

    public static function marketsByAssetSymbol($assetSymbol, $limit=null)
    {
        $url = self::domainUrl()."/v2/markets?assetSymbol=$assetSymbol&limit=$limit";
        return self::getRequest($url);
    }

    public static function marketsByAssetId($assetId, $limit=null)
    {
        $url = self::domainUrl()."/v2/markets?assetId=$assetId&limit=$limit";
        return self::getRequest($url);
    }

    public static function candles($exchange, $interval, $baseId, $quoteId, $start=null, $end=null)
    {
        $url = self::domainUrl()."/v2/candles?exchange=$exchange&interval=$interval&baseId=$baseId&quoteId=$quoteId&start=$start&end=$end";
        return self::getRequest($url);
    }
}
