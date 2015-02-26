<?php

namespace GPI\CoreBundle\Model\Document;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;

abstract class Document
{
    protected $auction;

    protected $description;

    protected $file;

    public function setAuction($auction)
    {
        $this->auction = $auction;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('description', new NotBlank());
        $metadata->addPropertyConstraint('file', new NotBlank());
    }

    abstract public function upload();
}
