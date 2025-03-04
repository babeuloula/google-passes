<?php

declare(strict_types=1);

namespace GooglePasses\WalletObjects\Models;

use GooglePasses\WalletObjects\Collections\CardTemplateOverride;
use GooglePasses\WalletObjects\Collections\DetailsTemplateOverride;

class ClassTemplateInfo extends \Google_Model
{
    public $cardBarcodeSectionDetails;
    protected $cardBarcodeSectionDetailsType = CardBarcodeSectionDetails::class;
    protected $cardBarcodeSectionDetailsDataType = '';

    public $cardTemplateOverride;
    protected $cardTemplateOverrideType = CardTemplateOverride::class;
    protected $cardTemplateOverrideDataType = '';

    public $detailsTemplateOverride;
    protected $detailsTemplateOverrideType = DetailsTemplateOverride::NULL_VALUE;
    protected $detailsTemplateOverrideDataType = '';

    public $listTemplateOverride;
    protected $listTemplateOverrideType = ListTemplateOverride::class;
    protected $listTemplateOverrideDataType = '';

    public function setCardBarcodeSectionDetails(CardBarcodeSectionDetails $cardBarcodeSectionDetails)
    {
        $this->cardBarcodeSectionDetails = $cardBarcodeSectionDetails;
    }
    public function getCardBarcodeSectionDetails()
    {
        return $this->cardBarcodeSectionDetails;
    }
    public function setCardTemplateOverride(CardTemplateOverride $cardTemplateOverride)
    {
        $this->cardTemplateOverride = $cardTemplateOverride;
    }
    public function getCardTemplateOverride()
    {
        return $this->cardTemplateOverride;
    }
    public function setDetailsTemplateOverride(DetailsTemplateOverride $detailsTemplateOverride)
    {
        $this->detailsTemplateOverride = $detailsTemplateOverride;
    }
    public function getDetailsTemplateOverride()
    {
        return $this->detailsTemplateOverride;
    }
    public function setListTemplateOverride(ListTemplateOverride $listTemplateOverride)
    {
        $this->listTemplateOverride = $listTemplateOverride;
    }
    public function getListTemplateOverride()
    {
        return $this->listTemplateOverride;
    }
}
