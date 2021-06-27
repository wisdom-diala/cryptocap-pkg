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
		return $response;
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
}
