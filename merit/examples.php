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
                <h2>Example</h2>
                <form action="." method="post">
                    <input type="hidden" name="action" value="example1">
                    <p>Insert 5 Integer values Please.</p>
                    <div class="inputrow">
                        <input type="text" name="value1" placeholder="43" class="input-value">
                        <input type="text" name="value2" placeholder="104" class="input-value">
                        <input type="text" name="value3" placeholder="305" class="input-value">
                        <input type="text" name="value4" placeholder="152" class="input-value">
                        <input type="text" name="value5" placeholder="405" class="input-value">
                    </div>
                    <input type="submit" value="Submit" class="submit-button">
                </form>
                <h3>Biggest Value and Even: <?php echo $bigValue; ?></h3>
                <div class="example-divider">

                </div>
                <h3>Steps</h3>
                <p>I completed my example using PHP since I am more efficient at PHP and have a deadline on this project. Finding the biggest number out of random numbers is as follows. The user inputs 5 integers into the form, the form is using a POST method to transfer the data (another way to get those values is to use a random number function to grab random numbers at the start of the page load). The user then presses the submit button. Once pressed, the 5 values in the form are stored as follows value1, value2, value3, value4 and value5. The page is redirected to the index of the file, the values from the form are casted into INT data type then stored again into variables as follows, $value1, $value2, $value3, $value4 and $value5. Those variables are then inserted into an array called $array1. Using the rsort function, the array indexes are rearranged in descending fashion to get the biggest value at 0 place. The array is then put through a 4 nested IF statement, if the IF statement is true for $array1[0] % 2 == 1 the nested IF statement is triggered and checks the next index for a modulo output equal to 1 until the last value is set to be $bigValue. If the IF statement is false, then the index in question will be set as $bigValue. $bigValue is the value that is largest and even.</p>
                <div class="example-divider">

                </div>
                <h3>Chose to give my code instead of Pseudocode</h3>
                
                <p>$value1 = (int)$_POST['value1'];</p>
                <p>$value2 = (int)$_POST['value2'];</p>
                <p>$value3 = (int)$_POST['value3'];</p>
                <p>$value4 = (int)$_POST['value4'];</p>
                <p>$value5 = (int)$_POST['value5'];</p>
                <br/>
                <p>$array1 = array($value1, $value2, $value3, $value4, $value5);</p>
                <p>rsort($array1);</p>
                <p>if($array1[0]%2 == 1){</p>
                    <p>if($array1[1]%2 == 1){</p>
                        <p>if ($array1[2]%2 == 1){</p>
                            <p>if($array1[3]%2 == 1) {</p>
                                <p>$bigValue = $array1[4];</p>
                                <p>} else {</p>
                                    <p> $bigValue = $array1[3];</p>
                                    <p>}</p>
                                    <p>} else {</p>
                                        <p> $bigValue = $array1[2];</p>
                                        <p>}</p>
                                        <p>} else {</p>
                                            <p>$bigValue = $array1[1];</p>
                                            <p>}</p>
                                            <p>} else {</p>
                                                <p>$bigValue = $array1[0];</p>
                                                <p>}</p>
                <div class="example-divider">

                </div>
                <h3>Javascript Version (just Function)</h3>
                    <p>&nbsp;&nbsp;function findLargestEvenNumber(array1) {</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;array1.sort((x, y) => y - x);</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;for (var i = 0; i < array1.length; i++) {</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(array1[i] % 2 == 0)</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return array[i];</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;}</p>
                            <p>&nbsp;&nbsp;var inputArray = [1,2,3,4,5,6,10,11,12,13];</p>
                            <p>&nbsp;&nbsp;var largestEven = findLargestEvenNumber(inputArray);</p>
                            <p>&nbsp;&nbsp;console.log(largestEven);</p>

                <div class="example-divider">

                </div>
                <h3>Java Version</h3>
                <p>import java.util.Arrays;</p>
                <p>public class JavaApplication7 {</p>
                <br/>
                <p>public static int findLargestEvenNumber(Integer []inputArray){</p>
                <p>int i;</p>
                <p>int largest = 0;</p>
                <p>for(i = 0; i < inputArray.length; i++){</p>
                <p>if(inputArray[i] % 2 == 0){</p>
                <p>largest =  inputArray[i];</p>
                <p>}</p>
                <p>}</p>
                <p>return largest;</p>
                <p>}</p>
                <p>public static void main(String[] args) {</p>
                <p>Integer [] inputArray = {14, 7, 6, 45, 21, 9, 100, 120, 11}; </p>
                <p>Arrays.sort(inputArray);</p>
                <p>int largestEven = findLargestEvenNumber(inputArray);</p>
                <p>System.out.println(largestEven);</p>
                <p>}</p>
    
}
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