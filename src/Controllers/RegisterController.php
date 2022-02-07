<?php

namespace App\Controllers;

use App\Core\AbstractController;
use Doctrine\Common\Util\Debug;

/**
 * Controller encargado de renderizar el template para registrar un nuevo usuario
 */
class RegisterController extends AbstractController
{
   public function register()
   {
      return $this->render("register.html", []);
   }
}