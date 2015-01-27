<?php

namespace GPI\AuctionBundle\Controller;

use Functional as F;

use GPI\AuctionBundle\Entity\AddAuctionCommandAttributeValue;
use GPI\CoreBundle\Model\Auction\AuctionAttribute;
use GPI\DocumentBundle\Entity\Document;
use GPI\AuctionBundle\Entity\Auction;

use GPI\CoreBundle\Model\Auction\AddNewAuctionCommand;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class AddAuctionController extends Controller
{
    public function indexAction(Request $request, $commandId)
    {
        if (!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw new AccessDeniedException('You have to be logged');
        }
        /** @var \GPI\CoreBundle\Model\Auction\AddNewAuctionCommand $command */
        $commandRepo = $this->getDoctrine()->getRepository('GPIAuctionBundle:AddNewAuctionCommand');
        $command = $commandRepo->findOneBy(array('id' => $commandId));
        $this->validateUser($command);

        $d1 = new Document();

        $command->getDocuments()->add($d1);
        ////////////////////////////////////////////////

        // C -> [A]
        $mapCategoryToAttributes = function ($category) {
            return $this->findAttributes($category);
        };
        // A -> F
        $mapAttrToField = function (AuctionAttribute $aa) use ($command) {
            $f = new AddAuctionCommandAttributeValue();
            $f->setName($aa->getName());
            $f->setCommand($command);
            return $f;
        };
        // F -> ...
        $addField = function ($field) use ($command) {
            $command->addAttributeValue($field);
        };

        $categories = $command->getCategories()->toArray();
        $attributes = F\flatten(F\map($categories, $mapCategoryToAttributes));
        $fields = F\map($attributes, $mapAttrToField);
        F\each($fields, $addField);

        ///////////////////////////////////////////////
        $form = $this->createForm('auction', $command);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $auctionService = $this->get('gpi_auction.service.auction');

            $auction = $auctionService->createNewAuction($command);
            $this->persistAuction($auction);

            return $this->redirect($this->generateUrl('sonata_user_profile_show'));
        }

        return $this->render(
            'GPIAuctionBundle:AddAuction:index.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @param $category
     * @return AuctionAttribute[]
     */
    private function findAttributes($category)
    {
        $attrGroupRepo = $auctionAttributesGroup = $this->getDoctrine()
            ->getRepository('GPIAuctionBundle:AuctionAttributesGroup');
        $group = $attrGroupRepo->findOneBy(['category' => $category]);
        if (!$group) {
            return [];
        }
        return $group->getAuctionAttributes()->toArray();
    }

    /**
     * @param Auction $auction
     */
    private function persistAuction(Auction $auction)
    {
        /** @var \Doctrine\ORM\EntityManager $em */
        $em = $this->getDoctrine()->getManager();
        foreach ($auction->getDocuments() as $document) {
            $em->persist($document);
        }
        $em->persist($auction);
        $em->flush();
    }

    /**
     * @param $command
     * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
     */
    private function validateUser($command)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!$command->isOwner($user)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
    }
}
