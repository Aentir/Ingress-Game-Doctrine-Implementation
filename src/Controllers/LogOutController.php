<?php

namespace App\Controllers;

use App\Core\AbstractController;

class LogOutController extends AbstractController
{
    public function logout()
    {
        //El botón de cerrar sesión lleva a este controlador, el cual elimina la sesión
        unset($_SESSION["IdAgent"]); 
        session_destroy();

        header("location:/");
    }
}