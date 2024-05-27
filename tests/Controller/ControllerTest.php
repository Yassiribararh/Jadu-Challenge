<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ControllerTest extends WebTestCase
{

    public function testIsPalindrome()
    {
        $client = static::createClient();

        $client->request('GET', '/isPalindrome/Bark');

        $this->assertResponseIsSuccessful();
    }

    public function testIsAnagram()
    {
        $client = static::createClient();

        $client->request('GET', 'isAnagram/coalface/dark elf');

        $this->assertResponseIsSuccessful();
    }

    public function testIsPangram()
    {
        $client = static::createClient();

        $client->request('GET', '/isPangram/The quick brown fox jumps over the lazy dog”');

        $this->assertResponseIsSuccessful();
    }
}
