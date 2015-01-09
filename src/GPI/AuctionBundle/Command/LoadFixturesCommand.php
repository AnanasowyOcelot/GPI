<?php


namespace GPI\AuctionBundle\Command;

use GPI\AuctionBundle\DataFixtures\AuctionCommandFactory;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class LoadFixturesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('gpi:fixtures:load')
            ->setDescription('Load fixtures');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $auctionFixturesData = self::loadAuctionFixtures();
        $auctionCommandFactory = new AuctionCommandFactory();

        $commands = array_map(function ($auctionData) use ($auctionCommandFactory) {
            return $auctionCommandFactory->createAuctionCommand($auctionData);
        }, $auctionFixturesData);



        $output->writeln("Loaded.");
    }

    private function loadAuctionFixtures() {
        $filePath = __DIR__ . '/../DataFixtures/auctionFixtures.csv'; // TODO: podac pelna sciezke na podstawie konfiguracji
        $csvRows = array_map('str_getcsv', file($filePath));
        $colNames = $csvRows[0];
        $dataRows = array_slice($csvRows, 1);
        $fixturesData = array_map(function ($row) use ($colNames) {
            return array_combine($colNames, $row);
        }, $dataRows);
        return $fixturesData;
    }
}