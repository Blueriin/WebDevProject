function showImage(url)
{
    window.open(url);
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