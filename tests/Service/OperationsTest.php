<?php

declare(strict_types=1);

namespace App\Tests\Service;

use App\Service\Operations;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class OperationsTest extends KernelTestCase
{

    public function testIsPalindrome()
    {
        $checker = new Operations();

        $this->assertTrue($checker->isPalindrome('anna'));
        $this->assertFalse($checker->isPalindrome('Bark'));
    }

    public function testIsAnagram()
    {
        $checker = new Operations();

        $this->assertTrue($checker->isAnagram('coalface', 'cacao elf'));
        $this->assertFalse($checker->isAnagram('coalface', 'dark elf'));
    }

    public function testIsPangram()
    {
        $checker = new Operations();

        $this->assertTrue($checker->isPangram('The quick brown fox jumps over the lazy dog'));
        $this->assertFalse($checker->isPangram('The British Broadcasting Corporation (BBC) is a British public service broadcaster.'));
    }
}
