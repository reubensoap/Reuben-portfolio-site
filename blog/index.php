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
    $blogSlot = getBlogInfo();
    include('blog.php');
} else if ($action == 'singleBlog') {
    $blogS = getSingleBlog($_GET['blog_id']);
    $blog_link = getBlogIDs();
    $datex = explode('-', $blogS['date']);
    $month = $datex[1];
    switch ($month) {
        case '01':
            $month = 'January';
            break;
        case '02':
            $month = 'February';
            break;
        case '03':
            $month = 'March';
            break;
        case '04':
            $month = 'April';
            break;
        case '05':
            $month = 'May';
            break;
        case '06':
            $month = 'June';
            break;
        case '07':
            $month = 'July';
            break;
        case '08':
            $month = 'August';
            break;
        case '09':
            $month = 'September';
            break;
        case '10':
            $month = 'October';
            break;
        case '11':
            $month = 'November';
            break;
        case '12':
            $month = 'December';
            break;
    }
    $dateF = $datex[2] . " " . $month . ", " . $datex[0];
    include('blog-single.php');
}

?>