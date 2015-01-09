<?php


namespace GPI\AuctionBundle\Command;

use Doctrine\Common\Collections\ArrayCollection;
use GPI\AuctionBundle\Entity\Auction;
use GPI\CoreBundle\Model\Auction\AddNewAuctionCommand;
use GPI\CoreBundle\Model\Offer\AddNewOfferCommand;
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
//        $filePath = __DIR__ . '/../DataFixtures/auctionFixtures.php'; // TODO: podac pelna sciezke na podstawie konfiguracji
//        // TODO: zastąpić klasą z funkcją
//        $data = (include $filePath);

        $numberOfAuctions = $input->getArgument('numberOfAuctions');
        if (!$numberOfAuctions) {
            $numberOfAuctions = 1;
        }


        



        /** @var \GPI\Sonata\ClassificationBundle\Entity\CategoryRepository $categoryRepo */
        $categoryRepo = $this->getContainer()->get('gpi_sonata.category_repository');
        $categories = $categoryRepo->findAll();

        $userRepo = $this->getContainer()->get('doctrine')->getManager()->getRepository('ApplicationSonataUserBundle:User');
        $users = $userRepo->findAll();

        $documentsRepo = $this->getContainer()->get('doctrine')->getManager()->getRepository('GPIDocumentBundle:Document');
        $documents = $documentsRepo->findAll();

        foreach ($numberOfAuctions as $auction) {

            $command = $this->createCommand($documents, $categories);
            $auctionService = $this->getContainer()->get('gpi_auction.service.auction');

            /** @var Auction $auction */
            $auction = $auctionService->createNewAuction($command);

            $user = $users[rand(0, count($users) - 1)];
            $auction->setUpdatedBy($user);
            $auction->setCreatedBy($user);
            $offers = array();
            for ($i = 0; $i < rand(1, 6); $i++) {
                $offers[] = $this->getRandomOffer($auction, new ArrayCollection($this->getRandomSubarray($documents)), $user);
            }
            $auction->setOffers($offers);
            $this->persistAuction($auction);
        }

        $output->writeln("Dodano " . $numberOfAuctions . " aukcji.");
    }



    private function getRandomOffer(Auction $auction, $documents, $user)
    {

        $userRepo = $this->getContainer()->get('doctrine')->getManager()->getRepository('ApplicationSonataUserBundle:User');
        $allUsers = $userRepo->findAll();

        $users = array_values(
            array_filter($allUsers, function ($u) use ($user) {
                return $u !== $user;
            })
        );
        $command = new AddNewOfferCommand();
        $command->setAuction($auction);
        $command->setContent("Przykładowa treść oferty");
        $command->setPrice(rand(5, $auction->getMaxPrice()));
        foreach ($documents as $document) {
            $command->getDocuments()->add($document);
        }
        $offerService = $this->getContainer()->get('gpi_offer.service.offer');

        /** @var \GPI\OfferBundle\Entity\Offer $offer */
        $offer = $offerService->createNewOffer($command);
        $user = $users[rand(0, count($users) - 1)];
        $offer->setUpdatedBy($user);
        $offer->setCreatedBy($user);
        return $offer;
    }

    /**
     * @param Auction $auction
     */
    private function persistAuction(Auction $auction)
    {
        /** @var \Doctrine\ORM\EntityManager $em */
        $em = $this->getContainer()->get('doctrine')->getManager();
        foreach ($auction->getDocuments() as $document) {
            $em->persist($document);
        }
        foreach ($auction->getOffers() as $offer) {
            $em->persist($offer);
        }
        $em->persist($auction);
        $em->flush();
    }

    /**
     * @param $documents
     * @return array
     */
    protected function getRandomSubarray($documents)
    {
        $arrayOfDocuments = array_slice($documents, rand(0, count($documents)), rand(0, count($documents)));
        return $arrayOfDocuments;
    }

    /**
     * @param $documents
     * @param $categories
     * @return AddNewAuctionCommand
     */
    private function createCommand($documents, $categories)
    {
        $command = new AddNewAuctionCommand();
        $command->setName("Przykładowa nazwa oferty");
        $command->setContent("Test, test, test, test, test, test, test, test, test, test, test, test, test, test, test.");
        $command->setMaxPrice(rand(10, 10000000));
        $timePeriods = array(30, 60, 90);
        $command->setTimePeriod($timePeriods[rand(0, 2)]);

        $arrayOfDocuments = new ArrayCollection($this->getRandomSubarray($documents));

        $command->setDocuments($arrayOfDocuments);

        $category = $categories[rand(1, count($categories) - 1)];
        $command->addCategory($category);
        return $command;
    }
}