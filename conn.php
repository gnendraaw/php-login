<?php
    class Connection {
        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $database = 'pwpb';

        public function connect()
        {
            $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database) or die(mysqli_connect_error());

            return $conn;
        }

        public function query($query)
        {
            $conn = $this->connect();
            $queryRun = mysqli_query($conn, $query) or die(mysqli_errno($conn));

            return $queryRun;
        }

        public function fetchAll($query)
        {
            $queryRun = $this->query($query);
            $data = mysqli_fetch_all($queryRun, MYSQLI_ASSOC);
            
            return $data;
        }
    }

    $db = new Connection;
?>