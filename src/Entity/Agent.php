<?php
/**
 * Clase que modela la tabla Agent de la BBDD con Doctrine
 */
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\AgentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 *  @ORM\Entity(repositoryClass=App\Repository\AgentRepository::class)
 *  @ORM\Table(name="agent")
 */

class Agent
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length="11", name="id_agent")
     * @ORM\GeneratedValue
     */
    private $idAgent;

    /** @ORM\Column(type="string", length="100", name="agent_name") */
    private $agentName;

    /** @ORM\Column(type="string", length="64", name="`password`") */
    private $password;

    /** @ORM\Column(type="string", length="100", name="faction") */
    private $faction;

    /**
     * One agent has many stats. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Stats", mappedBy="idAgent")
     */
    private $stats;

    /**
     * One agent has many uploads. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Uploads", mappedBy="idAgent")
     */
    private $uploads;

    /**
     * One agent has many statsEvents. This is the inverse side.
     * @ORM\OneToMany(targetEntity="StatsEvents", mappedBy="idAgent")
     */
    private $statsEvents;


    /** Se inician las colecciones de las entidades relacionadas */
    public function __construct() {
        $this->stats = new ArrayCollection();
        $this->uploads = new ArrayCollection();
        $this->statsEvents = new ArrayCollection();
    }

    /**
     * Get the value of idAgent
     */ 
    public function getIdAgent()
    {
        return $this->idAgent;
    }

    /**
     * Get the value of agentName
     */ 
    public function getAgentName()
    {
        return $this->agentName;
    }

    /**
     * Set the value of agentName
     *
     * @return  self
     */ 
    public function setAgentName($agentName)
    {
        $this->agentName = $agentName;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of faction
     */ 
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * Set the value of faction
     *
     * @return  self
     */ 
    public function setFaction($faction)
    {
        $this->faction = $faction;

        return $this;
    }

    /**
     * Get one agent has many stats. This is the inverse side.
     */ 
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * Set one agent has many stats. This is the inverse side.
     *
     * @return  self
     */ 
    public function setStats($stats)
    {
        $this->stats = $stats;

        return $this;
    }

    /**
     * Get one agent has many uploads. This is the inverse side.
     */ 
    public function getUploads()
    {
        return $this->uploads;
    }

    /**
     * Set one agent has many uploads. This is the inverse side.
     *
     * @return  self
     */ 
    public function setUploads($uploads)
    {
        $this->uploads = $uploads;

        return $this;
    }

    /**
     * Get one agent has many statsEvents. This is the inverse side.
     */ 
    public function getStatsEvents()
    {
        return $this->statsEvents;
    }

    /**
     * Set one agent has many statsEvents. This is the inverse side.
     *
     * @return  self
     */ 
    public function setStatsEvents($statsEvents)
    {
        $this->statsEvents = $statsEvents;

        return $this;
    }

    public function formatDataAgent($data)
    {
        $string = $data["estadisticas"];    //Recupero la info por post del textarea  

        $split_data = explode("\n", $string);   //Separo la información por saltos de línea
        $cabecera = explode("\t", $split_data[0]);  //Tengo todas las cabeceras en el índice 0
        $datos = explode("\t", $split_data[1]);     //Tengo toda la info en el índice 1

        array_pop($datos);
        

        $cabeceras_to_string = implode(",", $cabecera);  //Paso el array a string y separo por comas
        $cabecera_lower = strtolower($cabeceras_to_string); //Convierto todo el string a minúsculas para que lo acepte la BBDD
        $cadenaConvert = str_replace(" ", "_", $cabecera_lower);    //Sustituyo los espacios por "_"
        $trim = trim($cadenaConvert, "\"");                 //Elimino las comillas dobles

        $headers = explode(",", $trim);                  //Convierto el string a array de nuevo, separando por comas

        $array_inserts = [];    //Almaceno las cabeceras y los datos
        array_push($array_inserts, $headers);
        array_push($array_inserts, $datos);

        return $array_inserts;
    }
}