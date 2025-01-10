<?php

class PersonneCRUD {
    protected PDO $pdo;

    public function __construct(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=test2024","root","");

    }
    /**
     * @return Personne[]
     */
    public function getAll(): array{
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
    public function create(Personne $personne){
        try{
            $pdo = $this->pdo;
                $stm = $pdo->prepare("insert into personne VALUES(DEFAULT,?,?,?)");
                $stm->execute([$personne->getNom(),$personne->getPrenom(),$personne->getEmail()]);
            }
            catch(PDOException $e){
                echo $e->getMessage();
                die();
            }
    }
    public function update(Personne $personne){
        try{
            $pdo = $this->pdo;
                $stm = $pdo->prepare("update personne set nom=?, prenom=?, email=? where id=?");
                $stm->execute([$personne->getNom(),$personne->getPrenom(),$personne->getEmail(),$personne->getId()]);
            }
            catch(PDOException $e){
                echo $e->getMessage();
                die();
            }
    }
    public function delete(Personne $personne){
        try{
            $pdo = $this->pdo;
                $stm = $pdo->prepare("delete from personne where id=?");
                $stm->execute([$personne->getId()]);
            }
            catch(PDOException $e){
                echo $e->getMessage();
                die();
            }
    }
    

}