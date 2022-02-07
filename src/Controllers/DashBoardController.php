<?php

namespace App\Controllers;

use App\Core\AbstractController;

//Controller encargado de mostrar el form para logear
class DashBoardController extends AbstractController
{
   public function dashBoard()
   {
      if(isset($_SESSION["username"])){   //Si la variable de sesión está establecida, redirijo al perfil de ESE agente
         header("location:/login");
      }
      $this->render("login.html", []);    //Si no está definida, cargo el form de login
   }
}