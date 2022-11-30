<?php

class Mahasiswa_model{
    // private $mhs = [
    //     [
    //         "nama" => "Cakno",
    //         "NRP" => "5025211240",
    //         "jurusan" => "Teknik Informatika", 
    //         "email" => "Caknocomel@gmail.com" 
    //     ],

    //     [
    //         "nama" => "Luna", 
    //         "NRP" => "5025211003",
    //         "jurusan" => "Teknik Informatika",
    //         "email" => "Luna@gmail.com"
    //     ]
    // ];

    // Database handler
    private $dbh;
    private $stmt;

    public function __construct()
    {
        // Data Source Name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}