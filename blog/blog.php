<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reuben Pena | Blog</title>
    <meta name="description" content="Experience I have gained along the coding journey.">
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
                <h2>The Blog.</h2>
            </div>
        </div>
    </div>
    <div class="intro-wrapper">
        <div class="rp-max-w rp-p-x-2" id="main-intro">
            <div class="intro" data-aos="fade-right">
                <h2>Blog It.</h2>
                <div class="info-wrapper">
                    <div class="line"></div>
                    <i class="fas fa-code"></i>
                    <div class="line"></div>
                </div>
                <img src="/images/profile.png" alt="">
                <div class="info-desc">
                    <p>Everyone goes through life experiences. These passages are my experiences, at least the ones worth typing about. They are either personal events or coding lessons that I thought were interesting. Feel free to keep reading.</p>
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
    <div class="blog-sec">
        <div class="rp-max-w rp-p-x-2">
            <div class="blog-wrapper">
                <?php foreach ($blogSlot as $blog) : ?>

                <a href="?action=singleBlog&blog_id=<?php echo $blog['blogID']; ?>">
                <div class="col">
                    <h3><?php echo $blog['header']; ?></h3>
                    <div class="keys-wrapper">
                        <?php 
                        $datex = explode('-', $blog['date']);
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
                           ?>
                        <div class="date"><?php echo $dateF; ?></div>
                        <div class="keywords">
                            <?php echo $blog['keywords']; ?>
                        </div>
                    </div>
                    <?php $final_desc = substr($blog['content'], 0, 180);?>
                    <?php echo $final_desc . '...';?>
                </div>
                </a>
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