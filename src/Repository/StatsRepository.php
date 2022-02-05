<?php

namespace App\Repository;

use App\Entity\Stats;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\Common\Util\Debug;

class StatsRepository extends EntityRepository
{
    public function insertStats($upload, $agente, $datos)
    {
        /*echo "<pre>";
        Debug::dump($agente);
        die();*/
        $stats = new Stats();
        $stats->setIdUploads($upload);
        $stats->setIdAgent($agente);
        $stats->setLevel($datos[1][5]);
        $stats->setLifetimeAp($datos[1][6]);
        $stats->setCurrentAp($datos[1][7]);
        $stats->setMissionDaysAttended($datos[1][44]);
        $stats->setNl1331meetupsAttended($datos[1][45]);
        $this->getEntityManager()->persist($stats);
        $this->getEntityManager()->flush();

        return $stats;
    }

    public function showRank()
    {
        $rankStats = $this->findBy([], ["level" => "DESC", "currentAp" => "DESC"]);
        return $rankStats;
    }
}
