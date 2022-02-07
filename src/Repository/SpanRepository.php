<?php

namespace App\Repository;

use App\Entity\Span;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;

class SpanRepository extends EntityRepository
{
    /**
     * Devuelve un objeto span según el "time_span" pasado
     */
    public function span($datos)
    {
        return $this->findOneBy(["timeSpan" => $datos[1][0]]);
    }
}