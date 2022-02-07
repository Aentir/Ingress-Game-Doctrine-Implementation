<?php

namespace App\Controllers;

use App\Core\{AbstractController, EntityManager};
use App\Entity\{Stats, Agent, Uploads, Span, StatsEvents, Events};
use Doctrine\ORM\Mapping\Entity;
use Doctrine\Common\Util\Debug;

class InsertStatsController extends AbstractController
{
    public function insertStats()
    {
        $em = (new EntityManager())->get();

        /**
         * Instancio todos los REPOS
         */
        $uploadRepository = $em->getRepository(Uploads::class);
        $spanRepository = $em->getRepository(Span::class);
        $statsRepository = $em->getRepository(Stats::class);
        $agentRepository = $em->getRepository(Agent::class);
        $statsEventsRepository = $em->getRepository(StatsEvents::class);
        $eventsRepository = $em->getRepository(Events::class);

        /**
         * Busco un agente por su ID guardada en la sesión
         */
        $agente = $agentRepository->find($_SESSION["IdAgent"]); //$agente tiene una NUEVA INSTANCIA "virtual" de la entidad AGENT, por lo que tengo acceso a sus PROPIEDADES y METODOS

        /**
         * Devuelvo todos los datos formateados
         */
        $datos = $agentRepository->formatDataAgent($_POST);
        if ($datos == null) {

            return $this->render("fail_insert_stats.html", []);
        }
        $span = $spanRepository->findOneBy(array("timeSpan" => $datos[1][0]));

        /**
         * Bloque para controlar la subida de estadísticas a la tabla
         * Stats o StatsEvents, dependiendo de si $upload->getIdEvent() devuelve 0 o 1 
         * respectivamente
         */
        $idEvent = ($_POST["eventSelected"] !== "Ningun evento") ? 1 : 0;

        if ($idEvent == 0) {
            $upload = $uploadRepository->insertUpload($agente, $span, $datos, $idEvent);
            $stats = $statsRepository->insertStats($upload, $agente, $datos);
        } else {
            $events = $eventsRepository->findOneBy(["nameEvent" => $_POST["eventSelected"]]);
            $upload = $uploadRepository->insertUpload($agente, $span, $datos, $events);
            $statsEvents = $statsEventsRepository->insertStats($upload, $agente, $datos, $events);
            
        }
        $showActualStats = $statsRepository->findBy(
                ["idAgent" => $agente->getIdAgent()],
                ["idStats" => "DESC"]
            );
        
        return $this->render("profile.html", [
            "result" => $showActualStats,
            "name" => $_SESSION["agentName"]
        ]);
    }
}