<?php

namespace GPI\OfferBundle\Tests\Entity;

use GPI\OfferBundle\Model\Offer;

class OfferTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $date
     * @return \GPI\OfferBundle\Model\Calendar
     */
    private function getCalendar($date = '2000-02-02 12:00')
    {
        $calendar = $this->getMockBuilder('\GPI\OfferBundle\Model\Calendar')
            ->setMethods(array('time'))
            ->getMock();

        $calendar->expects($this->any())
            ->method('time')
            ->will($this->returnValue(strtotime($date)));
        return $calendar;
    }

    private function getOffer($calendar = null)
    {
        return new Offer(new \DateTime('2014-12-03 14:01'), $calendar);
    }

    public function testShortContentMax30Chars()
    {
        $offer = $this->getOffer();

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
        $calendar = $this->getCalendar('2014-12-02 14:01');

        $offer = $this->getOffer($calendar);

        $this->assertEquals($offer->isActive(), true);
    }

    public function testCancelOffer()
    {
        $offer = $this->getOffer();

        $this->assertFalse($offer->isCanceled());

        $offer->cancel();

        $this->assertTrue($offer->isCanceled());
    }

    public function testDeactivateOffer()
    {
        $calendar = $this->getCalendar('2014-12-01 14:01');

        $offer = $this->getOffer($calendar);

        $this->assertTrue($offer->isActive());

        $offer->deactivate();

        $this->assertFalse($offer->isActive());
    }

    public function testOfferActiveBeforeEndTime()
    {
        $calendar = $this->getCalendar('2014-12-01 14:01');
        $offer = new Offer(new \DateTime('2014-12-03 14:01'), $calendar);

        $this->assertTrue($offer->isActive());
    }

    public function testOfferNotActiveAfterEndTime()
    {
        $calendar = $this->getCalendar('2014-12-02 14:01');
        $offer = new Offer(new \DateTime('2014-12-01 14:01'), $calendar);

        $this->assertFalse($offer->isActive());
    }
}
