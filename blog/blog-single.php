<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reuben Pena | Blog</title>
    <meta name="description" content="This topic is a good read">
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
    <div class="blog-body">
        <div class="rp-max-w rp-p-x-2 blog-wrap">
            <div class="side-blog-section">
                <div class="blog-top">
                    <h3>Other Entries</h3>
                </div>
                <div class="blog-list-wrapper">
                    <?php foreach ($blog_link as $blogLink) : ?>
                        <a href="?action=singleBlog&blog_id=<?php echo $blogLink['blogID']; ?>">
                            <?php echo $blogLink['header']; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="main-blog-section">
                <div class="blog-top">
                    <h2>Always a Good Read</h2>
                </div>
                <div class="description">
                    <h3 id="date-header"><?php echo $dateF; ?></h3>
                    <div class="blog-single-keys">
                        <?php echo $blogS['keywords']; ?>
                    </div>
                </div>
                <h2 id="blog-single-header"><?php echo $blogS['header']; ?></h2>
                <div class="blog-content-wrapper">
                    <?php echo $blogS['content']; ?>
                </div>
            </div>
        </div>
    </div>
    <?php include('../view/social-bar-mobile.php'); ?>
    <?php include('../view/footer.php'); ?>
    <?php include('../view/social-bar.php'); ?>
</body>
</html>