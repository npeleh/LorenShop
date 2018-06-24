<?php

namespace LorenShop\Mapper;

use LorenShop\Entity\Woman;
use LorenShop\Repository\WomanRepository;

class WomanMapper
{
    /**
     * @var ArticleRepository
     */
    private $womanRepository;

    /**
     * @param ArticleRepository $articleRepository
     */
    public function __construct(WomanRepository $womanRepository)
    {
        $this->womanRepository = $womanRepository;
    }

    /**
     * @return array
     */
    public function findAllWomanCategories(): array
    {
        $result = $this->womanRepository->findAllWomanCategories();

        $woman = [];

        foreach ($result as $womanAssoc) {
            $woman[] = $this->mapRowToArcitle($womanAssoc);
        }

        return $woman;
    }

    /**
     * @param int $id
     * @return Woman
     */
    public function findWomanCategoriesById(int $id): Woman
    {
        $womanAssoc = $this->womanRepository->findWomanCategoriesById($id);

        return $this->mapRowToArcitle($womanAssoc);
    }

    /**
     * @param array $row
     * @return Woman
     */
    private function mapRowToArcitle(array $row): Woman
    {
        return Woman::fromState($row);
    }
}