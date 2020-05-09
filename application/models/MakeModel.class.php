<?php
class MakeModel
{
    private $db;

    function __construct()
    {
        $this->db = new MySql();
    }

    public function getMakes()
    {
        try {
            $this->db->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->db->conn->prepare("SELECT * FROM makes");
            $stmt->execute();

            // set the resulting array to associative
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function createMake($make)
    {
        try {
            $this->db->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO `makes`(`Id`, `Name`, `Abrv`, `DateCreated`, `DateUpated`) VALUES 
            (null,'$make->Name','$make->Abrv',null,null)";
            $this->db->conn->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function getMakeById($id)
    {
        try {
            $this->db->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->db->conn->prepare("SELECT * FROM makes where Id = $id");
            $stmt->execute();

            // set the resulting array to associative
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $data[0];
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function updateMakeById($make)
    {
        try {
            $this->db->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE `makes` SET
            `Name`= '$make->Name',
            `Abrv`= '$make->Abrv'
             WHERE Id = $make->Id";
            $this->db->conn->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}
