<?php

namespace AppBundle\Antispam;

class Antispam
{
    private $antispam;

    public function __construct($antispamLength)
    {
        $this->antispamLength = $antispamLength;
    }
    public function isSpam($text)
    {
        return strlen($text) > $this->antispamLength;
    }
}