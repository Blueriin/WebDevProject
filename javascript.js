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