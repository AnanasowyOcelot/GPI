<?php

namespace GPI\CoreBundle\Model\Service;

use GPI\AuctionBundle\Entity\AuctionComments;
use GPI\CoreBundle\Model\Auction\AddNewAuctionCommand;
use GPI\CoreBundle\Model\Auction\AuctionRepository;
use GPI\CoreBundle\Model\Auction\PartlyUpdateAuctionCommand;
use GPI\CoreBundle\Model\Auction\UpdateAuctionCommand;
use GPI\CoreBundle\Model\Calendar\Calendar;
use GPI\OfferBundle\Entity\Offer as OfferEntity;
use Doctrine\ORM\EntityManager;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class Mail
{
    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;

    }

    public function sendMail($adress, $template, $subject){
        $message = $this->mailer->createMessage()
            ->setSubject($subject)
            ->setFrom('poczta@gpi.bitgrind.pl')
            ->setTo('lukasz.woroniecki@gmail.com')
//            ->setTo($adress)
            ->setBody($template);

        $this->mailer->send($message);
    }


}
