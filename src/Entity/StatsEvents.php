<?php
/**
 * Clase que modela la tabla StatsEvents de la BBDD con Doctrine
 */
namespace App\Entity;

use App\Repository\StatsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=App\Repository\StatsEventsRepository::class)
 * @ORM\Table(name="stats_events") 
 */

class StatsEvents
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length="11", name="id_stats")
     * @ORM\GeneratedValue
     */
    private $idStatsEvents;

    /** @ORM\Column(type="integer", length="11", name="lifetime_ap") */
    private $lifetimeAp;

    /** @ORM\Column(type="integer", length="11", name="unique_portals_visited", nullable=true) */
    private $uniquePortalsVisited;

    /** @ORM\Column(type="integer", length="11", name="resonators_deployed", nullable=true) */
    private $resonatorsDeployed;

    /** @ORM\Column(type="integer", length="11", name="links_created", nullable=true) */
    private $linksCreated;

    /** @ORM\Column(type="integer", length="11", name="control_fields_created", nullable=true) */
    private $controlFieldsCreated;

    /** @ORM\Column(type="integer", length="11", name="xm_recharged", nullable=true) */
    private $xmRecharged;

    /** @ORM\Column(type="integer", length="11", name="portals_captured", nullable=true) */
    private $portalsCaptured;

    /** @ORM\Column(type="integer", length="11", name="hacks", nullable=true) */
    private $hacks;

    /** @ORM\Column(type="integer", length="11", name="resonators_destroyed", nullable=true) */
    private $resonatorsDestroyed;

    /**
     * Many stats have one agent. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Events", inversedBy="statsEvents")
     * @ORM\JoinColumn(name="id_event", referencedColumnName="id_event")
     */
    private $idEvents;

    /**
     * Many statsEvents have one upload. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Uploads", inversedBy="statsEvents")
     * @ORM\JoinColumn(name="id_upload", referencedColumnName="id_upload")
     */
    private $idUploads;

    /**
     * Many stats have one agent. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Agent", inversedBy="statsEvents")
     * @ORM\JoinColumn(name="id_agent", referencedColumnName="id_agent")
     */
    private $idAgent;

    /**
     * Get the value of idStatsEvents
     */ 
    public function getIdStatsEvents()
    {
        return $this->idStatsEvents;
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
     * Get the value of uniquePortalsVisited
     */ 
    public function getUniquePortalsVisited()
    {
        return $this->uniquePortalsVisited;
    }

    /**
     * Set the value of uniquePortalsVisited
     *
     * @return  self
     */ 
    public function setUniquePortalsVisited($uniquePortalsVisited)
    {
        $this->uniquePortalsVisited = $uniquePortalsVisited;

        return $this;
    }

    /**
     * Get the value of resonatorsDeployed
     */ 
    public function getResonatorsDeployed()
    {
        return $this->resonatorsDeployed;
    }

    /**
     * Set the value of resonatorsDeployed
     *
     * @return  self
     */ 
    public function setResonatorsDeployed($resonatorsDeployed)
    {
        $this->resonatorsDeployed = $resonatorsDeployed;

        return $this;
    }

    /**
     * Get the value of linksCreated
     */ 
    public function getLinksCreated()
    {
        return $this->linksCreated;
    }

    /**
     * Set the value of linksCreated
     *
     * @return  self
     */ 
    public function setLinksCreated($linksCreated)
    {
        $this->linksCreated = $linksCreated;

        return $this;
    }

    /**
     * Get the value of controlFieldsCreated
     */ 
    public function getControlFieldsCreated()
    {
        return $this->controlFieldsCreated;
    }

    /**
     * Set the value of controlFieldsCreated
     *
     * @return  self
     */ 
    public function setControlFieldsCreated($controlFieldsCreated)
    {
        $this->controlFieldsCreated = $controlFieldsCreated;

        return $this;
    }

    /**
     * Get the value of xmRecharged
     */ 
    public function getXmRecharged()
    {
        return $this->xmRecharged;
    }

    /**
     * Set the value of xmRecharged
     *
     * @return  self
     */ 
    public function setXmRecharged($xmRecharged)
    {
        $this->xmRecharged = $xmRecharged;

        return $this;
    }

    /**
     * Get the value of portalsCaptured
     */ 
    public function getPortalsCaptured()
    {
        return $this->portalsCaptured;
    }

    /**
     * Set the value of portalsCaptured
     *
     * @return  self
     */ 
    public function setPortalsCaptured($portalsCaptured)
    {
        $this->portalsCaptured = $portalsCaptured;

        return $this;
    }

    /**
     * Get the value of hacks
     */ 
    public function getHacks()
    {
        return $this->hacks;
    }

    /**
     * Set the value of hacks
     *
     * @return  self
     */ 
    public function setHacks($hacks)
    {
        $this->hacks = $hacks;

        return $this;
    }

    /**
     * Get the value of resonatorsDestroyed
     */ 
    public function getResonatorsDestroyed()
    {
        return $this->resonatorsDestroyed;
    }

    /**
     * Set the value of resonatorsDestroyed
     *
     * @return  self
     */ 
    public function setResonatorsDestroyed($resonatorsDestroyed)
    {
        $this->resonatorsDestroyed = $resonatorsDestroyed;

        return $this;
    }

    /**
     * Get many stats have one agent. This is the owning side.
     */ 
    public function getIdEvents()
    {
        return $this->idEvents;
    }

    /**
     * Set many stats have one agent. This is the owning side.
     *
     * @return  self
     */ 
    public function setIdEvents($idEvents)
    {
        $this->idEvents = $idEvents;

        return $this;
    }

    /**
     * Get many statsEvents have one upload. This is the owning side.
     */ 
    public function getIdUploads()
    {
        return $this->idUploads;
    }

    /**
     * Set many statsEvents have one upload. This is the owning side.
     *
     * @return  self
     */ 
    public function setIdUploads($idUploads)
    {
        $this->idUploads = $idUploads;

        return $this;
    }

    /**
     * Get many stats have one agent. This is the owning side.
     */ 
    public function getIdAgent()
    {
        return $this->idAgent;
    }

    /**
     * Set many stats have one agent. This is the owning side.
     *
     * @return  self
     */ 
    public function setIdAgent($idAgent)
    {
        $this->idAgent = $idAgent;

        return $this;
    }
}