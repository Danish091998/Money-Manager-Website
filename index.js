
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    $("#content").animate({"opacity":"0.3"});
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    $("#content").animate({"opacity":"1"});
}