<?php

namespace App\Repository;

use App\Entity\Events;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\Common\Util\Debug;

class EventsRepository extends EntityRepository
{
    /**
     * Muestra todos los eventos
     */
    public function showEvents()
    {
        $events = $this->findAll();
        return $events;
    }
    
    /**
     * Muestra información detallada de un evento
     * Filtrado por el nombre del evento
     */
    public function detailEvent($nameEvent)
    {
        $detailEvent = $this->findOneBy(["nameEvent" => $nameEvent]);
        return $detailEvent;
    }
}