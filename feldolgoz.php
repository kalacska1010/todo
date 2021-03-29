<?php
class DBkapcsolat {

    private $db_szerver;
    private $db_felhnev;
    private $db_jelszo;
    private $db_nev;
    private $kapcs;

//   public function __construct() {
//        $this->db_szerver = "tanulo16.szf1a.oktatas.szamalk-szalezi.hu";
//        $this->db_felhnev = "c1_tanulo16szf1a";
//        $this->db_jelszo = "_tanulo16szf1a";
//        $this->db_nev = "c1ABtanulo16szf1a";
//        $this->kapcsolat();
//   }
    public function __construct() {
        $this->db_szerver = "localhost";
        $this->db_felhnev = "root";
        $this->db_jelszo = "";
        $this->db_nev = "todookj";
        $this->kapcsolat();
    }

    public function kapcsolat() {
        $this->kapcs = new mysqli($this->db_szerver, $this->db_felhnev, $this->db_jelszo, $this->db_nev);
        $this->kapcs->set_charset('utf8');
        if ($this->kapcs->connect_error) {
            die("Kapcsolódás nem sikerült: " . $this->kapcs->connect_error);
        }
    }
    
    
    
     function lekerdez($tablaNeve, $where=1) {
        $sql = "SELECT * FROM " . $tablaNeve . " WHERE " . $where;
        $sql = $this->kapcs->query($sql);
        return $sql;
    }
    
    function torol($tablaNeve, $szuro) {
        $this->kapcsolat();
        $sql = "DELETE FROM " . $tablaNeve . " WHERE " . $szuro;
        $sql = $this->kapcs->query($sql);
        if ($sql == true) {
            return true;
        } else {
            return false;
        }
    }
        function modosit($tablaNeve, $ujErtekek, $where) {
//        $this->kapcsolat();
        $sql = "UPDATE " . $tablaNeve . " SET " . $ujErtekek . " WHERE " . $where;
        $sql = $this->kapcs->query($sql);
        if ($sql == true) {
            return true;
        } else {
            return false;
        }
    }
     //function createData($tablaNeve, $oszlopok, $ertekek){
    function ujRekord($tablaNeve, $oszlopok, $ertekek) {
//        $this->kapcsolat();
        $sql = "INSERT INTO " . $tablaNeve . " " . $oszlopok . " VALUES " . $ertekek;

        $sql = $this->kapcs->query($sql);

        if ($sql == true) {
            return $sql;
        } else {
            return false;
        }
    }
    }
    ?>
