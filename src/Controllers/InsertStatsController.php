<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Stats;
use App\Entity\Agent;
use App\Entity\Uploads;
use App\Entity\Span;
use App\Entity\StatsEvents;
use App\Core\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\Common\Util\Debug;

class InsertStatsController extends AbstractController
{

    public function insertStats()
    {
        //session_start();
        $em = (new EntityManager())->get();

        $uploadRepository = $em->getRepository(Uploads::class);
        $spanRepository = $em->getRepository(Span::class);  
        $statsRepository = $em->getRepository(Stats::class);
        $agentRepository = $em->getRepository(Agent::class);  
        $statsEventsRepository = $em->getRepository(StatsEvents::class);
        $agente = $agentRepository->find($_SESSION["IdAgent"]); //$agente tiene una NUEVA INSTANCIA "virtual" de la entidad AGENT, por lo que tengo acceso a sus PROPIEDADES y METODOS
        $datos = $agentRepository->formatDataAgent($_POST);
        /*echo "<pre>";
        Debug::dump($datos);
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

        $idEvent = ($_POST["eventSelected"] !== "Ningun evento") ? 1 : 0 ;


        //Mando al repositorio de Upload los datos para el date,time, id de Agente y de Span
        $upload = $uploadRepository->insertUpload($datos, $agente, $span, $idEvent);

        echo "<pre>";
        Debug::dump($upload->getIdEvent());
        die();

        //Mando al repositorio de Stats la id de Upload, de Agente y las estadísticas
        $stats = $statsRepository->insertStats($upload, $agente, $datos);
        $showActualStats = $statsRepository->findBy(
            ["idAgent" => $agente], ["idStats" => "DESC"]
        );
        if($upload) {
            $stats;
            return $this->render("profile.html", [
                "result" => $showActualStats[0]
            ]);
        }
    }

}