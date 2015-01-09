<?php


namespace GPI\AuctionBundle\DataFixtures;


use GPI\CoreBundle\Model\Auction\AddNewAuctionCommand;

class AuctionCommandFactory {

    public function createAuctionCommand(array $params){
        $command = new AddNewAuctionCommand();
        $command->setName($name);
        $command->setContent($content);
        $command->setMaxPrice($maxPrice);
        $command->setTimePeriod($timePeriod);
        //TODO: dodać do komendy dokumenty i kategorie
        //TODO: dodać do aukcji Oferty i użytkownika
        return $command;
    }

} 