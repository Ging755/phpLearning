<?php
class UserModel
{

    public function getUsers()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "phpTest";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM users");
            $stmt->execute();

            // set the resulting array to associative
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
