<?php

namespace GPI\CoreBundle\Tests\Model;

use Application\Sonata\ClassificationBundle\Entity\Category;
use GPI\CoreBundle\Model\Auction\Auction;
use GPI\CoreBundle\Model\Offer\AddNewOfferCommand;
use GPI\CoreBundle\Model\Offer\Offer;

class OfferTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getEmMock()
    {
        $emMock = $this->getMock('\Doctrine\ORM\EntityManager',
            array('getRepository', 'getClassMetadata', 'persist', 'flush'), array(), '', false);

        $emMock->expects($this->any())
            ->method('persist')
            ->will($this->returnValue(null));
        $emMock->expects($this->any())
            ->method('flush')
            ->will($this->returnValue(null));
        return $emMock;
    }

    /**
     * @param $date
     * @return \GPI\CoreBundle\Model\Calendar\Calendar
     */
    private function getCalendar($date = '2000-02-02 12:00')
    {
        $calendar = $this->getMockBuilder('\GPI\CoreBundle\Model\Calendar\Calendar')
            ->setMethods(array('time'))
            ->getMock();

        $calendar->expects($this->any())
            ->method('time')
            ->will($this->returnValue(strtotime($date)));
        return $calendar;
    }

    private function getAuction($calendar = null)
    {
        return new Auction(new \DateTime('2014-12-03 14:01'), "wieloryb", "some content", new Category(), $calendar);
    }

    public function testNewOfferIsActive()
    {
        $calendar = $this->getCalendar('2014-12-02 14:01');
        $auction = $this->getAuction($calendar);
        $offer = new Offer('content', 123, $auction);

        $this->assertEquals($auction->isActive(), true);
        $this->assertEquals($offer->isActive(), true);
    }

    public function testOfferWithNotActiveAuctionIsNotActive()
    {
        $calendar = $this->getCalendar('2014-12-02 14:01');
        $auction = $this->getAuction($calendar);
        $auction->deactivate();
        $offer = new Offer('content', 123, $auction);

        $this->assertEquals($auction->isActive(), false);
        $this->assertEquals($offer->isActive(), false);
    }

    public function testOfferBidding()
    {
        $calendar = $this->getCalendar('2014-12-02 14:01');

        $auction = $this->getAuction($calendar);
        $offerService = new \GPI\CoreBundle\Model\Service\Offer($this->getEmMock());

        $winningOffer = $this->createNewOffer($offerService, $auction, 100, 0.5);
        $losingOffer = $this->createNewOffer($offerService, $auction, 400, 0.5);

        $auction->addOffer($winningOffer);
        $auction->addOffer($losingOffer);

        $offerService->updateActualPrices($auction);

        $this->assertEquals($winningOffer->getActualPrice(), 200);
    }

    public function testBiddingPercentOver100ThrowsException()
    {
        $calendar = $this->getCalendar('2014-12-02 14:01');
        $auction = $this->getAuction($calendar);
        $offerService = new \GPI\CoreBundle\Model\Service\Offer($this->getEmMock());
        try {
            $this->createNewOffer($offerService, $auction, 100, 11);
            $this->assertTrue(false);
        } catch (\InvalidArgumentException $e) {
            $this->assertTrue(true);
        }
    }

    public function testBiddingPercentEqualsZeroThrowsException()
    {
        $calendar = $this->getCalendar('2014-12-02 14:01');
        $auction = $this->getAuction($calendar);
        $offerService = new \GPI\CoreBundle\Model\Service\Offer($this->getEmMock());
        try {
            $this->createNewOffer($offerService, $auction, 100, 0);
            $this->assertTrue(false);
        } catch (\InvalidArgumentException $e) {
            $this->assertTrue(true);
        }
    }

    public function testBiddingPercentLessThanZeroThrowsException()
    {
        $calendar = $this->getCalendar('2014-12-02 14:01');
        $auction = $this->getAuction($calendar);
        $offerService = new \GPI\CoreBundle\Model\Service\Offer($this->getEmMock());
        try {
            $this->createNewOffer($offerService, $auction, 100, -3);
            $this->assertTrue(false);
        } catch (\InvalidArgumentException $e) {
            $this->assertTrue(true);
        }
    }

    private function createNewOffer(\GPI\CoreBundle\Model\Service\Offer $offerService, $auction, $price, $bidPercent)
    {
        $command = $this->createNewCommand($auction, $price, $bidPercent);
        return $offerService->createNewOffer($command);
    }

    /**
     * @param $auction
     * @param $price
     * @param $bidPercent
     * @return AddNewOfferCommand
     */
    private function createNewCommand($auction, $price, $bidPercent)
    {
        $winningOfferCommand = new AddNewOfferCommand();
        $winningOfferCommand->setAuction($auction);
        $winningOfferCommand->setPrice($price);
        $winningOfferCommand->setContent('wieloryb');
        $winningOfferCommand->setBidPercent($bidPercent);
        return $winningOfferCommand;
    }
}
