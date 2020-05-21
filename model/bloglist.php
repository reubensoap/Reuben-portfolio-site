<?php 

function getBlogInfo() {
    global $db;
    $query = 'SELECT *
                FROM blogger ORDER BY blogID DESC';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $blogger = $statement->fetchAll();
        $statement->closeCursor();
        return $blogger;
    } catch (PDOExeption $e) {
        $error_message = $e->getMessage();
        include 'errors.php';
        exit();
    }
}

function getSingleBlog($id) {
    global $db;
    $query = 'SELECT * FROM blogger WHERE blogID = :blogID';
    try {
        $statement1 = $db->prepare($query);
        $statement1->bindValue(':blogID', $id);
        $statement1->execute();
        $singleB = $statement1->fetch();
        $statement1->closeCursor();
        return $singleB;
    } catch (PDOExeption $e) {
        $error_message = $e->getMessage();
        include 'errors.php';
        exit();
    }
}

function getBlogIDs() {
    global $db;
    $query = 'SELECT blogID, header FROM blogger
                ORDER BY blogID DESC';
    try {
        $statement2 = $db->prepare($query);
        $statement2->execute();
        $blogIDList = $statement2->fetchAll();
        $statement2->closeCursor();
        return $blogIDList;
    } catch (PDOExeption $e) {
        $error_message = $e->getMessage();
        include 'errors.php';
        exit();
    }
}

function getInfo($valuesS) {
    global $db;
    $query = "SELECT * FROM arrayExample
                WHERE ID = :id";
    $stmt17 = $db->prepare($query);
    $stmt17->execute(['id' => $valuesS]);
    $return = $stmt17->fetch();
    $stmt17->closeCursor();
    return $return;
}

// FUNCTIONS FOR SPEECH QUIZ

function getUsers() {
    global $db;
    $query = "SELECT * FROM userSp
                ORDER BY score DESC";
    $stmt18 = $db->prepare($query);
    $stmt18->execute();
    $return = $stmt18->fetchAll();
    $stmt18->closeCursor();
    return $return;
}

function insertRecord($user, $score){
    global $db;
    $query = "INSERT INTO userSp (userName, score)
                VALUES (:USER, :SCORE)";
    $stmt19 = $db->prepare($query);
    $stmt19->execute(['USER' => $user, 'SCORE' => $score]);
    $stmt19->closeCursor();
}

?>