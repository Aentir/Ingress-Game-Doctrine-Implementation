<?php

namespace App\Controllers;

use App\Core\AbstractController;
//Controller encargado de destruir la sesión de un usuario
class LogOutController extends AbstractController
{
    public function logout()
    {
        //El botón de cerrar sesión lleva a este controlador, el cual elimina la sesión
        unset($_SESSION["IdAgent"]); 
        unset($_SESSION["agentName"]); 
        unset($_SESSION["agentPassword"]); 
        session_destroy();
        header("location:/");
    }
}