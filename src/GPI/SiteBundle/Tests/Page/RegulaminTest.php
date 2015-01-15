<?php


namespace GPI\SiteBundle\Tests\Page;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegulaminTest extends WebTestCase
{
    public function testLoadForm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/regulamin');

        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Regulamin")')->count()
        );
    }

}
