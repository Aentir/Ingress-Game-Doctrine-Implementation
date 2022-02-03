<?php

namespace App\Core;

//use App\Core\SessionManager;

abstract class AbstractController
{

    private $twig;
    //protected $sessionManager;
    public function __construct()
    {
        //$this->sessionManager = new SessionManager();

        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../../templates');
        $this->twig = new \Twig\Environment($loader);
        //$this->sessionManager->setTemplateEngineAvailable($this->twig);
    }

    public function render($template, $params)
    {
        $template = $this->twig->load($template);
        echo $template->render($params);
    }
}
