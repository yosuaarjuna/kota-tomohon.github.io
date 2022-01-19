<?php

class Content_model{
    private $dbh; //database handler
    private $stmt;

    public function __construct()
    {
        //datasource name
        $dsn = 'mysql:host=localhost;dbname=tomohon';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }


    
    public function getContent($menu){
        $this->stmt = $this->dbh->prepare("SELECT Content FROM content where Menu='$menu'");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}