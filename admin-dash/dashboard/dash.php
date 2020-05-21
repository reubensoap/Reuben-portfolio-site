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
                    <p>Write Some Blogs</p>
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
            <form action="blog-submit.php" method="post" id="dash-form">
                <div id="dash-form-top">
                    <div id="header-input">
                        <label for="header"><p>Header</p></label>
                        <input type="text" name="header" required>
                    </div>
                    <div id="date-input">
                        <label for="date"><p>Date</p></label>
                        <input type="text" name="date" placeholder="2019-05-17" required>
                    </div>
                </div>
                <div id="keywords-input">
                    <label for="keywords"><p>Keywords</p></label>
                    <input type="text" name="keywords" placeholder="<div class='keyword'>HTML</div>" required>
                </div>
                <textarea name="content" id="content" rows="30" placeholder="Content Section"></textarea>
                <input type="submit" value="Submit" id="dash-submit">
            </form>
            <div id="existing-section">
                <h2>Existing Blogs</div>
                <div id="blog-list-wrapper">
                    <?php foreach ($blogLink as $blog) : ?>
                        <div class="blog-link">
                            <a href="?action=rewriteBlog&blog_id=<?php echo $blog['blogID']; ?>"><?php echo $blog['header']; ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <a href="logout.php" id="logout-button">Logout</a>
</body>
</html>