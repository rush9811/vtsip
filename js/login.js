var $ = function (id) {
    return document.getElementById(id);
}
function CheckData1()
{

    var username = $("username").value;
    var password = $("password").value;


    if(username == "" && password  == "" && password.length < 8)
    {
        $("errusername").innerText = "Adja meg a felhasználónevét!";
        $("errusername").style.color = "#f00";
        document.querySelector(".username").style.borderColor = "#f00";
        $("errpassword").innerText = "Adja meg a jelszavát!";
        $("errpassword").style.color = "#f00";
        document.querySelector(".password").style.borderColor = "#f00";
        $("errpasswordlength").innerText = "A jelszó minimális hossza 8!";
        $("errpasswordlength").style.color = "#f00";
        document.querySelector(".password").style.borderColor = "#f00";
        return false;
    }
    if(username == "") {
        $("errusername").innerText = "Adja meg a felhasználónevét!";
        $("errusername").style.color = "red";
        document.querySelector(".username").style.borderColor = "#f00";
        return false;
    }
    else if(password == "") {
        $("errpassword").innerText = "Adja meg a jelszavát!";
        $("errpassword").style.color = "red";
        document.querySelector(".password").style.borderColor = "#f00";
        return false;
    }
    else if(password.length < 8) {
        $("errpasswordlength").innerText = "A jelszó minimális hossza 8!";
        $("errpasswordlength").style.color = "red";
        document.querySelector(".password").style.borderColor = "#f00";
        return false;
    }

    if(username != "" && password  != "" && password.length>=8 )
    {
        sendData();
        return false;
    }
}

function CheckData2()
{
    var username = $("username").value;
    var password = $("password").value;

    if(username  != "")
    {
        $("errusername").innerText = "";
        document.querySelector(".username").removeAttribute("style");
    }
    if(password  != "")
    {
        $("errpassword").innerText = "";
        document.querySelector(".password").removeAttribute("style");
    }
    if(password.length >= 8)
    {
        $("errpasswordlength").innerText = "";
        document.querySelector(".password").removeAttribute("style");
    }
}

function sendData()
{
    var xmlhttp;
    if(window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }

    xmlhttp.onreadystatechange = function () {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.querySelector("html").innerHTML = xmlhttp.responseText;
        }
    };
    var username = $("username").value;
    var password = $("password").value;
    xmlhttp.open("POST","udlogin.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("username="+username+"&password="+password);
}
