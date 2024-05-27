<?php

declare(strict_types=1);

namespace App\Service;

class Operations implements OperationsInterface
{
    public function isPalindrome(string $word): bool {
        //Remove any char that's not a letter or an int
        $strToCompare = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $word));

        //strrev() — Reverse a string - compare reverse string to confirm is palindrome
        if(strrev($strToCompare) != $strToCompare) {
            return false;
        }

        return true;
    }

    public function isAnagram(string $word, string $comparison): bool{
        //Remove any char that's not a letter or an int
        $strToCompareWord = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $word));
        $strToCompareComparison = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $comparison));

        //get array of each char and how many times it occurs
        $wordArray = count_chars($strToCompareWord, 1);
        $comparisonArray = count_chars($strToCompareComparison, 1);

        //compare arrays
        if($wordArray != $comparisonArray) {
            return false;
        }

        return true;
    }

    public function isPangram(string $phrase): bool{
        //Get all alphabets
        $alphabets = range('a', 'z');

        //Remove any char that's not a letter or an int
        $strToCompare = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $phrase));

        //Check if each alphabet exists in phrase
        foreach ($alphabets as $letter) {
            if (!str_contains($strToCompare, $letter)) {
                return false;
            }
        }

        return true;
    }
}
