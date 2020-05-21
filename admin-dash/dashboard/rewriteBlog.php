<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reuben Pena | Dash</title>
    <meta name="description" content="Let's collaborate on coding. Experienced in HTML5, CSS3, PHP, SQL.">
    <meta name="revisit" content="20 days">
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Nanum+Myeongjo|Oleo+Script&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../../css/main.css" type="text/css">
    <link rel="stylesheet" href="../../dist-aos/aos.css" type="text/css">
    <script src="https://kit.fontawesome.com/974871ddab.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="header-container top-bottom-paddings">
        <div class="header-list rp-max-w rp-p-x-2">
            <a href="../../index.php"><h1 class="header-name">Reuben Pena</h1></a>
            <ul> 
                <li><a class="nav-link" href="../../blog">Blog</a></li>
                <li><a class="nav-link" href="../../contact">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="intro-wrapper">
        <div class="rp-max-w rp-p-x-2" id="main-intro">
            <div class="intro">
                <h2>Dash.</h2>
                <div class="info-wrapper">
                    <div class="line"></div>
                    <i class="fas fa-code"></i>
                    <div class="line"></div>
                </div>
                <div class="info-desc">
                    <p>Sometimes you gotta edit</p>
                </div>
                <div class="i-wrapper">
                    <i class="fab fa-bootstrap"></i>
                    <i class="fab fa-css3-alt"></i>
                    <i class="fab fa-js"></i>
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-php"></i>
                    <i class="fab fa-wordpress-simple"></i>
                    <i class="fas fa-database"></i>
                </div>
            </div>
            <form action="rewrite-submit.php" method="post" id="dash-form">
                <div id="dash-form-top">
                    <div id="header-input">
                        <label for="header"><p>Header</p></label>
                        <input type="text" name="header" value="<?php echo $blogL['header']; ?>" required>
                    </div>
                    <div id="date-input">
                        <label for="date"><p>Date</p></label>
                        <input type="text" name="date" value="<?php echo $blogL['date']; ?>" required>
                    </div>
                </div>
                <div id="keywords-input">
                    <label for="keywords"><p>Keywords</p></label>
                    <input type="text" name="keywords" value="<?php echo $undoneKeyword; ?>" required>
                </div>
                <textarea name="content" id="content" rows="30"><?php echo $undoneContent; ?></textarea>
                <input type="hidden" name="blogID" value="<?php echo $blogID; ?>">
                <input type="submit" value="Submit" id="dash-submit">
            </form>
        </div>
    </div>
    <div class="control-wrapper">
        <a href="index.php">Dashboard</a>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>