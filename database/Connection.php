<?php

class Connection
{
    public $servername = "localhost";
    public $dbname = "todos";
    public $username = "root";
    public $password = "";

    public static function make($config)
    {
        try {

            return new PDO("{$config['connection']}; dbname={$config['dbname']}", $config['username'] , $config['password'], $config['exception']);
            
        } catch (PDOException $e) {
            echo "Connection not established " . $e->getMessage();
        }
    }
}
