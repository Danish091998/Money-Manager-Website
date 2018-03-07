document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
       document.getElementById('content').style.visibility="hidden";
 
      $('html, body').css({
  'overflow': 'hidden',
  'height': '100%'
})
  } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('interactive');
          $('body').addClass('loaded');
         document.getElementById('loader-wrapper').style.visibility="hidden";
         document.getElementById('content').style.visibility="visible";
         
          $('html, body').css({
  'overflow': 'auto',
  'height': 'auto'
})
       
      },3000);
   
   
   
  }
}
 
if (window.matchMedia("(max-width: 500px)").matches) {
            document.getElementById("top-bar").style.boxShadow = "0 0 0 #333";
 
        }
 
if (window.matchMedia("(max-width: 768px)").matches) {
    /* The viewport is less than, or equal to, 700 pixels wide */
 
$( ".form-inputs" ).focus(function() {
  $("footer").hide();
});
 
$( ".form-inputs" ).focusout(function() {
  $("footer").show();
});
   
}    
 
$("#submit-button").click(function()
{
                 
        $.ajax({
          method: "POST",
          url: "form.php",
          data: { name: $("#name").val() , email: $("#email").val() , message: $("#message-box").val() }
        })
          .done(function( msg ) {
            $('#myModal').modal('show');
//            alert(msg);
            document.getElementById("modal-text").innerHTML= msg;
           
           
            if ( msg != "Please enter your Name" && msg != "Please enter your Email" && msg != "Please enter your Message" ) {
                window.location.href = "index.php";
               }
          });
 
});
 
 
$(window).scroll(function(e) {
    // Get the position of the location where the scroller starts.
    var scroller_anchor = $(".scroller_anchor").offset().top;
        var scroller_anchor2 = $(".scroller_anchor2").offset().top;
 
//     console.log("test1");
    // Check if the user has scrolled and the current position is after the scroller start location and if its not already fixed at the top
    if ($(this).scrollTop() >= scroller_anchor && $('#second-page').css('position') != 'fixed')
    {    // Change the CSS of the scroller to hilight it and fix it at the top of the screen.
        $('#second-page').css({
            'position': 'fixed',
            'top': '0px'
        });
       
        if (window.matchMedia("(max-width: 500px)").matches) {
            document.getElementById("top-bar").style.boxShadow = "1px 1px 10px #333";
 
        }
        // Changing the height of the scroller anchor to that of scroller so that there is no change in the overall height of the page.
//        $('.scroller_anchor').css('height', '50px');
    }
    else if ($(this).scrollTop() < scroller_anchor2 && $('#second-page').css('position') != 'absolute')
    {    // If the user has scrolled back to the location above the scroller anchor place it back into the content.
//        console.log("test2");
        // Change the height of the scroller anchor to 0 and now we will be adding the scroller back to the content.
//        $('.scroller_anchor').css('height', '0px');
         
        // Change the CSS and put it back to its original position.
        $('#second-page').css({
            'position': 'absolute',
            'top': '100%'
        });
        if (window.matchMedia("(max-width: 500px)").matches) {
            document.getElementById("top-bar").style.boxShadow = "0 0 0 #333";
        }
    }
});
 
 
$(window).scroll(function(e) {
    // Get the position of the location where the scroller starts.
    var scroller_anchor = $(".scroller_anchor3").offset().top;
        var scroller_anchor2 = $(".scroller_anchor4").offset().top;
 
//     console.log("test3");
    // Check if the user has scrolled and the current position is after the scroller start location and if its not already fixed at the top
    if ($(this).scrollTop() >= scroller_anchor && $('#first-page').css('position') != 'fixed')
    {    // Change the CSS of the scroller to hilight it and fix it at the top of the screen.
        $('#first-page').css({
            'position': 'fixed',
            'top': '0px'
        });
        // Changing the height of the scroller anchor to that of scroller so that there is no change in the overall height of the page.
//        $('.scroller_anchor').css('height', '50px');
    }
    else if ($(this).scrollTop() < scroller_anchor2 && $('#first-page').css('position') != 'absolute')
    {    // If the user has scrolled back to the location above the scroller anchor place it back into the content.
//        console.log("test4");
        // Change the height of the scroller anchor to 0 and now we will be adding the scroller back to the content.
//        $('.scroller_anchor').css('height', '0px');
         
        // Change the CSS and put it back to its original position.
        $('#first-page').css({
            'position': 'absolute',
            'top': '200%'
        });
    }
});
 
 
//$(window).scroll(function(e) {
//    // Get the position of the location where the scroller starts.
//    var scroller_anchor = $(".scroller_anchor5").offset().top;
//        var scroller_anchor2 = $(".scroller_anchor6").offset().top;
//
////     console.log("test3");
//    // Check if the user has scrolled and the current position is after the scroller start location and if its not already fixed at the top
//    if ($(this).scrollTop() >= scroller_anchor && $('#fourth-page,#fallback').css('position') != 'fixed')
//    {    // Change the CSS of the scroller to hilight it and fix it at the top of the screen.
//        $('#fourth-page,#fallback').css({
//            'position': 'fixed',
//            'top': '0px'
//        });
//        // Changing the height of the scroller anchor to that of scroller so that there is no change in the overall height of the page.
////        $('.scroller_anchor').css('height', '50px');
//    }
//    else if ($(this).scrollTop() < scroller_anchor2 && $('#fourth-page,#fallback').css('position') != 'absolute')
//    {    // If the user has scrolled back to the location above the scroller anchor place it back into the content.
////        console.log("test4");
//        // Change the height of the scroller anchor to 0 and now we will be adding the scroller back to the content.
////        $('.scroller_anchor').css('height', '0px');
//        
//        // Change the CSS and put it back to its original position.
//        $('#fourth-page,#fallback').css({
//            'position': 'absolute',
//            'top': '300%'
//        });
//    }
//});
//