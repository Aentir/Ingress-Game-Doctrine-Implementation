<?php

namespace App\Repository;

use App\Entity\StatsEvents;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;

class StatsEventsRepository extends EntityRepository
{
    /**
     * Devuelve un nuevo objeto StatsEvents
     */
    public function insertStats($upload, $agente, $datos, $events)
    {
        $statsEvents = new StatsEvents();
        $statsEvents->setIdEvents($events);
        $statsEvents->setIdUploads($upload);
        $statsEvents->setIdAgent($agente);
        $statsEvents->setLifetimeAp($datos[1][6]);
        $statsEvents->setUniquePortalsVisited($datos[1][8]);
        $statsEvents->setResonatorsDeployed($datos[1][14]);
        $statsEvents->setLinksCreated($datos[1][15]);
        $statsEvents->setControlFieldsCreated($datos[1][16]);
        $statsEvents->setXmRecharged($datos[1][20]);
        $statsEvents->setPortalsCaptured($datos[1][21]);
        $statsEvents->setHacks($datos[1][24]);
        $statsEvents->setResonatorsDestroyed($datos[1][29]);

        $this->getEntityManager()->persist($statsEvents);
        $this->getEntityManager()->flush();

        return $statsEvents;
    }

    /**
     * Devuelve la primera estadística de un agente
     * en un evento en concreto y se ordena por la id de estadística de ese evento de manera ASC
     */
    public function firstStatsEvents($idEvent)
    {
        return $this->findBy([
            "idAgent" => $_SESSION["IdAgent"],
            "idEvents" => $idEvent
        ], ["idStatsEvents" => "ASC"]);
    }

    /**
     * Devuelve la primera estadística de un agente
     * en un evento en concreto y se ordena por la id de estadística de ese evento de manera DESC
     */
    public function lastStatsEvents($idEvent)
    {
        return $this->findBy([
            "idAgent" => $_SESSION["IdAgent"],
            "idEvents" => $idEvent
        ], ["idStatsEvents" => "DESC"]);
    }
}