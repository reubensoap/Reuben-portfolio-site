<?php
if ( !isset($loginError) ) {
        $loginError = "";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reuben Pena | Dash</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Nanum+Myeongjo|Oleo+Script&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link rel="stylesheet" href="../dist-aos/aos.css" type="text/css">
    <script src="https://kit.fontawesome.com/974871ddab.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="header-container top-bottom-paddings">
        <div class="header-list rp-max-w rp-p-x-2">
            <a href="../index.php"><h1 class="header-name">Reuben Pena</h1></a>
            <ul> 
                <li><a class="nav-link" href="../blog">Blog</a></li>
                <li><a class="nav-link" href="../contact">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="login-body">
        <div class="rp-max-w rp-p-x-2 login-wrapper">
            <div class="login-form">
                <div id="form-header">
                    <h1>Login</h1>
                    <i class="fas fa-user"></i>
                </div>
                <form action="authentication.php" method="post"> 
                    <input type="text" name="username" placeholder="Username" id="username" required>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                    <input type="submit" value="Login">
                </form>
            </div>
        </div>
    </div>
    </div>
    <?php if (!empty($loginError)) : ?>
    <div id="errorWrapper">
        <p><?php echo $loginError; ?></p>
        <button id="closeButton" onClick="btnClose()">Close</button>
    </div>
    <?php endif; ?>
    <script>
        function btnClose() {
            document.getElementById("errorWrapper").style.display = "none";
        }
    </script>
<?php include('../view/footer.php'); ?>