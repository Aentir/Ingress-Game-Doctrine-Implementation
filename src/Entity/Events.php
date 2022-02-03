<?php
/**
 * Clase que modela la tabla Events de la BBDD con Doctrine
 */
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\EventsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 *  @ORM\Entity(repositoryClass=App\Repository\EventsRepository::class)
 *  @ORM\Table(name="events")
 */

class Events
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length="11", name="id_event")
     * @ORM\GeneratedValue
     */
    private $idEvent;

    /** @ORM\Column(type="string", length="100", name="name_event") */
    private $nameEvent;

    /** @ORM\Column(type="string", length="100", name="alias_event") */
    private $aliasEvent;

    /** @ORM\Column(type="string", length="250", name="descrip_event") */
    private $descripEvent;

    /** @ORM\Column(type="date", name="date_event") */
    private $dateEvent;

    /** @ORM\Column(type="string", length="250", name="place_event") */
    private $placeEvent;

    /**
     * One event has many statsEvents. This is the inverse side.
     * @ORM\OneToMany(targetEntity="StatsEvents", mappedBy="idEvents")
     */
    private $statsEvents;


    /** Se inician las colecciones de las entidades relacionadas */
    public function __construct() {
        $this->statsEvents = new ArrayCollection();
    }

    /**
     * Get the value of idEvent
     */ 
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * Get the value of nameEvent
     */ 
    public function getNameEvent()
    {
        return $this->nameEvent;
    }

    /**
     * Set the value of nameEvent
     *
     * @return  self
     */ 
    public function setNameEvent($nameEvent)
    {
        $this->nameEvent = $nameEvent;

        return $this;
    }

    /**
     * Get the value of aliasEvent
     */ 
    public function getAliasEvent()
    {
        return $this->aliasEvent;
    }

    /**
     * Set the value of aliasEvent
     *
     * @return  self
     */ 
    public function setAliasEvent($aliasEvent)
    {
        $this->aliasEvent = $aliasEvent;

        return $this;
    }

    /**
     * Get the value of descripEvent
     */ 
    public function getDescripEvent()
    {
        return $this->descripEvent;
    }

    /**
     * Set the value of descripEvent
     *
     * @return  self
     */ 
    public function setDescripEvent($descripEvent)
    {
        $this->descripEvent = $descripEvent;

        return $this;
    }

    /**
     * Get the value of dateEvent
     */ 
    public function getDateEvent()
    {
        return $this->dateEvent;
    }

    /**
     * Set the value of dateEvent
     *
     * @return  self
     */ 
    public function setDateEvent($dateEvent)
    {
        $this->dateEvent = $dateEvent;

        return $this;
    }

    /**
     * Get the value of placeEvent
     */ 
    public function getPlaceEvent()
    {
        return $this->placeEvent;
    }

    /**
     * Set the value of placeEvent
     *
     * @return  self
     */ 
    public function setPlaceEvent($placeEvent)
    {
        $this->placeEvent = $placeEvent;

        return $this;
    }

    /**
     * Get one event has many statsEvents. This is the inverse side.
     */ 
    public function getStatsEvents()
    {
        return $this->statsEvents;
    }

    /**
     * Set one event has many statsEvents. This is the inverse side.
     *
     * @return  self
     */ 
    public function setStatsEvents($statsEvents)
    {
        $this->statsEvents = $statsEvents;

        return $this;
    }
}