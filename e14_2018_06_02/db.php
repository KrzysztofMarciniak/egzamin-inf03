<?php

class Database {
    private $host;
    private $user;
    private $password;
    private $dbname;
    private $connection;

    public function __construct($host, $user, $password, $dbname) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->connect();
    }

    private function connect() {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->dbname);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function query($sql) {
        $result = $this->connection->query($sql);

        if (!$result) {
            die("Query failed: " . $this->connection->error);
        }
        return $result;
    }

    public function fetchAll($sql) {
        $result = $this->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function fetchOne($sql) {
        $result = $this->query($sql);
        return $result->fetch_assoc();
    }

    public function close() {
        $this->connection->close();
    }
}
