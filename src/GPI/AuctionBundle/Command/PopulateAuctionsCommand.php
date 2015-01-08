<?php


namespace GPI\AuctionBundle\Command;

use GPI\AuctionBundle\Entity\Auction;
use GPI\CoreBundle\Model\Auction\AddNewAuctionCommand;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PopulateAuctionsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('gpi:auction:populate')
            ->setDescription('Populate auctions')
            ->addArgument('numberOfAuctions', InputArgument::OPTIONAL, 'How many auctions do you want to create?');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $numberOfAuctions = $input->getArgument('numberOfAuctions');
        if (!$numberOfAuctions) {
            $numberOfAuctions = 1;
        }

        $auctionService = $this->getContainer()->get('gpi_auction.service.auction');

        /** @var \GPI\Sonata\ClassificationBundle\Entity\CategoryRepository $categoryRepo */
        $categoryRepo = $this->getContainer()->get('gpi_sonata.category_repository');
        $categories = $categoryRepo->findAll();

        $userRepo = $this->getContainer()->get('doctrine')->getManager()->getRepository('ApplicationSonataUserBundle:User');
        $users = $userRepo->findAll();

        for ($i = 0; $i < $numberOfAuctions; $i++) {

        $command = new AddNewAuctionCommand();
        $command->setName("Przykładowa nazwa oferty " . ($i + 1));
        $command->setContent("Test, test, test, test, test, test, test, test, test, test, test, test, test, test, test.");
        $command->setMaxPrice(20);
        $command->setTimePeriod(30);

        $category = $categories[0];
        $command->addCategory($category);

        /** @var Auction $auction */
        $auction = $auctionService->createNewAuction($command);

        $user = $users[0];
        $auction->setUpdatedBy($user);
        $auction->setCreatedBy($user);
        $this->persistAuction($auction);
        }

        $output->writeln("Dodano " . $numberOfAuctions . " aukcji.");
    }

    /**
     * @param Auction $auction
     */
    private function persistAuction(Auction $auction)
    {
        /** @var \Doctrine\ORM\EntityManager $em */
        $em = $this->getContainer()->get('doctrine')->getManager();
        //        foreach ($auction->getDocuments() as $document) {
        //            $em->persist($document);
        //        }
        //var_dump(get_class($auction));

        $em->persist($auction);
        $em->flush();
    }
}