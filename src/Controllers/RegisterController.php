<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Agent;
use App\Core\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\Common\Util\Debug;

class RegisterController extends AbstractController
{
    public function register()
   {  //Renderizo el template para registrar un nuevo usuario
      $this->render("register.html", []);

   }
}