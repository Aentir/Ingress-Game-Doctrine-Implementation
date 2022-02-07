<?php

namespace App\Controllers;

use App\Core\{AbstractController, EntityManager};
use App\Entity\StatsEvents;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\Common\Util\Debug;

/**
 * Controller encargado de buscar las diferencias de las estadísticas de cada agente en un evento en concreto
 * Mostrando la primera y la última
 */
class StatsDiffEvents extends AbstractController
{
    public function showDiffStats()
    {
        $em = (new EntityManager())->get();
        $statsEventsRepository = $em->getRepository(StatsEvents::class);

        $idEvent = "";
        if (isset($_POST["eventCompared"])) {
            $idEvent = $_POST["eventCompared"];
        }

        //Primeras stats
        $firstStatsEvents = $statsEventsRepository->findBy([
            "idAgent" => $_SESSION["IdAgent"],
            "idEvents" => $idEvent
        ], ["idStatsEvents" => "ASC"]);

        //Últimas stats
        $lastStatsEvent = $statsEventsRepository->findBy([
            "idAgent" => $_SESSION["IdAgent"],
            "idEvents" => $idEvent
        ], ["idStatsEvents" => "DESC"]);

        if (!$lastStatsEvent && !$firstStatsEvents) {
            $firstStatsEvents[0] = null;
            $lastStatsEvent[0] = null;
        }
        $this->render("statsDiffEvents.html", [
            "name" => $_SESSION["agentName"],
            "firstStatsEvents" => $firstStatsEvents[0],
            "lastStatsEvents" => $lastStatsEvent[0]
        ]);
    }
}