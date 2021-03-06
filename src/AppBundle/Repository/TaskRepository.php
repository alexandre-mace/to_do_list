<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Task;


/**
 * TaskRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TaskRepository extends \Doctrine\ORM\EntityRepository
{
    public function getFilteredTasks($formData)
    {
        $qb =  $this->createQueryBuilder('t')
            ->addSelect('u')
            ->join('t.author', 'u')
            ->orderBy($formData['field'], $formData['order']);

        if (!empty($formData['complete'])){
            $qb->andWhere('t.complete = 1');
        }
        if (!empty($formData['author'])){
            $qb->andWhere('u = :user')->setParameter('user', $formData['author']);
        }

        return $qb->getQuery()->getResult();
    }
    public function findByGreaterStartPositionAndLowerOrEqualEndPosition($positionStart, $positionEnd) {
        $qb = $this->createQueryBuilder('t')
            ->where('t.position > :positionStart')
            ->andWhere('t.position <= :positionEnd')
            ->setParameter('positionStart', $positionStart)
            ->setParameter('positionEnd', $positionEnd)
            ->getQuery();
        return $qb->execute();    
    }

    public function findByLowerStartPositionAndGreaterOrEqualEndPosition($positionStart, $positionEnd) {
        $qb = $this->createQueryBuilder('t')
            ->where('t.position < :positionStart')
            ->andWhere('t.position >= :positionEnd')
            ->setParameter('positionStart', $positionStart)
            ->setParameter('positionEnd', $positionEnd)
            ->getQuery();
        return $qb->execute();    
    }

    public function getMaxPosition()
    {
        $maxPosition = $this->createQueryBuilder('t')
            ->select('MAX(t.position)')
            ->getQuery()
            ->getSingleScalarResult();
        return $maxPosition; 

    }
}
