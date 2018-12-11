<?php
/**
 * Created by: DotKernel Team
 * User: gabidjdev
 * Date: 21/11/2018
 * Time: 18:49
 */

namespace Dot\Doctrine\Mapper;

use Doctrine\ORM\EntityManager;

trait EntityManagerAwareTrait
{
    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * @return EntityManager
     */
    public function getEntityManager():? EntityManager
    {
        return $this->entityManager;
    }

    /**
     * @param EntityManager $entityManager
     */
    public function setEntityManager(EntityManager $entityManager): void
    {
        $this->entityManager = $entityManager;
    }
}
