<?php
/**
 * Clase que modela la tabla Span de la BBDD con Doctrine
 */
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\SpanRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=App\Repository\SpanRepository::class)
 * @ORM\Table(name="span") 
 */

 class Span
 {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length="11", name="id_span")
     * @ORM\GeneratedValue
     */
    private $idSpan;

    /** @ORM\Column(type="string", length="100", name="time_span") */
    private $timeSpan;

    /**
     * One upload has many stats. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Uploads", mappedBy="timeSpan")
     */
    private $uploads;


    /** Se inician las colecciones de las entidades relacionadas */
    public function __construct() {
        $this->uploads = new ArrayCollection();   
    }

    /**
     * Get the value of idSpan
     */ 
    public function getIdSpan()
    {
        return $this->idSpan;
    }

    /**
     * Get the value of timeSpan
     */ 
    public function getTimeSpan()
    {
        return $this->timeSpan;
    }

    /**
     * Set the value of timeSpan
     *
     * @return  self
     */ 
    public function setTimeSpan($timeSpan)
    {
        $this->timeSpan = $timeSpan;

        return $this;
    }

    /**
     * Get one upload has many stats. This is the inverse side.
     */ 
    public function getUploads()
    {
        return $this->uploads;
    }

    /**
     * Set one upload has many stats. This is the inverse side.
     *
     * @return  self
     */ 
    public function setUploads($uploads)
    {
        $this->uploads = $uploads;

        return $this;
    }
 }