<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reuben Pena | Merit</title>
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
                <h2>Let's Code.</h2>
            </div>
        </div>
    </div>
    <div class="intro-wrapper">
        <div class="rp-max-w rp-p-x-2" id="main-intro">
            <div class="intro" data-aos="fade-right">
                <h2>Merit America.</h2>
                <div class="info-wrapper">
                    <div class="line"></div>
                    <i class="fas fa-code"></i>
                    <div class="line"></div>
                </div>
                <img src="/images/profile.png" alt="">
                <div class="info-desc">
                    <p>Algorithms for Merit America Assessment</p>
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
                <?php foreach($valuesS as $v) : ?>
                    <p><?php echo $v; ?></p>
                <?php endforeach; ?>
                <h4>Count</h4>
                <p><?php echo $j; ?></p>
                <?php foreach($valuesF as $F) : ?>
                    <p><?php echo $F; ?></p>
                <?php endforeach; ?>
                <h3><?php echo $valuesF[0]; ?></h3>
                <?php foreach ($arrayF as $array) : ?>
                    <p><?php echo $array['ID']; ?> <?php echo $array['name']; ?> <?php echo $array['company']; ?></p>
                <?php endforeach; ?>
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