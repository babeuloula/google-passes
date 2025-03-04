<?php

declare(strict_types=1);

namespace GooglePasses\WalletObjects\Collections;

use GooglePasses\WalletObjects\Models\DetailsItemInfo;

class DetailsTemplateOverride extends \Google_Collection
{
    protected $collection_key = 'detailsItemInfos';

    public $detailsItemInfos;
    protected $detailsItemInfosType = DetailsItemInfo::class;
    protected $detailsItemInfosDataType = 'array';

    public function setDetailsItemInfos($detailsItemInfos)
    {
        $this->detailsItemInfos = $detailsItemInfos;
    }
    public function getDetailsItemInfos()
    {
        return $this->detailsItemInfos;
    }
}
