<?php

namespace App\Repository;

use App\Entity\Uploads;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;


class UploadsRepository extends EntityRepository
{
    public function insertUpload($datos, $agente, $span, $idEvent)
    {
        //var_dump($datos[1][3]);
        //var_dump($datos[1][4]);
        $upload = new Uploads();
        $upload->setDate(new \DateTime($datos[1][3]));
        $upload->setTime(new \DateTime($datos[1][4]));
        $upload->setIdAgent($agente);
        $upload->setTimeSpan($span);
        $upload->setIdEvent($idEvent);
        $this->getEntityManager()->persist($upload);
        $this->getEntityManager()->flush();

        return $upload;
    }
}