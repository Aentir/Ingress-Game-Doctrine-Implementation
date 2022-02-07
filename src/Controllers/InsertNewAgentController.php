<?php

namespace App\Controllers;

use App\Core\{AbstractController, EntityManager};
use App\Entity\Agent;
use Doctrine\Common\Util\Debug;
//Controller encargado de registrar un nuevo usuario
class InsertNewAgentController extends AbstractController
{
    public function insert()
    {
        $em = (new EntityManager())->get();
        $agentRepository = $em->getRepository(Agent::class);
        
        //Si register() devuelve TRUE -> usuario ya existe
        if($agentRepository->register()) {
            return $this->render("fail_register.html", []);
        } else {
            return $this->render("login.html", []);
        }
    }
}
