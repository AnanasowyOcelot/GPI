<?php

namespace GPI\OfferBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;

class Document
{
    protected $offer;

    protected $description;

    protected $file;

    public function setOffer($offer)
    {
        $this->offer = $offer;
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
}
