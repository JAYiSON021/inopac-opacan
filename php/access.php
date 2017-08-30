<?php

    require_once("db.php");

    class Access 
    {
        private $conn;

        function __construct() 
        {
            $db = new db();
            $this->conn = $db->getConn();
        }

        public function getHoldingsResourcesList()
        {
            $sql = "SELECT h_categories, h_tbl_name FROM tbl_holdings";
            $result = mysqli_query($this->conn,$sql);
            return $result;
        }

        public function searchQuery($sql)
        {
            $result = mysqli_query($this->conn,$sql);
            return $result;
        }
                
    }
