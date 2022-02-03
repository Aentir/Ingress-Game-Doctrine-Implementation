<?php
/**
 * Clase que modela la tabla Stats de la BBDD con Doctrine
 */
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\StatsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=App\Repository\StatsRepository::class)
 * @ORM\Table(name="stats") 
 */
class Stats
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length="11", name="id_stats")
     * @ORM\GeneratedValue
     */
    private $idStats;

    /** @ORM\Column(type="integer", length="11", name="level") */
    private $level;

    /** @ORM\Column(type="integer", length="11", name="lifetime_ap") */
    private $lifetimeAp;

    /** @ORM\Column(type="integer", length="11", name="current_ap") */
    private $currentAp;

    /** @ORM\Column(type="integer", length="11", name="`mission_day(s)_attended`") */
    private $missionDaysAttended;

    /** @ORM\Column(type="integer", length="11", name="`nl-1331_meetup(s)_attended`") */
    private $nl1331meetupsAttended;

    /**
     * Many stats have one agent. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Agent", inversedBy="stats")
     * @ORM\JoinColumn(name="id_agent", referencedColumnName="id_agent")
     */
    private $idAgent;

    /**
     * Many stats have one upload. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Uploads", inversedBy="stats")
     * @ORM\JoinColumn(name="id_upload", referencedColumnName="id_upload")
     */
    private $idUploads;

    /**
     * Get the value of idStats
     */ 
    public function getIdStats()
    {
        return $this->idStats;
    }

    /**
     * Get the value of idUpload
     */ 
    public function getIdUpload()
    {
        return $this->idUpload;
    }

    /**
     * Set the value of idUpload
     *
     * @return  self
     */ 
    public function setIdUpload($idUpload)
    {
        $this->idUpload = $idUpload;

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
     * Get the value of level
     */ 
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set the value of level
     *
     * @return  self
     */ 
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get the value of lifetimeAp
     */ 
    public function getLifetimeAp()
    {
        return $this->lifetimeAp;
    }

    /**
     * Set the value of lifetimeAp
     *
     * @return  self
     */ 
    public function setLifetimeAp($lifetimeAp)
    {
        $this->lifetimeAp = $lifetimeAp;

        return $this;
    }

    /**
     * Get the value of currentAp
     */ 
    public function getCurrentAp()
    {
        return $this->currentAp;
    }

    /**
     * Set the value of currentAp
     *
     * @return  self
     */ 
    public function setCurrentAp($currentAp)
    {
        $this->currentAp = $currentAp;

        return $this;
    }

    /**
     * Get the value of missionDaysAttended
     */ 
    public function getMissionDaysAttended()
    {
        return $this->missionDaysAttended;
    }

    /**
     * Set the value of missionDaysAttended
     *
     * @return  self
     */ 
    public function setMissionDaysAttended($missionDaysAttended)
    {
        $this->missionDaysAttended = $missionDaysAttended;

        return $this;
    }

    /**
     * Get the value of nl1331meetupsAttended
     */ 
    public function getNl1331meetupsAttended()
    {
        return $this->nl1331meetupsAttended;
    }

    /**
     * Set the value of nl1331meetupsAttended
     *
     * @return  self
     */ 
    public function setNl1331meetupsAttended($nl1331meetupsAttended)
    {
        $this->nl1331meetupsAttended = $nl1331meetupsAttended;

        return $this;
    }

    /**
     * Get many stats have one agent. This is the owning side.
     */ 
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set many stats have one agent. This is the owning side.
     *
     * @return  self
     */ 
    public function setAgent($agent)
    {
        $this->agent = $agent;

        return $this;
    }


    /**
     * Get many stats have one upload. This is the owning side.
     */ 
    public function getIdUploads()
    {
        return $this->idUploads;
    }

    /**
     * Set many stats have one upload. This is the owning side.
     *
     * @return  self
     */ 
    public function setIdUploads($idUploads)
    {
        $this->idUploads = $idUploads;

        return $this;
    }
}