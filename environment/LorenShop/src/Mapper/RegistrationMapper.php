<?php

namespace LorenShop\Mapper;

use LorenShop\Entity\Registration;
use LorenShop\Repository\RegistrationRepository;

class RegistrationMapper
{
    /**
     * @var ArticleRepository
     */
    private $registrationRepository;

    /**
     * @param ArticleRepository $articleRepository
     */
    public function __construct(RegistrationRepository $registrationRepository)
    {
        $this->registrationRepository = $registrationRepository;
    }

    /**
     * @return array
     */

    public function findRegisteredUser(): array
    {
        $result = $this->registrationRepository->findRegisteredUser();

        $products = [];

        foreach ($result as $productAssoc) {
            $products[] = $this->mapRowToArcitle($productAssoc);
        }

        return $products;
    }


    public function findAllRegistrationCategories(): array
    {
        $result = $this->registrationRepository->findAllRegistrationCategories();

        $registration = [];

        foreach ($result as $registrationAssoc) {
            $registration[] = $this->mapRowToArcitle($registrationAssoc);
        }

        return $registration;
    }

    /**
     * @param int $id
     * @return Registration
     */
    public function findRegistrationCategoriesById(int $id): array
    {
        $registrationAssoc = $this->registrationRepository->findRegistrationCategoriesById($id);

        return $this->mapRowToArcitle($registrationAssoc);
    }

    /**
     * @param array $row
     * @return Registration
     */
    private function mapRowToArcitle(array $row): Registration
    {
        return Registration::fromState($row);
    }
}