<?php

namespace GPI\OfferBundle\Tests\Entity;

use GPI\OfferBundle\Entity\Offer;

class OfferTest extends \PHPUnit_Framework_TestCase
{
    public function testShortContentMax30Chars()
    {
        $offer = new Offer();

        $str30 = str_repeat('b', 30);

        $offer->setContent($str30);
        $this->assertEquals($offer->getContentShort(), $str30);

        $str31 = str_repeat('b', 31);

        $offer->setContent($str31);
        $this->assertNotEquals($offer->getContentShort(), $str31);

        $offer->setContent($str31);
        $this->assertEquals($offer->getContentShort(), 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb...');
    }

    public function testNewOfferIsActive()
    {
        $offer = new Offer();

        $this->assertEquals($offer->isActive(), true);
    }

    public function testCancelOffer()
    {
        $offer = new Offer();

        $this->assertFalse($offer->isCanceled());

        $offer->cancel();

        $this->assertTrue($offer->isCanceled());
    }

    public function testDeactivateOffer()
    {
        $offer = new Offer();

        $this->assertTrue($offer->isActive());

        $offer->deactivate();

        $this->assertFalse($offer->isActive());
    }

}
