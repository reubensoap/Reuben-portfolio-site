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

    if (!isset($bigValue)) {
        $bigValue = 0;
    }

    include('examples.php');
} else if ($action == 'example1') {
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


?>