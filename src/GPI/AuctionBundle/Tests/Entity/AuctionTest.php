<?php

namespace GPI\AuctionBundle\Tests\Entity;

use Application\Sonata\ClassificationBundle\Entity\Category;
use GPI\AuctionBundle\Model\Auction;

class AuctionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $date
     * @return \GPI\AuctionBundle\Model\Calendar
     */
    private function getCalendar($date = '2000-02-02 12:00')
    {
        $calendar = $this->getMockBuilder('\GPI\AuctionBundle\Model\Calendar')
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

    public function testShortContentMax30Chars()
    {
        $auction = $this->getAuction();

        $str30 = str_repeat('b', 30);

        $auction->setContent($str30);
        $this->assertEquals($auction->getContentShort(), $str30);

        $str31 = str_repeat('b', 31);

        $auction->setContent($str31);
        $this->assertNotEquals($auction->getContentShort(), $str31);

        $auction->setContent($str31);
        $this->assertEquals($auction->getContentShort(), 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb...');
    }

    public function testNewAuctionIsActive()
    {
        $calendar = $this->getCalendar('2014-12-02 14:01');

        $auction = $this->getAuction($calendar);

        $this->assertEquals($auction->isActive(), true);
    }

    public function testCancelAuction()
    {
        $auction = $this->getAuction();

        $this->assertFalse($auction->isCanceled());

        $auction->cancel();

        $this->assertTrue($auction->isCanceled());
    }

    public function testDeactivateAuction()
    {
        $calendar = $this->getCalendar('2014-12-01 14:01');

        $auction = $this->getAuction($calendar);

        $this->assertTrue($auction->isActive());

        $auction->deactivate();

        $this->assertFalse($auction->isActive());
    }

    public function testAuctionActiveBeforeEndTime()
    {
        $calendar = $this->getCalendar('2014-12-01 14:01');
        $auction = new Auction(
            new \DateTime('2014-12-03 14:01'),
            "wieloryb",
            "some content",
            new Category(),
            $calendar
        );

        $this->assertTrue($auction->isActive());
    }

    public function testAuctionNotActiveAfterEndTime()
    {
        $calendar = $this->getCalendar('2014-12-02 14:01');
        $auction = new Auction(
            new \DateTime('2014-12-01 14:01'),
            "wieloryb",
            "some content",
            new Category(),
            $calendar
        );

        $this->assertFalse($auction->isActive());
    }

    public function testNewAuctionHasName()
    {
        $auction = new Auction(
            new \DateTime('2014-12-01 14:01'),
            "wieloryb",
            "some content",
            new Category()
        );
        $this->assertEquals($auction->getName(), 'wieloryb');
    }

    public function testCannotCreateAuctionWithoutName()
    {
        try {
            new Auction(new \DateTime('2014-12-01 14:01'), null, "some content", new Category());
            $this->assertTrue(false, 'Error: Auction created without name.');
        } catch (\Exception $e) {
            $this->assertInstanceOf('InvalidArgumentException', $e);
        }
    }

    public function testCannotHaveEmptyName()
    {
        try {
            new Auction(new \DateTime('2014-12-01 14:01'), '', "some content", new Category());
            $this->assertTrue(false, 'Error: Auction created with empty name.');
        } catch (\Exception $e) {
            $this->assertInstanceOf('InvalidArgumentException', $e);
        }

        try {
            $auction = new Auction(new \DateTime('2014-12-01 14:01'), 'some name', "some content", new Category());
            $auction->setName('');
            $this->assertTrue(false, 'Error: Auction created with empty name.');
        } catch (\Exception $e) {
            $this->assertInstanceOf('InvalidArgumentException', $e);
        }
    }

    public function testCannotHaveEmptyDescription()
    {
        try {
            new Auction(new \DateTime('2014-12-01 14:01'), 'wieloryb', '', new Category());
            $this->assertTrue(false, 'Error: Auction created with empty content.');
        } catch (\Exception $e) {
            $this->assertInstanceOf('InvalidArgumentException', $e);
        }

        try {
            $auction = new Auction(new \DateTime('2014-12-01 14:01'), 'wieloryb', "some content", new Category());
            $auction->setContent('');
            $this->assertTrue(false, 'Error: Auction created with empty content.');
        } catch (\Exception $e) {
            $this->assertInstanceOf('InvalidArgumentException', $e);
        }
    }

    public function testCannotHaveEmptyCategory()
    {
        try {
            new Auction(new \DateTime('2014-12-01 14:01'), 'wieloryb', 'some content', null);
            $this->assertTrue(false, 'Error: Auction created without category.');
        } catch (\Exception $e) {
        }
    }
}
