<?php

declare(strict_types=1);

namespace App\Service;

interface OperationsInterface
{
    public function isPalindrome(string $word): bool;
    public function isAnagram(string $word, string $comparison): bool;
    public function isPangram(string $phrase): bool;
}
