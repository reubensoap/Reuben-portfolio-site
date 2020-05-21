<?php

require_once('../model/database.php');
require_once('../model/bloglist.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}

if ($action == 'home') {

    include('mainActivity.php');
} else if ($action == "startQuiz") {
    $userPick = $_POST['userPick'];
    if ($userPick == null){
        header('Location: .?action=home');
    } else {
        include('quiz.php');
    }
    
} else if ($action == "completeQuiz"){
    $userPick = $_POST['userF'];
    if ($userPick == null) {
        header('Location: .?action=home');
    } else {
        $userA1 = $_POST['Q1'];
        $userA2 = $_POST['Q2'];
        $userA3 = $_POST['Q3'];
        $userA4 = $_POST['Q4'];
        $userA5 = $_POST['Q5'];
        $userA6 = $_POST['Q6'];
        $userA7 = $_POST['Q7'];
        $userA8 = $_POST['Q8'];
        $userA9 = $_POST['Q9'];
        $userA10 = $_POST['Q10'];
        $userA11 = $_POST['Q11'];
        $userA12 = $_POST['Q12'];
        $userA13 = $_POST['Q13'];
        $userA14 = $_POST['Q14'];
        $userScore = 0;
        $userFinalScore = 0;

        if ($userA1 == "C"){
            $userScore++;
        }

        if ($userA2 == "A"){
            $userScore++;
        }

        if ($userA3 == "B"){
            $userScore++;
        }

        if ($userA4 == "B"){
            $userScore++;
        }

        if ($userA5 == "C"){
            $userScore++;
        }

        if ($userA6 == "B"){
            $userScore++;
        }

        if ($userA7 == "D"){
            $userScore++;
        }

        if ($userA8 == "C"){
            $userScore++;
        }

        if ($userA9 == "A"){
            $userScore++;
        }

        if ($userA10 == "C"){
            $userScore++;
        }

        if ($userA11 == "C"){
            $userScore++;
        }

        if ($userA12 == "D"){
            $userScore++;
        }

        if ($userA13 == "A"){
            $userScore++;
        }

        if ($userA14 == "B"){
            $userScore++;
        }

        if ($userScore == 0) {
            $userFinalScore = 0;
        }

        if ($userScore == 1) {
            $userFinalScore = 7;
        }

        if ($userScore == 2) {
            $userFinalScore = 14;
        }

        if ($userScore == 3) {
            $userFinalScore = 21;
        }

        if ($userScore == 4) {
            $userFinalScore = 28;
        }

        if ($userScore == 5) {
            $userFinalScore = 36;
        }

        if ($userScore == 6) {
            $userFinalScore = 43;
        }

        if ($userScore == 7) {
            $userFinalScore = 50;
        }

        if ($userScore == 8) {
            $userFinalScore = 57;
        }

        if ($userScore == 9) {
            $userFinalScore = 64;
        }

        if ($userScore == 10) {
            $userFinalScore = 71;
        }

        if ($userScore == 11) {
            $userFinalScore = 79;
        }

        if ($userScore == 12) {
            $userFinalScore = 86;
        }

        if ($userScore == 13) {
            $userFinalScore = 93;
        }

        if ($userScore == 14) {
            $userFinalScore = 100;
        }

        insertRecord($userPick, $userFinalScore);
        $highScores = getUsers();
        $recordNum = 0;
        include('records.php');

    }
} else if ($action == "highScores") {
    $highScores = getUsers();
    include('records.php');
}








/* 
else if ($action == 'example1') {
    $value1 = (int)$_POST['value1'];
    $value2 = (int)$_POST['value2'];
    $value3 = (int)$_POST['value3'];
    $value4 = (int)$_POST['value4'];
    $value5 = (int)$_POST['value5'];

    $array1 = array($value1, $value2, $value3, $value4, $value5);
    rsort($array1);
    if($array1[0]%2 == 1){
        if($array1[1]%2 == 1){
            if ($array1[2]%2 == 1){
                if($array1[3]%2 == 1) {
                    $bigValue = $array1[4];
                } else {
                    $bigValue = $array1[3];
                }
            } else {
                $bigValue = $array1[2];
            }
        } else {
            $bigValue = $array1[1];
        }
    } else {
        $bigValue = $array1[0];
    }
    
    include('examples.php');
} else if ($action == 'arrayExample') {
    $values = "1 6 5 7 8";
    $valuesS = explode(' ', $values);
    
    $valuesF = array();
    $j = count($valuesS);
    for ($x = 0; $x < $j; $x++) {
        $valuesF[$x] = (int)$valuesS[$x];
    }

    $arrayF = array();

    for ($x = 0; $x < $j; $x++) {
        $arrayF[$x] = getInfo($valuesF[$x]);
    }

    include('arrayExample.php');
}
*/


?>