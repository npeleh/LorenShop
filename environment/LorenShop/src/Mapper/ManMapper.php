<?php

namespace LorenShop\Mapper;

use LorenShop\Entity\Man;
use LorenShop\Repository\ManRepository;

class ManMapper
{
    /**
     * @var ArticleRepository
     */
    private $manRepository;

    /**
     * @param ArticleRepository $articleRepository
     */
    public function __construct(ManRepository $manRepository)
    {
        $this->manRepository = $manRepository;
    }

    /**
     * @return array
     */
    public function findAllManCategories(): array
    {
        $result = $this->manRepository->findAllManCategories();

        $man = [];

        foreach ($result as $manAssoc) {
            $man[] = $this->mapRowToArcitle($manAssoc);
        }

        return $man;
    }

    /**
     * @param int $id
     * @return Woman
     */
    public function findManCategoriesById(int $id): Man
    {
        $manAssoc = $this->manRepository->findManCategoriesById($id);

        return $this->mapRowToArcitle($manAssoc);
    }

    /**
     * @param array $row
     * @return Woman
     */
    private function mapRowToArcitle(array $row): Man
    {
        return Man::fromState($row);
    }
}