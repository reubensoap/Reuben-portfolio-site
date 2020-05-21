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
                <h2>High Scores.</h2>
            </div>
        </div>
    </div>
    <div class="website-sec">
        <div class="rp-max-w rp-p-x-2 website-tubes">
            <div class="example-tube">
                <h2 class="example-tube-head">Free Starbucks?</h2>
                <div class="recordHead">
                    <h3 class="rowN">Rank</h3>
                    <h3 class="userLabel">UserName</h3>
                    <h3 class="scoreLabel">Score</h3>
                </div>
                <div class="record-holder">
                <?php foreach($highScores as $h) : ?>
                    <?php $recordNum += 1; ?>
                    <div class="record">
                        <h5 class="rowN"><?php echo $recordNum; ?></h5>
                        <h5 class="userLabel"><?php echo $h['userName']; ?> </h5>
                        <h5 class="scoreLabel"><?php echo $h['score']; ?></h5>
                    </div>
                <?php endforeach; ?>
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