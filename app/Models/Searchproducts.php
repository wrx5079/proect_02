<?php


namespace App\Models;
use PDO;

class Searchproducts
{
    private $pdo;
        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;

        }

        public function search($key)
        {
            $sql = "SELECT * FROM products WHERE title LIKE '%$key%'";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(2);

        }

}