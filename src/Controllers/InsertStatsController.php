<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Stats;
use App\Entity\Agent;
use App\Entity\Uploads;
use App\Entity\Span;
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

        $agente = $agentRepository->find($_SESSION["IdAgent"]); //$agente tiene una NUEVA INSTANCIA "virtual" de la entidad AGENT, por lo que tengo acceso a sus PROPIEDADES y METODOS
        $datos = $agentRepository->formatDataAgent($_POST);
        /*echo "<pre>";
        Debug::dump($datos);
        die();*/

        if ($datos == null) {
            
            return $this->render("fail_insert_stats.html", []);
        }

        /*echo "<pre>";
        var_dump($datos);*/

        //Mando al repositorio de Span el timeSpan concreto necesario
        $span = $spanRepository->findOneBy(array("timeSpan" => $datos[1][0]));
        

        //$span = $spanRepository->find(1);
        /*echo "<pre>";
        Debug::dump($span);
        die();*/

        //Mando al repositorio de Upload los datos para el date,time, id de Agente y de Span
        $upload = $uploadRepository->insertUpload($datos, $agente, $span);
        
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