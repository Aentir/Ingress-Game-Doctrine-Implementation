<?php
/**
 * Clase que modela la tabla Uploads de la BBDD con Doctrine
 */
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\UploadsRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 *  @ORM\Entity(repositoryClass=UploadsRepository::class)
 *  @ORM\Table(name="uploads")
 */
class Uploads
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length="11", name="id_upload")
     * @ORM\GeneratedValue
     */
    private $idUpload;

    /** @ORM\Column(type="date", name="date") */
    private $date;

    /** @ORM\Column(type="time", name="time") */
    private $time;

    /** @ORM\Column(type="boolean", length="1", name="id_event") */
    private $idEvent;

    /**
     * Many uploads have one agent. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Agent", inversedBy="uploads")
     * @ORM\JoinColumn(name="id_agent", referencedColumnName="id_agent")
     */
    private $idAgent;

    /**
     * Many uploads have one span. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Span", inversedBy="uploads")
     * @ORM\JoinColumn(name="time_span", referencedColumnName="id_span")
     */
    private $timeSpan;

    /**
     * One upload has many stats. This is the inverse side.
     * @ORM\OneToOne(targetEntity="Stats", mappedBy="uploads")
     */
    private $stats;

    /**
     * One upload has many statsEvents. This is the inverse side.
     * @ORM\OneToOne(targetEntity="StatsEvents", mappedBy="idUploads")
     */
    private $statsEvents;


    /**
     * Get the value of idUpload
     */ 
    public function getIdUpload()
    {
        return $this->idUpload;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of time
     */ 
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set the value of time
     *
     * @return  self
     */ 
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get the value of idAgent
     */ 
    public function getIdAgent()
    {
        return $this->idAgent;
    }

    /**
     * Set the value of idAgent
     *
     * @return  self
     */ 
    public function setIdAgent($idAgent)
    {
        $this->idAgent = $idAgent;

        return $this;
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
     * Get the value of idEvent
     */ 
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * Set the value of idEvent
     *
     * @return  self
     */ 
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;

        return $this;
    }

    /**
     * Get one upload has many statsEvents. This is the inverse side.
     */ 
    public function getStatsEvents()
    {
        return $this->statsEvents;
    }

    /**
     * Set one upload has many statsEvents. This is the inverse side.
     *
     * @return  self
     */ 
    public function setStatsEvents($statsEvents)
    {
        $this->statsEvents = $statsEvents;

        return $this;
    }

    /**
     * Get many uploads have one agent. This is the owning side.
     */ 
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set many uploads have one agent. This is the owning side.
     *
     * @return  self
     */ 
    public function setAgent($agent)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get many uploads have one span. This is the owning side.
     */ 
    public function getSpan()
    {
        return $this->span;
    }

    /**
     * Set many uploads have one span. This is the owning side.
     *
     * @return  self
     */ 
    public function setSpan($span)
    {
        $this->span = $span;

        return $this;
    }

    /**
     * Get one upload has many stats. This is the inverse side.
     */ 
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * Set one upload has many stats. This is the inverse side.
     *
     * @return  self
     */ 
    public function setStats($stats)
    {
        $this->stats = $stats;

        return $this;
    }
}