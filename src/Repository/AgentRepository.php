<?php

namespace App\Repository;

use App\Entity\Agent;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;

class AgentRepository extends EntityRepository
{
    /**
     * Método personalizado que comprueba si la información que se introduce en el form sobre un agente para registrarlo existe o no.
     * Si no existe, hace una inserción, registrando al usuario.
     * Si existe, devuelve un mensaje.
     */
    /*public function register1($name, $password, $faction)
    {
        $agent = $this->findOneBy(['agentName' => $name]);

        if (is_null($agent) || empty($agent)) {
            $agent = new Agent();
            $agent->setAgentName($name);
            $agent->setPassword($password);
            $agent->setFaction($faction);
            $this->getEntityManager()->persist($agent);
            $this->getEntityManager()->flush();
            return $agent->getIdAgent();
        } else {
            return "Este agente ya existe";
        }
    }*/

    public function register()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $faction = $_POST["faction"];

        $agent = $this->findOneBy(array(
            "agentName" => $username,
            "password" => $password,
            "faction" => $faction
        ));

        //var_dump($_POST);

        if (count($_POST) > 0) {  //Si $_POST tiene información, se lo paso a $register->findOneBy, si encuentra el usuario lanzo un error (ya existe ese usuario)
            if ($agent) {
                return true;
            } else {                //Sino, realizo el insert en la tabla agents y renderizo el template para logear
                $agent = new Agent();
                $agent->setAgentName($_POST["username"]);
                $agent->setPassword($_POST["password"]);
                $agent->setFaction($_POST["faction"]);
                $this->getEntityManager()->persist($agent);
                $this->getEntityManager()->flush();

                return false;
            }
        } else {
            echo "Error, rellena los campos";
        }
    }
}
