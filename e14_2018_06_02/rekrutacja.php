<?php
require_once 'db.php';

class Management extends Database {
    public function __construct() {
        parent::__construct('localhost', 'root', '', 'baza');
    }

    public function insertData($imie, $nazwisko, $stanowisko) {
        $sql = "INSERT INTO pracownicy (imie, nazwisko, stanowisko) VALUES ('$imie', '$nazwisko', '$stanowisko')";

        $this->query($sql);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $stanowisko = $_POST['stanowisko'];

    $management = new Management();

    $management->insertData($imie, $nazwisko, $stanowisko);

    echo "Dodano dane rekrutacyjne do bazy";

    $management->close();
}
