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
    /*public function register1($name, $password, $faction)*/

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

    public function formatDataAgent($data)
    {
        $string = $data["estadisticas"];    //Recupero la info por post del textarea  

        $split_data = explode("\n", $string);   //Separo la información por saltos de línea
        $cabecera = explode("\t", $split_data[0]);  //Tengo todas las cabeceras en el índice 0
        $data = explode("\t", $split_data[1]);     //Tengo toda la info en el índice 1

        array_pop($data);
        

        $cabeceras_to_string = implode(",", $cabecera);  //Paso el array a string y separo por comas
        $data_to_string = implode(",", $data);
        $cabecera_lower = strtolower($cabeceras_to_string); //Convierto todo el string a minúsculas para que lo acepte la BBDD
        $cadenaConvert = str_replace(" ", "_", $cabecera_lower);    //Sustituyo los espacios por "_"
        $trim = trim($cadenaConvert, "\"");                 //Elimino las comillas dobles

        $headers = explode(",", $trim);                  //Convierto el string a array de nuevo, separando por comas
        $data = explode(",", $data_to_string);
        array_pop($headers);

        /*echo "<pre>";
        var_dump($headers);

        echo "<pre>";
        //var_dump($data);
        var_dump(array_filter($data));*/

        //die();
        if (count(array_filter($headers)) !== count(array_filter($data))) {
            return null;
        }
        
        if (count($headers) < 4) {
            return null;
        }

        $array_inserts = [];    //Almaceno las cabeceras y los datos
        array_push($array_inserts, $headers);
        array_push($array_inserts, $data);

        return $array_inserts;
    }
}
