<?php

namespace App\Controllers;

use App\Core\{AbstractController, EntityManager};
use App\Entity\{Agent, Stats};
use Doctrine\Common\Util\Debug;

/**
 * Controller encargado de acceder al perfil de un usuario
 * controlando su sesión y la info recibida por POST
 */
class LoginController extends AbstractController
{
    public function login()
    {
        if (isset($_POST["username"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
        } else {
            $username = $_SESSION["agentName"];
            $password = $_SESSION["agentPassword"];
        }

        $em = (new EntityManager())->get();
        $agentRepository = $em->getRepository(Agent::class);
        $statsRepository = $em->getRepository(Stats::class);
        $agente = $agentRepository->findOneBy(["agentName" => $username, "password" => $password]);

        if ($agente) {
            $_SESSION["IdAgent"] = $agente->getIdAgent();
            $_SESSION["agentName"] = $username;
            $_SESSION["agentPassword"] = $password;
            $showActualStats = $statsRepository->findBy(
                ["idAgent" => $agente],
                ["idStats" => "DESC"]
            );

            $this->render("profile.html", [
                "result" => $showActualStats,
                "name" => $_SESSION["agentName"]
            ]);
        } else {
            $this->render("register.html", []);
        }
    }
}