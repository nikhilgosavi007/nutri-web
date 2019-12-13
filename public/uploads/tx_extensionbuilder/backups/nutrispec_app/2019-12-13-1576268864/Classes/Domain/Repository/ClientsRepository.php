<?php
namespace GroupProject\NutrispecApp\Domain\Repository;


use GroupProject\NutrispecApp\Domain\Model\Clients;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

/***
 *
 * This file is part of the "NutriSpec App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Kunal Harkare <kunal.harkare@hof-university.de>
 *
 ***/
/**
 * The repository for Clients
 */
class ClientsRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @param string $search
     * @return array|QueryResultInterface|Clients[]
     */
    public function findBySearch(string $search){

        $query = $this->createQuery();

        $constraints = [];

        $constraints = $query->like('name', '%' . $search . '%');
        $constraints = $query->like('email', '%' . $search . '%');
        $constraints = $query->like('height', '%' . $search . '%');
        $constraints = $query->like('weight', '%' . $search . '%');
        $constraints = $query->like('bmi', '%' . $search . '%');
        $constraints = $query->like('age', '%' . $search . '%');

        $query->matching(
            $query->logicalOr(
                $constraints
            )
        );

        return $query->execute();
    }
}
