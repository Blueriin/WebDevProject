function showImage(id)
{
    //document.getElementById(id).innerHTML="<img src="+imgName+">";

    document.getElementById(id).style.display = "block";
    document.getElementById(id).setAttribute("class", "menuImg mx-auto d-block");
}

function hide(id)
{
    document.getElementById(id).style.display = "none";
}

function scrollDown(id)
{
$(document).ready(function(){
    $('#button').click(function()
        {    
            $('html, body').animate({
                scrollTop: $("#"+id).offset().top},800);
        });
    });
}

function post() 
{
    var form = document.forms["connection-form"];
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.documentElement.innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("POST", "Admin.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("identifiant=" + form["identifiant"].value
            + "&mdp=" + form["mdp"].value);
}