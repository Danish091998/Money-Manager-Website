
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
        
        <video autoplay muted loop id="third-page">
             <source src="Images/MP4/Procrastination.mp4"> 
             <source src="Images/WEBM/Procrastination.webm" type="video/webm"> 
             <source src="Images/OGV/Procrastination.ogv" type="video/ogg">
        </video>
        <div id="fallback-home-page"> </div>
        
        
            <form id="fifth-page" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
        
                <input id="name" class="form-inputs" type="text" placeholder="Name" name="name"> 
                <input id="email" class="form-inputs" type="email" placeholder="Email" name="email">

                <textarea class="form-inputs" id="message-box" placeholder="Message" name="message"></textarea>
                <center><input id="submit-button" type="button" name="send-message" value="Send"></center>
            
                
            </form>
        
        <div id="myModal" class="modal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <p id="modal-text"></p>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        <footer>2018 &copy; KinitoApps, All rights reserved</footer>
    </div>
        
        <script src="jquery-3.3.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="index.js"></script>
        
    
    </body>
    
    
</html>