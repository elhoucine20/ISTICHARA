<?php

namespace models;

use PDO;

class Ville
{
    private PDO $connection;


    public function __construct($pdo)
    {
        $this->connection = $pdo;
    }

    public function getVille($id_ville)
    {
        $ville = $this->connection->query("SELECT name FROM ville WHERE id=$id_ville")->fetchColumn();
        return $ville;
    }

    public function getAllFromVille()
    {
        $stmt = $this->connection->prepare("SELECT * FROM ville ");
        $stmt->execute();
        $villes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $villes;
    }
}
