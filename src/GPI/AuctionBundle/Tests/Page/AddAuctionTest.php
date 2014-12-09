<?php

namespace GPI\AuctionBundle\Tests\Page;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AddAuctionTest extends WebTestCase
{
    public function testLoadForm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/auction/add');

        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Dodaj nową aukcję")')->count()
        );
    }
}
