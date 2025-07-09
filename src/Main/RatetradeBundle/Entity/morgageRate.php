<?php
use App\Entity\MortgageRate;
use Doctrine\ORM\EntityManagerInterface;

class MortgageRateRepository
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findLowestRatesByLender(string $lender): array
    {
        $query = $this->entityManager->createQuery(
            'SELECT r.id, r.interestRate, r.termYears, r.lender
             FROM App\Entity\MortgageRate r
             WHERE r.lender = :lender
             ORDER BY r.interestRate ASC'
        )->setParameter('lender', $lender);

        return $query->getResult();
    }
}
