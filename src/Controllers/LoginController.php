<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Agent;
use App\Entity\Stats;
use App\Entity\StatsEvents;
use App\Core\EntityManager;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\Common\Util\Debug;

class LoginController extends AbstractController
{
    /*public function __construct()
    {
        session_start();
    }*/

    public function login()
    {
        //session_start();

        $username = $_POST["username"];
        $password = $_POST["password"];

        $em = (new EntityManager())->get();
        $agentRepository = $em->getRepository(Agent::class);
        $statsRepository = $em->getRepository(Stats::class);
        $agente = $agentRepository->findOneBy(array("agentName" => $username, "password" => $password));

        /*echo "<pre>";
            Debug::dump($agente->getStatsEvents());
            die();*/

        if ($agente) {
            $_SESSION["IdAgent"] = $agente->getIdAgent();
            $showActualStats = $statsRepository->findBy(
                ["idAgent" => $agente],
                ["idStats" => "DESC"]
            );

            /**
             * Muestro las estadísticas del evento de un agente
             */


            /*$idEvent = "";

            var_dump($_POST["eventCompared"]);
            switch ($_POST["eventCompared"]) {
                case "Recursion Prime Palma de Mallorca":
                    $idEvent = 1;
                    break;
                case "Recursion Prime Barcelona":
                    $idEvent = 2;
                    break;
                case "Ingress First Saturday Valencia 11-2019":
                    $idEvent = 3;
                    break;
                case "Ingress First Saturday Valencia 12-2019":
                    $idEvent = 4;
                    break;
            }*/
            $statsEventsRepository = $em->getRepository(StatsEvents::class);

            //Muestro stats último evento
            $lastStatsEvent = $statsEventsRepository->findBy(["idEvents" => 2], ["idStatsEvents" => "DESC"]);
            //Muestro stats primer evento
            $statsEvents = $statsEventsRepository->findBy(["idEvents" => 2], ["idStatsEvents" => "ASC"]);

            /*echo "<pre>";
            Debug::dump($lastStatsEvent[0]->getIdEvents()->getNameEvent());
            Debug::dump($statsEvents[0]->getIdEvents()->getNameEvent());
            die();*/


            $this->render("profile.html", [
                "result" => $showActualStats[0],
                "firstStatsEvents" => $statsEvents[0],
                "lastStatsEvents" => $lastStatsEvent[0]
            ]);
        } else {
            $this->render("register.html", []);
        }
    }
}
