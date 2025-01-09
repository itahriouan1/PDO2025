<?php

class PersonneCRUD {
    protected PDO $pdo;

    public function __construct(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=test2024","root","");

    }
    public function getAll(){
        try{
            $pdo = $this->pdo;
                $stm = $pdo->prepare("select * from personne");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_CLASS,'Personne');
            
            }
            catch(PDOException $e){
                echo $e->getMessage();
                die();
            }
    }
}