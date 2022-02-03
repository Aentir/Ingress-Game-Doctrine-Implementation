<?php

namespace App\Core;

use Doctrine\ORM\Tools\Setup;

class EntityManager
{
    private $em;
    private $dbConfig;

    public function __construct()
    {
        $this->dbConfig = json_decode(file_get_contents(__DIR__ . "/../../config/dbConfig.json"), true);

        $paths = array(__DIR__ .'/../Entity');
        $isDevMode = true;

        $dbParams = array(
            'host' => $this->dbConfig["server"],
            'driver' => $this->dbConfig["driver"],
            'user' => $this->dbConfig["user"],
            'password' => $this->dbConfig["password"],
            'dbname' => $this->dbConfig["dbname"],
        );

        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
        $this->em = \Doctrine\ORM\EntityManager::create($dbParams, $config);
    }

    public function get()
    {
        return $this->em;
    }
}