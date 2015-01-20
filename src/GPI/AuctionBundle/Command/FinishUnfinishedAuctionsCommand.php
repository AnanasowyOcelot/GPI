<?php


namespace GPI\AuctionBundle\Command;

use GPI\AuctionBundle\DataFixtures\AuctionCommandFactory;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FinishUnfinishedAuctionsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('gpi:auctions:finish')
            ->setDescription('Finish unfinished auctions');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $auctionService = $this->getContainer()->get('gpi_auction.service.auction');
        $auctionService->finishUnfinishedAuctionsAndInformWinners();
    }


}