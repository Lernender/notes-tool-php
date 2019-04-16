<?php

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

    // Output notes
    public function listNotes()
    {
        return $this->connection->query('SELECT * FROM notes');
    }

    // Output collections
    public function listCollection()
    {
        return $this->connection->query('SELECT * FROM collections');
    }

    // Delete note
    public function deleteNote($id)
    {
        return $this->connection->exec(sprintf('DELETE FROM notes WHERE note_id = %s', $id));
    }

    // Change title
    public function updateTitle($title)
    {
        return $this->connection->exec(sprintf("UPDATE notes SET note_title ='newTitle' WHERE note_id= %s", $title));
    }
}

$db = new Connection('pimcore', 'db', 'pimcore', 'pimcore');
// Output notes

/**
 * Call functions
 */

$notes = $db->listNotes();
foreach ($notes as $note) {
    echo $note['note_title'];
    echo $note['note_content'];
}

$collections = $db->listCollection();
foreach ($collections as $collection) {
    echo $collection['collection_name'];
    echo $collection['collection_id'];
}

$deleteNote = $db->deleteNote(2);
$updateNote = $db->updateTitle(4);

