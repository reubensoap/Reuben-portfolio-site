<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149405979-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-149405979-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reuben Pena | Home</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Nanum+Myeongjo|Oleo+Script&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="dist-aos/aos.css" type="text/css">
    <script src="https://kit.fontawesome.com/974871ddab.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <?php include('view/nav.php'); ?>
    <div class="header-section">
        <img src="/images/circle-lines-2.png" id="spin-back">
        <div class="header-content" data-aos="fade-left">
            <div class="card-holder">
                <a href="./graphics">
                    <h3>Graphics</h3>
                </a>
                <a href="./websites">
                    <h3>Websites</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="intro-wrapper">
        <div class="rp-max-w rp-p-x-2" id="main-intro">
            <div class="intro" data-aos="fade-right">
                <h2>My Info.</h2>
                <div class="info-wrapper">
                    <div class="line"></div>
                    <i class="far fa-comments"></i>
                    <div class="line"></div>
                </div>
                <img src="/images/profile.png" alt="">
                <div class="info-desc">
                    <p>Hello person, I am a aspiring Web Developer. I currently study for my AAS E-Business Web Development Degree. I've been working at a Digital Marketing Agency for about 3 years now. I'd say anyone looking for an entry level Web Developer should look no further. In other news, I'm also an active runner and part time vegan.</p>
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
    <div class="info-section">
        <div class="rp-max-w rp-p-x-2 graphic-section">
            <div id="first_set" data-aos="fade-right">
                <h2>Graphics</h2>
                <p>Art is my first love, being able to express creativity using modern technology is a great joy. My portfolio contains website banners, ads, logos and flyers.</p>
            </div>
            <div id="second_set">
                <img src="images/yellow-goup.png">
            </div>
        </div>
    </div>
    <div class="info-section">
        <div class="rp-max-w rp-p-x-2 website-section">
            <div id="first_set" data-aos="fade-right">
                <h2>Websites</h2>
                <p>You can't create the website you want with restrictions, having the ability to create websites from scratch gives the benefit of customization. My latest venture is using a database with PHP to create dynamic content. My portfolio consists of landing pages and websites.</p>
            </div>
            <div id="second_set">
                <img src="images/blue-goup.png">
            </div>
        </div>
    </div>
    <?php include('view/social-bar-mobile.php'); ?>
    <?php include('view/contact-form.php'); ?>
    <?php include('view/footer.php'); ?>
    <?php include('view/social-bar.php'); ?>
    <script src="dist-aos/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>