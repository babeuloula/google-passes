<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;

class TimeInterval extends Google_Model
{
    protected $kind;
    protected $end;
    protected $start;

    public function setEnd(DateTime $end)
    {
        $this->end = $end;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setStart(DateTime $start)
    {
        $this->start = $start;
    }

    public function getStart()
    {
        return $this->start;
    }
}