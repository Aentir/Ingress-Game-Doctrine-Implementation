<?php
/**
 * Clase que modela la tabla Stats de la BBDD con Doctrine
 */
namespace App\Entity;

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
     * @ORM\Column(type="integer", name="id_stats")
     * @ORM\GeneratedValue
     */
    private $idStats;

    /** @ORM\Column(type="integer", name="level") */
    private $level;

    /** @ORM\Column(type="integer", name="lifetime_ap") */
    private $lifetimeAp;

    /** @ORM\Column(type="integer", name="current_ap") */
    private $currentAp;
    
    /** @ORM\Column(type="integer", name="unique_portals_visited", nullable=true) */
    private $uniquePortalsVisited;
    
    /** @ORM\Column(type="integer", name="unique_portals_drone_visited", nullable=true) */
    private $uniquePortalsDroneVisited;
    
    /** @ORM\Column(type="integer", name="furthest_drone_distance", nullable=true) */
    private $furthestDroneDistance;
    
    /** @ORM\Column(type="integer", name="seer", nullable=true) */
    private $seer;
    
    /** @ORM\Column(type="integer", name="portals_discovered", nullable=true) */
    private $portalsDiscovered;
    
    /** @ORM\Column(type="integer", name="xm_collected", nullable=true) */
    private $xmCollected;
    
    /** @ORM\Column(type="integer", name="opr_agreements", nullable=true) */
    private $oprAgreements;
    
    /** @ORM\Column(type="integer", name="portal_scans_uploaded", nullable=true) */
    private $portalScansUploaded;
    
    /** @ORM\Column(type="integer", name="uniques_scout_controlled", nullable=true) */
    private $uniquesScoutControlled;
    
    /** @ORM\Column(type="integer", name="resonators_deployed", nullable=true) */
    private $resonatorsDeployed;
    
    /** @ORM\Column(type="integer", name="links_created", nullable=true) */
    private $linksCreated;
    
    /** @ORM\Column(type="integer", name="control_fields_created", nullable=true) */
    private $controlFieldsCreated;
    
    /** @ORM\Column(type="integer", name="mind_units_captured", nullable=true) */
    private $mindUnitsCaptured;
    
    /** @ORM\Column(type="integer", name="longest_link_ever_created", nullable=true) */
    private $longestLinkEverCreated;
    
    /** @ORM\Column(type="integer", name="largest_control_field", nullable=true) */
    private $largestControlField;
    
    /** @ORM\Column(type="integer", name="xm_recharged", nullable=true) */
    private $xmRecharged;
    
    /** @ORM\Column(type="integer", name="portals_captured", nullable=true) */
    private $portalsCaptured;
    
    /** @ORM\Column(type="integer", name="unique_portals_captured", nullable=true) */
    private $uniquePortalsCaptured;
    
    /** @ORM\Column(type="integer", name="mods_deployed", nullable=true) */
    private $modsDeployed;
    
    /** @ORM\Column(type="integer", name="hacks", nullable=true) */
    private $hacks;
    
    /** @ORM\Column(type="integer", name="drone_hacks", nullable=true) */
    private $droneHacks;
    
    /** @ORM\Column(type="integer", name="glyph_hack_points", nullable=true) */
    private $glyphHackPoints;
    
    /** @ORM\Column(type="integer", name="completed_hackstreaks", nullable=true) */
    private $completedHackstreaks;
    
    /** @ORM\Column(type="integer", name="longest_sojourner_streak", nullable=true) */
    private $longestSojournerStreak;
    
    /** @ORM\Column(type="integer", name="resonators_destroyed", nullable=true) */
    private $resonatorsDestroyed;
    
    /** @ORM\Column(type="integer", name="enemy_links_destroyed", nullable=true) */
    private $enemyLinksDestroyed;
    
    /** @ORM\Column(type="integer", name="enemy_fields_destroyed", nullable=true) */
    private $enemyFieldsDestroyed;
    
    /** @ORM\Column(type="integer", name="battle_beacon_combatant", nullable=true) */
    private $battleBeaconCombatant;
    
    /** @ORM\Column(type="integer", name="drones_returned", nullable=true) */
    private $dronesReturned;
    
    /** @ORM\Column(type="integer", name="max_time_portal_held", nullable=true) */
    private $maxTimePortalHeld;
    
    /** @ORM\Column(type="integer", name="max_time_link_maintained", nullable=true) */
    private $maxTimeLinkMaintained;
    
    /** @ORM\Column(type="integer", name="max_link_length_x_days", nullable=true) */
    private $maxLinkLengthXDays;
    
    /** @ORM\Column(type="integer", name="max_time_field_held", nullable=true) */
    private $maxTimeFieldHeld;
    
    /** @ORM\Column(type="integer", name="largest_field_mus_x_days", nullable=true) */
    private $largestFieldMusXDays;
    
    /** @ORM\Column(type="integer", name="forced_drone_recalls", nullable=true) */
    private $forcedDroneRecalls;
    
    /** @ORM\Column(type="integer", name="distance_walked", nullable=true) */
    private $distanceWalked;
    
    /** @ORM\Column(type="integer", name="kinetic_capsules_completed", nullable=true) */
    private $KineticCapsulesCompleted;
    
    /** @ORM\Column(type="integer", name="unique_missions_completed", nullable=true) */
    private $uniqueMissionsCompleted;

    /** @ORM\Column(type="integer", name="`mission_day(s)_attended`", nullable=true) */
    private $missionDaysAttended;

    /** @ORM\Column(type="integer", name="`nl-1331_meetup(s)_attended`", nullable=true) */
    private $nl1331meetupsAttended;
    
    /** @ORM\Column(type="integer", name="first_saturday_events", nullable=true) */
    private $firstSaturdayEvents;
    
    /** @ORM\Column(type="integer", name="agents_recruited", nullable=true) */
    private $agentsRecruited;
    
    /** @ORM\Column(type="integer", name="recursions", nullable=true) */
    private $recursions;
    
    /** @ORM\Column(type="integer", name="months_subscribed", nullable=true) */
    private $monthsSubscribed;
    
    /** @ORM\Column(type="integer", name="links_active", nullable=true) */
    private $linksActive;
    
    /** @ORM\Column(type="integer", name="portals_owned", nullable=true) */
    private $portalsOwned;
    
    /** @ORM\Column(type="integer", name="control_fields_active", nullable=true) */
    private $controlFieldsActive;
    
    /** @ORM\Column(type="integer", name="mind_unit_control", nullable=true) */
    private $mindUnitControl;
    
    /** @ORM\Column(type="integer", name="current_hackstreak", nullable=true) */
    private $currentHackstreak;
    
    /** @ORM\Column(type="integer", name="current_sojourner_streak", nullable=true) */
    private $currentSojournerStreak;

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
     * Get the value of uniquePortalsDroneVisited
     */ 
    public function getUniquePortalsDroneVisited()
    {
        return $this->uniquePortalsDroneVisited;
    }

    /**
     * Set the value of uniquePortalsDroneVisited
     *
     * @return  self
     */ 
    public function setUniquePortalsDroneVisited($uniquePortalsDroneVisited)
    {
        $this->uniquePortalsDroneVisited = $uniquePortalsDroneVisited;

        return $this;
    }

    /**
     * Get the value of furthestDroneDistance
     */ 
    public function getFurthestDroneDistance()
    {
        return $this->furthestDroneDistance;
    }

    /**
     * Set the value of furthestDroneDistance
     *
     * @return  self
     */ 
    public function setFurthestDroneDistance($furthestDroneDistance)
    {
        $this->furthestDroneDistance = $furthestDroneDistance;

        return $this;
    }

    /**
     * Get the value of seer
     */ 
    public function getSeer()
    {
        return $this->seer;
    }

    /**
     * Set the value of seer
     *
     * @return  self
     */ 
    public function setSeer($seer)
    {
        $this->seer = $seer;

        return $this;
    }

    /**
     * Get the value of portalsDiscovered
     */ 
    public function getPortalsDiscovered()
    {
        return $this->portalsDiscovered;
    }

    /**
     * Set the value of portalsDiscovered
     *
     * @return  self
     */ 
    public function setPortalsDiscovered($portalsDiscovered)
    {
        $this->portalsDiscovered = $portalsDiscovered;

        return $this;
    }

    /**
     * Get the value of xmCollected
     */ 
    public function getXmCollected()
    {
        return $this->xmCollected;
    }

    /**
     * Set the value of xmCollected
     *
     * @return  self
     */ 
    public function setXmCollected($xmCollected)
    {
        $this->xmCollected = $xmCollected;

        return $this;
    }

    /**
     * Get the value of oprAgreements
     */ 
    public function getOprAgreements()
    {
        return $this->oprAgreements;
    }

    /**
     * Set the value of oprAgreements
     *
     * @return  self
     */ 
    public function setOprAgreements($oprAgreements)
    {
        $this->oprAgreements = $oprAgreements;

        return $this;
    }

    /**
     * Get the value of portalScansUploaded
     */ 
    public function getPortalScansUploaded()
    {
        return $this->portalScansUploaded;
    }

    /**
     * Set the value of portalScansUploaded
     *
     * @return  self
     */ 
    public function setPortalScansUploaded($portalScansUploaded)
    {
        $this->portalScansUploaded = $portalScansUploaded;

        return $this;
    }

    /**
     * Get the value of uniquesScoutControlled
     */ 
    public function getUniquesScoutControlled()
    {
        return $this->uniquesScoutControlled;
    }

    /**
     * Set the value of uniquesScoutControlled
     *
     * @return  self
     */ 
    public function setUniquesScoutControlled($uniquesScoutControlled)
    {
        $this->uniquesScoutControlled = $uniquesScoutControlled;

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
     * Get the value of mindUnitsCaptured
     */ 
    public function getMindUnitsCaptured()
    {
        return $this->mindUnitsCaptured;
    }

    /**
     * Set the value of mindUnitsCaptured
     *
     * @return  self
     */ 
    public function setMindUnitsCaptured($mindUnitsCaptured)
    {
        $this->mindUnitsCaptured = $mindUnitsCaptured;

        return $this;
    }

    /**
     * Get the value of longestLinkEverCreated
     */ 
    public function getLongestLinkEverCreated()
    {
        return $this->longestLinkEverCreated;
    }

    /**
     * Set the value of longestLinkEverCreated
     *
     * @return  self
     */ 
    public function setLongestLinkEverCreated($longestLinkEverCreated)
    {
        $this->longestLinkEverCreated = $longestLinkEverCreated;

        return $this;
    }

    /**
     * Get the value of largestControlField
     */ 
    public function getLargestControlField()
    {
        return $this->largestControlField;
    }

    /**
     * Set the value of largestControlField
     *
     * @return  self
     */ 
    public function setLargestControlField($largestControlField)
    {
        $this->largestControlField = $largestControlField;

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
     * Get the value of uniquePortalsCaptured
     */ 
    public function getUniquePortalsCaptured()
    {
        return $this->uniquePortalsCaptured;
    }

    /**
     * Set the value of uniquePortalsCaptured
     *
     * @return  self
     */ 
    public function setUniquePortalsCaptured($uniquePortalsCaptured)
    {
        $this->uniquePortalsCaptured = $uniquePortalsCaptured;

        return $this;
    }

    /**
     * Get the value of modsDeployed
     */ 
    public function getModsDeployed()
    {
        return $this->modsDeployed;
    }

    /**
     * Set the value of modsDeployed
     *
     * @return  self
     */ 
    public function setModsDeployed($modsDeployed)
    {
        $this->modsDeployed = $modsDeployed;

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
     * Get the value of droneHacks
     */ 
    public function getDroneHacks()
    {
        return $this->droneHacks;
    }

    /**
     * Set the value of droneHacks
     *
     * @return  self
     */ 
    public function setDroneHacks($droneHacks)
    {
        $this->droneHacks = $droneHacks;

        return $this;
    }

    /**
     * Get the value of glyphHackPoints
     */ 
    public function getGlyphHackPoints()
    {
        return $this->glyphHackPoints;
    }

    /**
     * Set the value of glyphHackPoints
     *
     * @return  self
     */ 
    public function setGlyphHackPoints($glyphHackPoints)
    {
        $this->glyphHackPoints = $glyphHackPoints;

        return $this;
    }

    /**
     * Get the value of completedHackstreaks
     */ 
    public function getCompletedHackstreaks()
    {
        return $this->completedHackstreaks;
    }

    /**
     * Set the value of completedHackstreaks
     *
     * @return  self
     */ 
    public function setCompletedHackstreaks($completedHackstreaks)
    {
        $this->completedHackstreaks = $completedHackstreaks;

        return $this;
    }

    /**
     * Get the value of longestSojournerStreak
     */ 
    public function getLongestSojournerStreak()
    {
        return $this->longestSojournerStreak;
    }

    /**
     * Set the value of longestSojournerStreak
     *
     * @return  self
     */ 
    public function setLongestSojournerStreak($longestSojournerStreak)
    {
        $this->longestSojournerStreak = $longestSojournerStreak;

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
     * Get the value of enemyLinksDestroyed
     */ 
    public function getEnemyLinksDestroyed()
    {
        return $this->enemyLinksDestroyed;
    }

    /**
     * Set the value of enemyLinksDestroyed
     *
     * @return  self
     */ 
    public function setEnemyLinksDestroyed($enemyLinksDestroyed)
    {
        $this->enemyLinksDestroyed = $enemyLinksDestroyed;

        return $this;
    }

    /**
     * Get the value of enemyFieldsDestroyed
     */ 
    public function getEnemyFieldsDestroyed()
    {
        return $this->enemyFieldsDestroyed;
    }

    /**
     * Set the value of enemyFieldsDestroyed
     *
     * @return  self
     */ 
    public function setEnemyFieldsDestroyed($enemyFieldsDestroyed)
    {
        $this->enemyFieldsDestroyed = $enemyFieldsDestroyed;

        return $this;
    }

    /**
     * Get the value of battleBeaconCombatant
     */ 
    public function getBattleBeaconCombatant()
    {
        return $this->battleBeaconCombatant;
    }

    /**
     * Set the value of battleBeaconCombatant
     *
     * @return  self
     */ 
    public function setBattleBeaconCombatant($battleBeaconCombatant)
    {
        $this->battleBeaconCombatant = $battleBeaconCombatant;

        return $this;
    }

    /**
     * Get the value of dronesReturned
     */ 
    public function getDronesReturned()
    {
        return $this->dronesReturned;
    }

    /**
     * Set the value of dronesReturned
     *
     * @return  self
     */ 
    public function setDronesReturned($dronesReturned)
    {
        $this->dronesReturned = $dronesReturned;

        return $this;
    }

    /**
     * Get the value of maxTimePortalHeld
     */ 
    public function getMaxTimePortalHeld()
    {
        return $this->maxTimePortalHeld;
    }

    /**
     * Set the value of maxTimePortalHeld
     *
     * @return  self
     */ 
    public function setMaxTimePortalHeld($maxTimePortalHeld)
    {
        $this->maxTimePortalHeld = $maxTimePortalHeld;

        return $this;
    }

    /**
     * Get the value of maxTimeLinkMaintained
     */ 
    public function getMaxTimeLinkMaintained()
    {
        return $this->maxTimeLinkMaintained;
    }

    /**
     * Set the value of maxTimeLinkMaintained
     *
     * @return  self
     */ 
    public function setMaxTimeLinkMaintained($maxTimeLinkMaintained)
    {
        $this->maxTimeLinkMaintained = $maxTimeLinkMaintained;

        return $this;
    }

    /**
     * Get the value of maxLinkLengthXDays
     */ 
    public function getMaxLinkLengthXDays()
    {
        return $this->maxLinkLengthXDays;
    }

    /**
     * Set the value of maxLinkLengthXDays
     *
     * @return  self
     */ 
    public function setMaxLinkLengthXDays($maxLinkLengthXDays)
    {
        $this->maxLinkLengthXDays = $maxLinkLengthXDays;

        return $this;
    }

    /**
     * Get the value of maxTimeFieldHeld
     */ 
    public function getMaxTimeFieldHeld()
    {
        return $this->maxTimeFieldHeld;
    }

    /**
     * Set the value of maxTimeFieldHeld
     *
     * @return  self
     */ 
    public function setMaxTimeFieldHeld($maxTimeFieldHeld)
    {
        $this->maxTimeFieldHeld = $maxTimeFieldHeld;

        return $this;
    }

    
    /**
     * Get the value of largestFieldMusXDays
     */ 
    public function getLargestFieldMusXDays()
    {
        return $this->largestFieldMusXDays;
    }

    /**
     * Set the value of largestFieldMusXDays
     *
     * @return  self
     */ 
    public function setLargestFieldMusXDays($largestFieldMusXDays)
    {
        $this->largestFieldMusXDays = $largestFieldMusXDays;

        return $this;
    }

    /**
     * Get the value of forcedDroneRecalls
     */ 
    public function getForcedDroneRecalls()
    {
        return $this->forcedDroneRecalls;
    }

    /**
     * Set the value of forcedDroneRecalls
     *
     * @return  self
     */ 
    public function setForcedDroneRecalls($forcedDroneRecalls)
    {
        $this->forcedDroneRecalls = $forcedDroneRecalls;

        return $this;
    }

    /**
     * Get the value of distanceWalked
     */ 
    public function getDistanceWalked()
    {
        return $this->distanceWalked;
    }

    /**
     * Set the value of distanceWalked
     *
     * @return  self
     */ 
    public function setDistanceWalked($distanceWalked)
    {
        $this->distanceWalked = $distanceWalked;

        return $this;
    }

    /**
     * Get the value of KineticCapsulesCompleted
     */ 
    public function getKineticCapsulesCompleted()
    {
        return $this->KineticCapsulesCompleted;
    }

    /**
     * Set the value of KineticCapsulesCompleted
     *
     * @return  self
     */ 
    public function setKineticCapsulesCompleted($KineticCapsulesCompleted)
    {
        $this->KineticCapsulesCompleted = $KineticCapsulesCompleted;

        return $this;
    }

    /**
     * Get the value of uniqueMissionsCompleted
     */ 
    public function getUniqueMissionsCompleted()
    {
        return $this->uniqueMissionsCompleted;
    }

    /**
     * Set the value of uniqueMissionsCompleted
     *
     * @return  self
     */ 
    public function setUniqueMissionsCompleted($uniqueMissionsCompleted)
    {
        $this->uniqueMissionsCompleted = $uniqueMissionsCompleted;

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
     * Get the value of firstSaturdayEvents
     */ 
    public function getFirstSaturdayEvents()
    {
        return $this->firstSaturdayEvents;
    }

    /**
     * Set the value of firstSaturdayEvents
     *
     * @return  self
     */ 
    public function setFirstSaturdayEvents($firstSaturdayEvents)
    {
        $this->firstSaturdayEvents = $firstSaturdayEvents;

        return $this;
    }

    /**
     * Get the value of agentsRecruited
     */ 
    public function getAgentsRecruited()
    {
        return $this->agentsRecruited;
    }

    /**
     * Set the value of agentsRecruited
     *
     * @return  self
     */ 
    public function setAgentsRecruited($agentsRecruited)
    {
        $this->agentsRecruited = $agentsRecruited;

        return $this;
    }

    /**
     * Get the value of recursions
     */ 
    public function getRecursions()
    {
        return $this->recursions;
    }

    /**
     * Set the value of recursions
     *
     * @return  self
     */ 
    public function setRecursions($recursions)
    {
        $this->recursions = $recursions;

        return $this;
    }

    /**
     * Get the value of monthsSubscribed
     */ 
    public function getMonthsSubscribed()
    {
        return $this->monthsSubscribed;
    }

    /**
     * Set the value of monthsSubscribed
     *
     * @return  self
     */ 
    public function setMonthsSubscribed($monthsSubscribed)
    {
        $this->monthsSubscribed = $monthsSubscribed;

        return $this;
    }

    /**
     * Get the value of linksActive
     */ 
    public function getLinksActive()
    {
        return $this->linksActive;
    }

    /**
     * Set the value of linksActive
     *
     * @return  self
     */ 
    public function setLinksActive($linksActive)
    {
        $this->linksActive = $linksActive;

        return $this;
    }

    /**
     * Get the value of portalsOwned
     */ 
    public function getPortalsOwned()
    {
        return $this->portalsOwned;
    }

    /**
     * Set the value of portalsOwned
     *
     * @return  self
     */ 
    public function setPortalsOwned($portalsOwned)
    {
        $this->portalsOwned = $portalsOwned;

        return $this;
    }

    /**
     * Get the value of controlFieldsActive
     */ 
    public function getControlFieldsActive()
    {
        return $this->controlFieldsActive;
    }

    /**
     * Set the value of controlFieldsActive
     *
     * @return  self
     */ 
    public function setControlFieldsActive($controlFieldsActive)
    {
        $this->controlFieldsActive = $controlFieldsActive;

        return $this;
    }

    /**
     * Get the value of mindUnitControl
     */ 
    public function getMindUnitControl()
    {
        return $this->mindUnitControl;
    }

    /**
     * Set the value of mindUnitControl
     *
     * @return  self
     */ 
    public function setMindUnitControl($mindUnitControl)
    {
        $this->mindUnitControl = $mindUnitControl;

        return $this;
    }

    /**
     * Get the value of currentHackstreak
     */ 
    public function getCurrentHackstreak()
    {
        return $this->currentHackstreak;
    }

    /**
     * Set the value of currentHackstreak
     *
     * @return  self
     */ 
    public function setCurrentHackstreak($currentHackstreak)
    {
        $this->currentHackstreak = $currentHackstreak;

        return $this;
    }

    /**
     * Get the value of currentSojournerStreak
     */ 
    public function getCurrentSojournerStreak()
    {
        return $this->currentSojournerStreak;
    }

    /**
     * Set the value of currentSojournerStreak
     *
     * @return  self
     */ 
    public function setCurrentSojournerStreak($currentSojournerStreak)
    {
        $this->currentSojournerStreak = $currentSojournerStreak;

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