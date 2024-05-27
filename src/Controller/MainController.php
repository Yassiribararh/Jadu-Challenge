<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\Operations;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    private Operations $operationsService;

    public function __construct(Operations $operations) {
        $this->operationsService = $operations;
    }

    #[Route('/isPalindrome/{word}', name: 'app_is_palindrome')]
    public function checkIsPalindrome($word): JsonResponse
    {
        $result = $this->operationsService->isPalindrome($word);
        return new JsonResponse(['result' => $result]);
    }

    #[Route('/isAnagram/{word}/{comparison}', name: 'app_is_anagram')]
    public function checkIsAnagram($word, $comparison): JsonResponse
    {
        $result = $this->operationsService->isAnagram($word, $comparison);
        return new JsonResponse(['result' => $result]);
    }

    #[Route('/isPangram/{phrase}', name: 'app_is_pangram')]
    public function checkIsPangram($phrase): JsonResponse
    {
        $result = $this->operationsService->isPangram($phrase);
        return new JsonResponse(['result' => $result]);
    }
}
