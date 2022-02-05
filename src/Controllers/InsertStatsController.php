<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Stats;
use App\Entity\Agent;
use App\Entity\Uploads;
use App\Entity\Span;
use App\Entity\StatsEvents;
use App\Entity\Events;
use App\Core\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\Common\Util\Debug;

class InsertStatsController extends AbstractController
{

    public function insertStats()
    {
        //session_start();
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

        /*echo "<pre>";
        Debug::dump($events->getIdEvent());
        die();*/

        /*if ($_POST["estadisticas"] == null){
            echo "ok";
        }
        
        die();*/

        if ($datos == null) {

            return $this->render("fail_insert_stats.html", []);
        }

        //Mando al repositorio de Span el timeSpan concreto necesario
        $span = $spanRepository->findOneBy(array("timeSpan" => $datos[1][0]));

        /*echo "<pre>";
        Debug::dump($upload->getIdEvent());
        die();*/

        /**
         * Bloque para controlar la subida de estadísticas a la tabla
         * Stats o StatsEvents, dependiendo de si $upload->getIdEvent() devuelve 0 o 1 
         * respectivamente
         */

        $idEvent = ($_POST["eventSelected"] !== "Ningun evento") ? 1 : 0;

        

        
        //Muestro stats último evento
        $lastStatsEvent = $statsEventsRepository->findBy(["idEvents" => 2], ["idStatsEvents" => "DESC"]);
        //Muestro stats primer evento
        $statsEvents = $statsEventsRepository->findBy(["idEvents" => 2], ["idStatsEvents" => "ASC"]);
        $showActualStats = $statsRepository->findBy(
            ["idAgent" => $agente],
            ["idStats" => "DESC"]
        );
        return $this->render("profile.html", [
            "result" => $showActualStats[0],
            "firstStatsEvents" => $statsEvents[0],
            "lastStatsEvents" => $lastStatsEvent[0]
        ]);
    }
}
