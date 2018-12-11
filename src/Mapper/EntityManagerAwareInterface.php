<?php
/**
 * Created by: DotKernel Team
 * User: gabidjdev
 * Date: 21/11/2018
 * Time: 18:48
 */

namespace Dot\Doctrine\Mapper;

use Doctrine\ORM\EntityManager;

interface EntityManagerAwareInterface
{
    public function getEntityManager():? EntityManager;

    public function setEntityManager(EntityManager $entityManager);
}
