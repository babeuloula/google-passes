<?php


namespace GooglePasses\WalletObjects\Models;


use GooglePasses\WalletObjects\Collections\FieldSelector;

class ListTemplateOverride extends \Google_Model
{
    protected $firstRowOption;
    protected $secondRowOption;
    protected $thirdRowOption;

    public function setFirstRowOption(FirstRowOption $firstRowOption)
    {
        $this->firstRowOption = $firstRowOption;
    }
    public function getFirstRowOption()
    {
        return $this->firstRowOption;
    }
    public function setSecondRowOption(FieldSelector $secondRowOption)
    {
        $this->secondRowOption = $secondRowOption;
    }
    public function getSecondRowOption()
    {
        return $this->secondRowOption;
    }
    public function setThirdRowOption(FieldSelector $thirdRowOption)
    {
        $this->thirdRowOption = $thirdRowOption;
    }
    public function getThirdRowOption()
    {
        return $this->thirdRowOption;
    }
}