<?php

namespace GPI\AuctionBundle\Tests\Page;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AddAuctionTest extends WebTestCase
{
    public function testLoadForm()
    {
        $client = $this->createAuthorizedClient();

        $crawler = $client->request('GET', '/auction/add');

        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Dodaj nową aukcję")')->count()
        );
    }

    protected function createAuthorizedClient()
    {
        $client = static::createClient();
        $container = $client->getContainer();

        $session = $container->get('session');
        /** @var $userManager \FOS\UserBundle\Doctrine\UserManager */
        $userManager = $container->get('fos_user.user_manager');
        /** @var $loginManager \FOS\UserBundle\Security\LoginManager */
        $loginManager = $container->get('fos_user.security.login_manager');
        $firewallName = $container->getParameter('fos_user.firewall_name');
        var_dump($firewallName);

        $user = $userManager->findUserBy(array('username' => 'admin'));
        $loginManager->loginUser($firewallName, $user);

        // save the login token into the session and put it in a cookie
        $container->get('session')->set('_security_' . $firewallName,
            serialize($container->get('security.context')->getToken()));
        $container->get('session')->save();
        $client->getCookieJar()->set(new \Symfony\Component\BrowserKit\Cookie($session->getName(), $session->getId()));

        return $client;
    }
}
