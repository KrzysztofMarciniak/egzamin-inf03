<?php
class db {
    private $host = "mysql";
    private $user = "root";
    private $password = "root";
    private $dbname = "wedkowanie";
    protected $conn;

    public function __construct(){
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Połączenie z bazą danych nieudane: " . $this->conn->connect_error);
        }
    }

    public function closeConnection(){
        $this->conn->close();
    }
}

class zgloszenie extends db {

    public function dodajZgloszenie($lowisko, $data, $sedzia) {
        $stmt = $this->conn->prepare("INSERT INTO zawody_wedkarskie (Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES (?, ?, ?, ?)");
        $karty_id = 0;

        $stmt->bind_param("iiss", $karty_id, $lowisko, $data, $sedzia);

        if ($stmt->execute()) {
            echo "Zgłoszenie zostało pomyślnie dodane!";
        } else {
            echo "Błąd podczas dodawania zgłoszenia: " . $stmt->error;
        }

        $stmt->close();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lowisko = $_POST['lowisko'];
    $data = $_POST['data'];
    $sedzia = $_POST['sedzia'];

    $zgloszenie = new zgloszenie();
    $zgloszenie->dodajZgloszenie($lowisko, $data, $sedzia);
    $zgloszenie->closeConnection();
}
