<?php


namespace GPI\AuctionBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use GPI\AuctionBundle\Entity\Auction;
use GPI\CoreBundle\Model\Calendar\Calendar;

class AuctionEntityInitializer
{
    private $calendar;
    private $defaultImgPath;

    public function __construct(Calendar $calendar, $defaultImgPath)
    {
        $this->calendar = $calendar;
        $this->defaultImgPath = $defaultImgPath;
    }

    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if ($entity instanceof Auction) {
            $entity->init($this->calendar, $this->defaultImgPath);
        }
    }
} 