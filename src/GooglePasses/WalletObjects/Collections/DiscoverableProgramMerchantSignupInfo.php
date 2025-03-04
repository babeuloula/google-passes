<?php

declare(strict_types=1);

namespace GooglePasses\WalletObjects\Collections;

use GooglePasses\WalletObjects\Models\Uri;

class DiscoverableProgramMerchantSignupInfo extends \Google_Collection
{
    protected $collection_key = 'signupSharedDatas';
    public $signupSharedDatas;
    public $signupWebsite;
    protected $signupWebsiteType = Uri::class;
    protected $signupWebsiteDataType = '';

    public function setSignupSharedDatas($signupSharedDatas)
    {
        $this->signupSharedDatas = $signupSharedDatas;
    }
    public function getSignupSharedDatas()
    {
        return $this->signupSharedDatas;
    }
    public function setSignupWebsite(Uri $signupWebsite)
    {
        $this->signupWebsite = $signupWebsite;
    }
    public function getSignupWebsite()
    {
        return $this->signupWebsite;
    }
}
