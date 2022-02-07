<?php

namespace App\Controllers;

use App\Core\{AbstractController, EntityManager};
use App\Entity\Events;
use Doctrine\Common\Util\Debug;
//Controller encargado de mostrar todos los eventos
class ListEvents extends AbstractController
{
    public function showEvents()
    {
        $em = (new EntityManager())->get();
        $eventsRepository = $em->getRepository(Events::class);
        $events = $eventsRepository->showEvents();
        return $this->render("show_Events.html", [
            "result" => $events
        ]);
    }
}