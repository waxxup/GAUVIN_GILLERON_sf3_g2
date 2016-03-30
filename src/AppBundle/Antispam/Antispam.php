<?php

namespace AppBundle\Antispam;

class Antispam
{
    private $antispam;

    public function __construct($antispamLength, \Swift_Mailer $mailer)
    {
        $this->antispamLength = $antispamLength;
        $this->mailer         = $mailer;
    }
    public function isSpam($text)
    {

        return strlen($text) > $this->antispamLength;
    }
}