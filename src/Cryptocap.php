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
}
