<html>
<head>
    <meta charset=“utf-8“>
    <title>Overview</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php

$db = new \Acissej\Db\Connection('pimcore', 'db', 'pimcore', 'pimcore');
$db->listNotes();

?>

<!-- Collection -->
<div class="container">
    <h1>Meine Sammlungen</h1>
</div>

<!-- Notes -->
<div class="container">
    <h1>Meine Notizen</h1>
</div>

<!-- Button -->
<a href="pages/new_note.php"><button class="button button-default">Neue Notiz</button>

</body>
</html>

