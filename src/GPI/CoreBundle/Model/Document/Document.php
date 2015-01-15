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
        $metadata->addPropertyConstraint(
            'file',
            new Assert\File(
                array(
                    'maxSize' => '10240k',
                    'mimeTypes' => array(
                        'application/pdf',
                        'image/jpg',
                        'image/png',
                        'text/doc',
                        'text/docx',
                        'text/txt',
                        "image/jpeg"
                    ),
                    'mimeTypesMessage' => 'Please upload a valid PDF, image or text file',
                )
            )
        );
    }

    abstract public function upload();
}
