<?php

namespace App\Controllers;

use App\Core\{AbstractController, EntityManager};
use App\Entity\Stats;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\Common\Util\Debug;
/**
 * Controller encargado de mostrar el ranking de estadísticas globales
 */
class ShowRankStats extends AbstractController
{
    public function showRank()
    {
        $em = (new EntityManager())->get();
        $statsRepository = $em->getRepository(Stats::class);
        $rank = $statsRepository->showRank();

        return $this->render("rank_stats.html", [
            "result" => $rank
        ]);
    }
}