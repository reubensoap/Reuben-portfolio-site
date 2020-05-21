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
                <h2>Ready Set Go.</h2>
            </div>
        </div>
    </div>
    <div class="website-sec">
        <div class="rp-max-w rp-p-x-2 website-tubes">
            <div class="example-tube">
                <h3 class="example-tube-head">Quizer: <?php echo $userPick; ?></h3>
                <p>Answer all the questions, then press submit to complete quiz.</p>
                <form action="." method="POST">
                    <input type="hidden" name="action" value="completeQuiz">
                    <input type="hidden" name="userF" value="<?php echo $userPick; ?>">
                    <div class="question-tube">
                        <h3>How old do you think I am?</h3>
                        <input type="radio" name="Q1" value="A">19<br>
                        <input type="radio" name="Q1" value="B">21<br>
                        <input type="radio" name="Q1" value="C">25<br>
                        <input type="radio" name="Q1" value="D">29
                    </div> 
                    <div class="question-tube">
                        <h3>What Ethnicity do you think I am?</h3>
                        <input type="radio" name="Q2" value="A">Hispanic<br>
                        <input type="radio" name="Q2" value="C">Pacific Islander<br>
                        <input type="radio" name="Q2" value="D">Mixed Baby (White / Black)
                    </div>
                    <div class="question-tube">
                        <h3>If I went to another Country, would I say I am from America or Texas?</h3>
                        <input type="radio" name="Q3" value="A">America<br>
                        <input type="radio" name="Q3" value="B">Texas
                
                    </div>
                    <div class="question-tube">
                        <h3>A man pushed his car past a hotel, only to realize he was bankrupt. How did he figure this out? (He did not have his wallet on him, or in the car)</h3>
                        <input type="radio" name="Q4" value="A">He was mugged as he pushed the car into the parking lot<br>
                        <input type="radio" name="Q4" value="B">He was playing a board game<br>
                        <input type="radio" name="Q4" value="C">His pockets were empty<br>
                        <input type="radio" name="Q4" value="D">There was a text alert
                    </div>
                    <div class="question-tube">
                        <h3>How long did I try being Vegan?</h3>
                        <input type="radio" name="Q5" value="A">1 day<br>
                        <input type="radio" name="Q5" value="B">1 Month<br>
                        <input type="radio" name="Q5" value="C">1 Year<br>
                        <input type="radio" name="Q5" value="D">Never
                    </div>
                    <div class="question-tube">
                        <div class="image-holder">
                           <img src="../images/olive.png" alt=""> 
                        </div>
                        <h3>This dog is named Olive, what mix breed is she?</h3>
                        <input type="radio" name="Q6" value="A">Border Collie / Chihuahua<br>
                        <input type="radio" name="Q6" value="B">Husky / Pointer<br>
                        <input type="radio" name="Q6" value="C">Boxer / Basenji<br>
                        <input type="radio" name="Q6" value="D">German Shepherd / Shih Tzu
                    </div>
                    <div class="question-tube">
                        <div class="image-holder">
                           <img src="../images/alita.jpg" alt=""> 
                        </div>
                        <h3>This dog is named Alita, what Breed is she?</h3>
                        <input type="radio" name="Q7" value="A">Labrador<br>
                        <input type="radio" name="Q7" value="B">Staffordshire Terrier<br>
                        <input type="radio" name="Q7" value="C">Greyhound<br>
                        <input type="radio" name="Q7" value="D">Pitbull 
                    </div>
                    <div class="question-tube">
                        <h3>If you look you cannot see me. And if you see me you cannot see anything else. I can make anything you want happen, but later everything goes back to normal. What am I?</h3>
                        <input type="radio" name="Q8" value="A">Air<br>
                        <input type="radio" name="Q8" value="B">Nothing<br>
                        <input type="radio" name="Q8" value="C">Imagination<br>
                        <input type="radio" name="Q8" value="D">Other
                    </div>
                    <div class="question-tube">
                        <h3>Which high school did I graduate from?</h3>
                        <input type="radio" name="Q9" value="A">Plano East Senior High School<br>
                        <input type="radio" name="Q9" value="B">Allen High School<br>
                        <input type="radio" name="Q9" value="C">Deer Creek High School<br>
                        <input type="radio" name="Q9" value="D">Liberty High School
                    </div>
                    <div class="question-tube">
                        <h3>What is my Associates Degree of choice at Collin?</h3>
                        <input type="radio" name="Q10" value="A">Associates of Art (Painting)<br>
                        <input type="radio" name="Q10" value="B">Associates of Business Management<br>
                        <input type="radio" name="Q10" value="C">Associates of Web and Mobile Development<br>
                        <input type="radio" name="Q10" value="D">Associates of Social Work
                    </div>
                    <div class="question-tube">
                        <h3>How many months have 28 days?</h3>
                        <input type="radio" name="Q11" value="A">2<br>
                        <input type="radio" name="Q11" value="B">1<br>
                        <input type="radio" name="Q11" value="C">All of them<br>
                        <input type="radio" name="Q11" value="D">Depends if there's a leap year or not
                    </div>
                    <div class="question-tube">
                        <h3>How long have I been attending Collin College?</h3>
                        <input type="radio" name="Q12" value="A">First Semester<br>
                        <input type="radio" name="Q12" value="B">1 Year<br>
                        <input type="radio" name="Q12" value="C">3 years<br>
                        <input type="radio" name="Q12" value="D">7 years
                    </div>
                    <div class="question-tube">
                        <h3>A farmer has 17 sheep, all of them but 8 die. How many sheep are still standing?</h3>
                        <input type="radio" name="Q13" value="A">8<br>
                        <input type="radio" name="Q13" value="B">9<br>
                        <input type="radio" name="Q13" value="C">25<br>
                        <input type="radio" name="Q13" value="D">35
                    </div>
                    <div class="question-tube">
                        <h3>What is my Name?</h3>
                        <input type="radio" name="Q14" value="A">Ethan Diez<br>
                        <input type="radio" name="Q14" value="B">Reuben Pena<br>
                        <input type="radio" name="Q14" value="C">John Ocampo<br>
                        <input type="radio" name="Q14" value="D">Alden Richards
                    </div>
                    <input type="submit" value="Submit Quiz">
                </form>
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