<?php
session_start();
// Change this to your connection info.
$dsn = 'mysql:host=localhost;dbname=u541626658_reub';
$username = 'u541626658_joggr';
$password = 'Alicia2018';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include '../../model/errors.php';
    exit;
}

function newBlog($head, $dates, $keys, $contents) {
    global $db;
    $query = 'INSERT INTO blogger (header, content, date, keywords)
                VALUES (:header, :content, :date, :keywords)';
    $statement1 = $db->prepare($query);
    $statement1->bindValue(':header', $head);
    $statement1->bindValue(':content', $contents);
    $statement1->bindValue(':date', $dates);
    $statement1->bindValue(':keywords', $keys);
    $statement1->execute();
    $statement1->closeCursor();
}

newBlog($_POST['header'], $_POST['date'], $_POST['keywords'], $_POST['content']);
header('Location: index.php');

?>