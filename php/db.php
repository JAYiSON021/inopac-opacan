<?php
    require_once("config.php");
    class db 
    {
        private $conn;

        function __construct() 
        {
            $this->conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        }

        public function getConn() 
        {
            return $this->conn;
        }
        
    }
