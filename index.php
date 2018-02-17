<?php 

$server     = "shareddb-f.hosting.stackcp.net";
$username   = "money-manager-32369245";
$password   = "Danish@98";
$db         = "money-manager-32369245";

//Establish Connection
$conn = mysqli_connect( $server, $username, $password, $db );

//Check Connection

if(!$conn){
    die( "Connection Failed: " .mysqli_connect_error() );
}

if( isset( $_POST["send-message"] ) ) {
        
    // build a function that validates data
    function validateFormData( $formData ) {
        $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
        return $formData;
    }

    // set all variables to empty by default
    $name = $email = $message = "";
    
    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function
    
    if( !$_POST["name"] ) {
        $nameError = "Please enter your Name <br>";
    } else {
        $name = validateFormData( $_POST["name"] );
    }

    if( !$_POST["email"] ) {
        $emailError = "Please enter your email <br>";
    } else {
        $email = validateFormData( $_POST["email"] );
    }

    if( !$_POST["message"] ) {
        $messageError = "Please enter your message <br>";
    } else {
        $message = validateFormData( $_POST["message"] );
    }
    
    // check to see if each variable has data
    if( $name && $email && $message ) {
        $query = "INSERT INTO feedback (name, email, message)
        VALUES ('$name', '$email', '$message')";

        if( mysqli_query( $conn, $query ) ) {
            echo "<div class='alert alert-success'>New record in database!</div>";
        } else {
            echo "Error: ". $query . "<br>" . mysqli_error($conn);
        }
    }
    
}



mysqli_close($conn);


//echo "Connected Succesfully!";    
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Money Manager</title>
         <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
        
<!--        Bootstrap CSS-->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        
<!--    Styling CSS-->
        <link rel="stylesheet" type="text/css" href="style.css">
        
<!--    Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
<!--        Font Awesome-->
        
    <link href="fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
        
    </head>

    <body>
        
        <div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
  </div>
        
<!--
        <div id="mySidenav" class="sidenav">
                      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                      <a id="home-section" href="#home">Home</a>
                      <a id="feature-section" href="#feature">Features</a>
                      <a id="contact-section" href="#contact">Contact</a>
                      <a href="#">Support</a>
                    </div>
-->
    <div id="content">
        <div id="top-bar">
<!--            <i id="sidenav-button" class="fas fa-bars" onclick="openNav()"></i>-->
                    
                <div class="app-name-wrapper">
                    <p class="app-name">Money</p>
                    <p id="app-name-manager" class="app-name">Manager</p>
                </div>
                
        </div>
        
         <div class="scroller_anchor4"></div>
        <div id="first-page">
            <div class="scroller_anchor3"></div>
            <div id="first-page-text-wrapper">
                <p class="first-page-heading"> Present your product 
                            in beautiful way with us</p>
                <p class="first-page-text">The Apple Watch – is it any good, and should you buy one?
                                Well, it’s a distinctive piece of tech that at first can be hard to get your head around, or even to quite know what it does. In short, it’s a watch that sends notifications and other information from your iPhone to your wrist and lets you send stuff back the other way, whether that’s a text message, a phone call or a simple way to call an Uber. </p>
            </div>
        <img class="first-page-screenshot" src="Images/device-2018-02-03-201914_pixel_quite_black_portrait.png">
        
        
        </div>
                                <div class="scroller_anchor2"></div>

        <div id="second-page">
                                <div class="scroller_anchor"></div>

            <div id="second-page-text-wrapper">
                <p class="second-page-heading"> Present your product 
                            in beautiful way with us</p>
                <p class="second-page-text">The Apple Watch – is it any good, and should you buy one?
                                Well, it’s a distinctive piece of tech that at first can be hard to get your head around, or even to quite know what it does. In short, it’s a watch that sends notifications and other information from your iPhone to your wrist and lets you send stuff back the other way, whether that’s a text message, a phone call or a simple way to call an Uber. </p>
            </div>
            
            <img class="second-page-screenshot" src="Images/device-2018-02-03-201949_pixel_very_silver_portrait.png">
            
        </div>
        
            <div class="third-page-wrapper">
        <p class="third-page-heading1">Fast and Reliable</p>
        <p class="third-page-heading2">Money Management</p>
        <p class="third-page-text">With Money Manager, you'll get fast, reliable, and time saving money management. </p>
        
            </div>
        
        <div id="third-page">
<!--        <img class="image" src="Images/third-page.jpg">-->
            </div>
        <div class="scroller_anchor6"></div>
         <video autoplay muted loop id="fourth-page">
  <source src="Images/MP4/Procrastination.mp4" type="video/mp4">
</video>
         <div class="scroller_anchor5"></div>
        
            <form id="fifth-page" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
        
                <input id="adjustment-for-padding" class="form-inputs" type="text" placeholder="Name" name="name"> 
                <input class="form-inputs" type="email" placeholder="Email" name="email">
<!--                <input class="form-inputs" id="message-box" type="text" placeholder="Message" name="message"> -->
                <textarea class="form-inputs" id="message-box" placeholder="Message" name="message"></textarea>
                <center><input id="submit-button" type="submit" name="send-message" value="Send"></center>
                
            </form>
<!--
        <div id="first-page">
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="first-page-feature-heading">Present your product 
                            in beautiful way with us</p>
                            <p class="first-page-feature-text">
                                The Apple Watch – is it any good, and should you buy one?
                                Well, it’s a distinctive piece of tech that at first can be hard to get your head around, or even to quite know what it does. In short, it’s a watch that sends notifications and other information from your iPhone to your wrist and lets you send stuff back the other way, whether that’s a text message, a phone call or a simple way to call an Uber.
                            </p>
                        </div>
                        <div class="col-sm-6">
                <img class="first-page-feature-screenshot" src="Images/device-2018-02-03-201914_pixel_quite_black_portrait.png">
                        </div>
                    </div>
             </div>
         </div>
        <div id="second-page">
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="second-page-feature-heading">Present your product 
                            in beautiful way with us</p>
                            <p class="second-page-feature-text">
                                The Apple Watch – is it any good, and should you buy one?
                                Well, it’s a distinctive piece of tech that at first can be hard to get your head around, or even to quite know what it does. In short, it’s a watch that sends notifications and other information from your iPhone to your wrist and lets you send stuff back the other way, whether that’s a text message, a phone call or a simple way to call an Uber.
                            </p>
                        </div>
                        <div class="col-sm-6">
                <img class="second-page-feature-screenshot" src="Images/device-2018-02-03-201949_pixel_very_silver_portrait.png">
                        </div>
                    </div>
             </div>
         </div>
-->
        <footer>2018 &copy; KinitoApps, All rights reserved</footer>
    </div>
    </body>
    <script src="jquery-3.3.1.js"></script>
<script type="text/javascript" src="index.js"></script>
    
</html>