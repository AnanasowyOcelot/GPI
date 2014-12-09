<?php

namespace GPI\LayoutBundle\Tests\Page;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomepageTest extends WebTestCase
{
    public function testLoadAuctionBlock()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Lista aukcji")')->count()
        );
    }

    public function testLoadCategoryBlock()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Kategorie")')->count()
        );
    }
}
