<?php

class DatabaseConnector
{
    public function connect()
    {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=echo', $user, $pass);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
?>