<?php

namespace Acissej\Db;

class Connection
{
    /**
     * @var PDO
     */
    private $connection;

    /**
     * @param string $database
     * @param string $host
     * @param string $username
     * @param string $password
     */
    public function __construct(string $database, string $host, string $username, string $password)
    {
        $this->connection = new PDO("mysql:dbname=$database;host=$host", $username, $password);
    }

    public function listNotes()
    {
        $response = $this->connection->query('SELECT * FROM notes');
        print_r($response);exit;
    }
}



