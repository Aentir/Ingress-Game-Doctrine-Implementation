<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Agent;
use App\Core\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\Common\Util\Debug;

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
