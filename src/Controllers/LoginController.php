<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Agent;
use App\Entity\Stats;
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
        $showActualStats = $statsRepository->findBy(
            ["idAgent" => $agente], ["idStats" => "DESC"]
        );


        /*echo "<pre>";
        Debug::dump($showActualStats);
        die();*/

        if($agente) {
            $_SESSION["IdAgent"] = $agente->getIdAgent();

            $this->render("profile.html", [
            "result" => $showActualStats[0]
        ]);
        } else {
            $this->render("register.html", []);
        }

    }

}