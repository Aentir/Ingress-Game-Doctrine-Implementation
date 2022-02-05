<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Stats;
use App\Core\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\Common\Util\Debug;

class ShowRankStats extends AbstractController
{
    public function showRank()
    {
        $em = (new EntityManager())->get();
        $statsRepository = $em->getRepository(Stats::class);
        $rank = $statsRepository->showRank();

        /*echo "<pre>";
        Debug::dump($rank[0]);
        die();*/
        return $this->render("rank_stats.html", [
            "result" => $rank
        ]);
    }
}