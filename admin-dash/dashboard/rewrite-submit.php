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

function updateBlog($head, $dates, $keys, $contents, $blogID) {
    global $db;
    $query = 'UPDATE blogger SET header = :header, date = :date, content = :content, keywords = :keywords
    WHERE blogID = :blogID';
    $statement1 = $db->prepare($query);
    $statement1->bindValue(':header', $head);
    $statement1->bindValue(':content', $contents);
    $statement1->bindValue(':date', $dates);
    $statement1->bindValue(':keywords', $keys);
    $statement1->bindValue(':blogID', $blogID);
    $statement1->execute();
    $statement1->closeCursor();
}

updateBlog($_POST['header'], $_POST['date'], $_POST['keywords'], $_POST['content'], $_POST['blogID']);
header('Location: index.php');

?>