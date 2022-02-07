<?php

namespace App\Controllers;

use App\Core\{AbstractController, EntityManager};
use App\Entity\Events;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\Common\Util\Debug;

/**
 * Controller encargado de mostrar la información concreta de un evento en concreto
 */
class DetailEvent extends AbstractController
{
    public function detailEvent($nameEvent)
    {
        $em = (new EntityManager())->get();
        $eventsRepository = $em->getRepository(Events::class);
        $finalNameEvent = str_replace('%20', ' ', $nameEvent);
        
        //Guardo la info de un evento según la búsqueda por su nombre
        $detailEvent = $eventsRepository->detailEvent($finalNameEvent);
        
        //Array que contiene los agentes en los que han participado en X evento
        $arrayInfoAgent = [];
        /**
         * Por cada evento, accedo a su "StatsEvents" para poder acceder a la "Id" de cada agente y así tener la info de cada uno
         * Guardo en $agents la info de cada agente que ha participado en X evento para luego guardarlo en $arrayInfoAgent
         */
        foreach ($detailEvent->getStatsEvents() as $detail) {
            $agents = $detail->getIdAgent();
            array_push($arrayInfoAgent, $agents);
        }
        return $this->render("detailEvent.html", [
            "result" => $arrayInfoAgent,
            "event" => $detailEvent
        ]);
    }
}