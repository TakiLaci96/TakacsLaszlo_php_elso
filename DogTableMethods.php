<?php
class DogTableMethods 
{
    private $connection;

    public function __construct()
    {
        $this->connection = new mysqli("localhost", "root", "", "php_elso_dolgozat");
    } 

    function allDogs() {
        $sql = "SELECT * FROM kutyak";
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function create($dogdata) {
        $sql = "INSERT INTO kutyak (neve, neme, eletkor, nyilvantartasba_vetel, ivartalanitott) VALUES (?,?,?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $neve = $dogdata['neve'];
        $neme = $dogdata['neme'];
        $eletkor = $dogdata['eletkor'];
        $nyilvantartasba_vetel = $dogdata['nyilvantartasba_vetel'];
        $ivartalanitott = $dogdata['ivartalanitott'];
        $stmt->bind_param("ssiss", $neve, $neme, $eletkor, $nyilvantartasba_vetel, $ivartalanitott);
        $stmt->execute();
    }
}
?>