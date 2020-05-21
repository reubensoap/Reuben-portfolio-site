<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reuben Pena | Speech</title>
    <meta name="description" content="Let's collaborate on coding. Experienced in HTML5, CSS3, PHP, SQL.">
    <meta name="revisit" content="20 days">
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Nanum+Myeongjo|Oleo+Script&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link rel="stylesheet" href="../dist-aos/aos.css" type="text/css">
    <script src="https://kit.fontawesome.com/974871ddab.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <?php include('../view/nav-other.php'); ?>
    <div class="other-header-section">
        <div id="circle1"></div>
        <div id="circle2"></div>
        <div id="circle3"></div>
        <div id="circle4"></div>
        <div id="circle5"></div>
        <div class="header-content" data-aos="fade-left">
            <!--<img src="/images/mickey1.png"> -->
            <div class="card-holder">
                <h2>Let's Quiz.</h2>
            </div>
        </div>
    </div>
    <div class="intro-wrapper">
        <div class="rp-max-w rp-p-x-2" id="main-intro">
            <div class="intro" data-aos="fade-right">
                <h2>Speech Introduction.</h2>
                <div class="info-wrapper">
                    <div class="line"></div>
                    <i class="fas fa-code"></i>
                    <div class="line"></div>
                </div>
                <img src="/images/profile.png" alt="">
                <div class="info-desc">
                    <p>Quick Quiz About Me.</p>
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
        </div>
    </div>
    <div class="website-sec">
        <div class="rp-max-w rp-p-x-2 website-tubes">
            <div class="example-tube">
                <form action="." method="POST">
                    <h4>Pick a Username</h4>
                    <div class="inputrow">
                    <input type="hidden" name="action" value="startQuiz">
                    <input type="text" name="userPick" placeholder="REP">
                    </div>
                    <input type="submit" value="Submit Name">
                </form>
                <div class="bottom">
                <a class="recordBtn" href="?action=highScores">Records</a>
                </div>
            </div>
        </div>
    </div>
    <?php include('../view/social-bar-mobile.php'); ?>
    <?php include('../view/footer.php'); ?>
    <?php include('../view/social-bar.php'); ?>
    <script src="../dist-aos/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>