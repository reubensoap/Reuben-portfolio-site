<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reuben Pena | Graphics</title>
    <meta name="description" content="Everyone likes Art. Experienced in Photoshop, Illustrator, and InDesign.">
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
                <h2>See Some Art.</h2>
            </div>
        </div>
    </div>
    <div class="intro-wrapper">
        <div class="rp-max-w rp-p-x-2" id="graphic-intro">
            <div class="intro" data-aos="fade-right">
                <h2>Graphics.</h2>
                <div class="info-wrapper">
                    <div class="line"></div>
                    <i class="fas fa-camera-retro"></i>
                    <div class="line"></div>
                </div>
                <img src="/images/profile.png" alt="">
                <div class="info-desc">
                    <p>Although I do try to stay my lane on coding, graphic work is also on my resume. I am experienced in Photoshop, Illustrator, and InDesign. At the Agency I currently work for I have worked on creating and editing social posts and website graphics.</p>
                </div>
                <div class="i-wrapper">
                    <i class="far fa-images"></i>
                    <i class="fab fa-adobe"></i>
                    <i class="fas fa-vector-square"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper ">
        <div class="rp-max-w rp-p-x-2">
            <div class="buttonContainer">
                <button class="btn active" onclick="filterSelection('all')">Show All</button>
                <button class="btn" onclick="filterSelection('vector')">Vectors</button>
                <button class="btn" onclick="filterSelection('images')">Images</button>
                <button class="btn" onclick="filterSelection('ads')">Ads</button>
            </div>
            <div class="image-wrapper">
                <div class="column vector">
                    <img src="../images/gallery-thumbs/gallery_bird.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
                </div>
                <div class="column images">
                    <img src="../images/gallery-thumbs/gallery_UFC_kids.png" onclick="openModal();currentSlide(2)" class="hover-shadow">
                </div>
                <div class="column images">
                    <img src="../images/gallery-thumbs/gallery_UFC_banner.png" onclick="openModal();currentSlide(3)" class="hover-shadow">
                </div>
                <div class="column images">
                    <img src="../images/gallery-thumbs/gallery_texas_clutch_reloaded_banner.png" onclick="openModal();currentSlide(4)" class="hover-shadow">
                </div>
                <div class="column vector">
                    <img src="../images/gallery-thumbs/gallery_texas_clutch_reloaded_logo.png" onclick="openModal();currentSlide(5)" class="hover-shadow">
                </div>
                <div class="column vector">
                    <img src="../images/gallery-thumbs/gallery_witch.png" onclick="openModal();currentSlide(6)" class="hover-shadow">
                </div>
                <div class="column vector">
                    <img src="../images/gallery-thumbs/gallery_reuben_logo.png" onclick="openModal();currentSlide(7)" class="hover-shadow">
                </div>
                <div class="column images">
                    <img src="../images/gallery-thumbs/gallery_texas_clutch_reloaded_psa_logo.png" onclick="openModal();currentSlide(8)" class="hover-shadow">
                </div>
                <div class="column images">
                    <img src="../images/gallery-thumbs/gallery_texas_clutch_reloaded_side_image.png" onclick="openModal();currentSlide(9)" class="hover-shadow">
                </div>
                <div class="column images">
                    <img src="../images/gallery-thumbs/gallery_twins.png" onclick="openModal();currentSlide(10)" class="hover-shadow">
                </div>
                <div class="column ads">
                    <img src="../images/gallery-thumbs/texas_clutch_ad1.png" onclick="openModal();currentSlide(11)" class="hover-shadow">
                </div>
                <div class="column vector">
                    <img src="../images/gallery-thumbs/gallery_ship.png" onclick="openModal();currentSlide(12)" class="hover-shadow">
                </div>
                <div class="column vector">
                    <img src="../images/gallery-thumbs/gallery_skull.png" onclick="openModal();currentSlide(13)" class="hover-shadow">
                </div>
                <div class="column ads">
                    <img src="../images/gallery-thumbs/gallery_movie_ad.png" onclick="openModal();currentSlide(14)" class="hover-shadow">
                </div>
                <div class="column vector">
                    <img src="../images/gallery-thumbs/gallery_old_site_logo.png" onclick="openModal();currentSlide(15)" class="hover-shadow">
                </div>
                <div class="column vector">
                    <img src="../images/gallery-thumbs/gallery_face.png" onclick="openModal();currentSlide(16)" class="hover-shadow">
                </div>
                <div class="column images">
                    <img src="../images/gallery-thumbs/gallery_new_york.png" onclick="openModal();currentSlide(17)" class="hover-shadow">
                </div>
                <div class="column vector">
                    <img src="../images/gallery-thumbs/gallery_jorge-project-pen-final.png" onclick="openModal();currentSlide(18)" class="hover-shadow">
                </div>
                <div class="column ads">
                    <img src="../images/gallery-thumbs/gallery_just_for_friends_ad_1.png" onclick="openModal();currentSlide(19)" class="hover-shadow">
                </div>
                <div class="column ads">
                    <img src="../images/gallery-thumbs/gallery_just_for_friends_ad_2.png" onclick="openModal();currentSlide(20)" class="hover-shadow">
                </div>
                <div class="column vector">
                    <img src="../images/gallery-thumbs/gallery_in_progress_story.png" onclick="openModal();currentSlide(21)" class="hover-shadow">
                </div>
                <div class="column images">
                    <img src="../images/gallery-thumbs/gallery_miami_olive.png" onclick="openModal();currentSlide(22)" class="hover-shadow">
                </div>
                <div class="column images">
                    <img src="../images/gallery-thumbs/gallery_code_banner.png" onclick="openModal();currentSlide(23)" class="hover-shadow">
                </div>
                <div class="column vector">
                    <img src="../images/gallery-thumbs/gallery_eye.png" onclick="openModal();currentSlide(24)" class="hover-shadow">
                </div>
                <div class="column vector">
                    <img src="../images/gallery-thumbs/gallery_berryLogo.png" onclick="openModal();currentSlide(25)" class="hover-shadow">
                </div>
                <div class="column ads">
                    <img src="../images/gallery-thumbs/gallery_easylistingflyerp1.png" onclick="openModal();currentSlide(26)" class="hover-shadow">
                </div>
                <div class="column ads">
                    <img src="../images/gallery-thumbs/gallery_easylistingflyerp2.png" onclick="openModal();currentSlide(27)" class="hover-shadow">
                </div>
            </div>
        </div>
        </div>
        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">
                <div class="mySlides">
                    <div class="numbertext">1/27</div>
                    <img src="../images/gallery-full/vector-display-bird.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">2/27</div>
                    <img src="../images/gallery-full/kids1.jpg" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">3/27</div>
                    <img src="../images/gallery-full/mainred2.jpg" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">4/27</div>
                    <img src="../images/gallery-full/banner_option_1.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                        <div class="numbertext">5/27</div>
                        <img src="../images/gallery-full/main_logo.png" alt="" style="width:100%">
                </div>
                <!-- --------------------------------------->
                <div class="mySlides">
                    <div class="numbertext">6/27</div>
                    <img src="../images/gallery-full/main_vector_.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">7/27</div>
                    <img src="../images/gallery-full/reuben_logo.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">8/27</div>
                    <img src="../images/gallery-full/psa_section.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">9/27</div>
                    <img src="../images/gallery-full/join_us_final_v1.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">10/27</div>
                    <img src="../images/gallery-full/banner photos_4_larger.jpg" alt="" style="width:100%">
                </div>
                <!-- ------------------------------------------------------- -->
                <div class="mySlides">
                    <div class="numbertext">11/27</div>
                    <img src="../images/gallery-full/texas_clutch_ad1_main.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">12/27</div>
                    <img src="../images/gallery-full/final_21mil.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">13/27</div>
                    <img src="../images/gallery-full/skull-final.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">14/27</div>
                    <img src="../images/gallery-full/national_theater_v1.jpg" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">15/27</div>
                    <img src="../images/gallery-full/redsoaplogo_v2.jpg" alt="" style="width:100%">
                </div>
                <!-- ------------------------------------------------------------------ -->
                <div class="mySlides">
                    <div class="numbertext">16/27</div>
                    <img src="../images/gallery-full/Profile_final.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">17/27</div>
                    <img src="../images/gallery-full/slide3_v1.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">18/27</div>
                    <img src="../images/gallery-full/jorge-project-pen-final.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">19/27</div>
                    <img src="../images/gallery-full/ad_banner1.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">20/27</div>
                    <img src="../images/gallery-full/ad_banner2.png" alt="" style="width:100%">
                </div>
                <!------------------------------------------------------------------------------------>
                <div class="mySlides">
                    <div class="numbertext">21/27</div>
                    <img src="../images/gallery-full/in_progress_story.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">22/27</div>
                    <img src="../images/gallery-full/olive_stock_miami.jpg" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">23/27</div>
                    <img src="../images/gallery-full/websites-banner-desktop.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">24/27</div>
                    <img src="../images/gallery-full/cat-eye-final.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">25/27</div>
                    <img src="../images/gallery-full/berry-logo.jpg" alt="" style="width:100%">
                </div>
                <!------------------------------------------------------------------------>
                <div class="mySlides">
                    <div class="numbertext">26/27</div>
                    <img src="../images/gallery-full/easylistingflyer_page1.png" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">27/27</div>
                    <img src="../images/gallery-full/easylistingflyer_page2.png" alt="" style="width:100%">
                </div>
                <!----------------------------------------------------------------------------->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <div class="caption-container">
                    <p id="caption"></p>
                </div>
                <div class="image-wrapper">
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_bird.png" onclick="currentSlide(1)" alt="Bird Vector">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_UFC_kids.png" onclick="currentSlide(2)" alt="UFC Landing Page Banner">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_UFC_banner.png" onclick="currentSlide(3)" alt="UFC Landing Page Banner">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_texas_clutch_reloaded_banner.png" onclick="currentSlide(4)" alt="Texas Clutch Website Banner">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_texas_clutch_reloaded_logo.png" onclick="currentSlide(5)" alt="Texas Clutch Logo">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_witch.png" onclick="currentSlide(6)" alt="Witch Vector Art">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_reuben_logo.png" onclick="currentSlide(7)" alt="Reuben Promotional Vector">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_texas_clutch_reloaded_psa_logo.png" onclick="currentSlide(8)" alt="Texas Clutch Side Image">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_texas_clutch_reloaded_side_image.png" onclick="currentSlide(9)" alt="Texas Clutch Side Image">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_twins.png" onclick="currentSlide(10)" alt="Twins Photoshop">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/texas_clutch_ad1.png" onclick="currentSlide(11)" alt="Texas Clutch Ad">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_ship.png" onclick="currentSlide(12)" alt="Advice Interactive Infographic">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_skull.png" onclick="currentSlide(13)" alt="Skull Vector">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_movie_ad.png" onclick="currentSlide(14)" alt="Movie Ad">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_old_site_logo.png" onclick="currentSlide(15)" alt="Old Site Logo">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_face.png" onclick="currentSlide(16)" alt="Reuben Vector Profile">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_new_york.png" onclick="currentSlide(17)" alt="New York Box Banner">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_jorge-project-pen-final.png" onclick="currentSlide(18)" alt="Project Flyer">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_just_for_friends_ad_1.png" onclick="currentSlide(19)" alt="Just For Friends Ad">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_just_for_friends_ad_2.png" onclick="currentSlide(20)" alt="Just For Friends Ad">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_in_progress_story.png" onclick="currentSlide(21)" alt="In Progress Vector">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_miami_olive.png" onclick="currentSlide(22)" alt="Miami Olive">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_code_banner.png" onclick="currentSlide(23)" alt="Old Site Banner">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_eye.png" onclick="currentSlide(24)" alt="Cats Eye Vector">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_berryLogo.png" onclick="currentSlide(25)" alt="Berry Van Lines Logo">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_easylistingflyerp1.png" onclick="currentSlide(26)" alt="Easy Listings Marketing Flyer 1">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../images/gallery-thumbs/gallery_easylistingflyerp2.png" onclick="currentSlide(27)" alt="Easy Listings Marketing Flyer 2">
                    </div>
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
<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<script>
    filterSelection("all") // Execute the function and show all columns
    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    // Show filtered elements
    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
            }
        }
    }

    // Hide elements that are not selected
    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var buttonContainer = document.getElementById("buttonContainer");
    var btns = buttonContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
</body>
</html>