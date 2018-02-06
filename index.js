
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    $("#content").animate({"opacity":"0.3"});
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    $("#content").animate({"opacity":"1"});
}

$(window).scroll(function(e) {
    // Get the position of the location where the scroller starts.
    var scroller_anchor = $(".scroller_anchor").offset().top;
        var scroller_anchor2 = $(".scroller_anchor2").offset().top;

     console.log("test1");
    // Check if the user has scrolled and the current position is after the scroller start location and if its not already fixed at the top 
    if ($(this).scrollTop() >= scroller_anchor && $('#second-page').css('position') != 'fixed') 
    {    // Change the CSS of the scroller to hilight it and fix it at the top of the screen.
        $('#second-page').css({
            'position': 'fixed',
            'top': '0px'
        });
        // Changing the height of the scroller anchor to that of scroller so that there is no change in the overall height of the page.
//        $('.scroller_anchor').css('height', '50px');
    } 
    else if ($(this).scrollTop() < scroller_anchor2 && $('#second-page').css('position') != 'absolute') 
    {    // If the user has scrolled back to the location above the scroller anchor place it back into the content.
        console.log("test2");
        // Change the height of the scroller anchor to 0 and now we will be adding the scroller back to the content.
//        $('.scroller_anchor').css('height', '0px');
         
        // Change the CSS and put it back to its original position.
        $('#second-page').css({
            'position': 'absolute',
            'top': '100%'
        });
    }
});


$(window).scroll(function(e) {
    // Get the position of the location where the scroller starts.
    var scroller_anchor = $(".scroller_anchor3").offset().top;
        var scroller_anchor2 = $(".scroller_anchor4").offset().top;

     console.log("test3");
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
        console.log("test4");
        // Change the height of the scroller anchor to 0 and now we will be adding the scroller back to the content.
//        $('.scroller_anchor').css('height', '0px');
         
        // Change the CSS and put it back to its original position.
        $('#first-page').css({
            'position': 'absolute',
            'top': '200%'
        });
    }
});