<?php

declare(strict_types=1);

namespace GooglePasses\WalletObjects\Collections;

use GooglePasses\WalletObjects\Models\FieldReference;

class FieldSelector extends \Google_Collection
{
    public $fields;
    protected $fieldsType = FieldReference::class;
    protected $fieldsDataType = 'array';

    protected $collection_key = 'fields';

    public function setFields($fields)
    {
        $this->fields = $fields;
    }
    public function getFields()
    {
        return $this->fields;
    }
}
