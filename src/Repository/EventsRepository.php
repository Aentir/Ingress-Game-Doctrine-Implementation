<?php

namespace App\Repository;

use App\Entity\Events;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\Common\Util\Debug;

class EventsRepository extends EntityRepository
{
    public function showEvents()
    {
        $events = $this->findAll();
        return $events;
    }

    public function detailEvent($nameEvent)
    {
        $detailEvent = $this->findOneBy(["nameEvent" => $nameEvent]);
        return $detailEvent;
    }
}