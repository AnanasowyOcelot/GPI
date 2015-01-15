<?php


namespace GPI\SiteBundle\Tests\Page;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FAQTest extends WebTestCase
{
    public function testLoadForm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/faq');

        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Najczęściej zadawane pytania")')->count()
        );
    }

}
