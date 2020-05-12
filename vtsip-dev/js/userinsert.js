var $ = function (id) {
    return document.getElementById(id);
}
//Beviteli mezők ellenörzése hogy ki vannak-e töltve
function CheckData()
{
    var first_name = $("fn").value;
    var last_name = $("ln").value;
    var username = $("username").value;
    var password = $("password").value;
    var password2 = $("password2").value;
    var email = $("email").value;
    var phone = $("phone").value;
    var address = $("address").value;
    var city = $("city").value;

    if(first_name == "" && last_name == ""  && username == "" && password  == "" && password2 == "" && email == ""
        && phone == "" && address == "" && city == "")
    {
        $("errfirstname").innerText = "Add your first name";
        $("errfirstname").style.color = "#f00";
        document.querySelector(".fn").style.borderColor = "#f00";
        $("errlastname").innerText = "Add your last name";
        $("errlastname").style.color = "#f00";
        document.querySelector(".ln").style.borderColor = "#f00";
        $("errusername").innerText = "Add your username";
        $("errusername").style.color = "#f00";
        document.querySelector(".username").style.borderColor = "#f00";
        $("errpassword").innerText = "Add your password";
        $("errpassword").style.color = "#f00";
        document.querySelector(".password").style.borderColor = "#f00";
        $("errpassword2").innerText = "Confirme your password";
        $("errpassword2").style.color = "#f00";
        document.querySelector(".password2").style.borderColor = "#f00";
        $("erremail").innerText = "Add your email";
        $("erremail").style.color = "#f00";
        document.querySelector(".email").style.borderColor = "#f00";
        $("errphone").innerText = "Add your phone number";
        $("errphone").style.color = "#f00";
        document.querySelector(".phone").style.borderColor = "#f00";
        $("erraddress").innerText = "Add your address";
        $("erraddress").style.color = "#f00";
        document.querySelector(".address").style.borderColor = "#f00";
        $("errcity").innerText = "Add your city";
        $("errcity").style.color = "#f00";
        document.querySelector(".city").style.borderColor = "#f00";
        return false;
    }
    if(first_name == "") {
        $("errfirstname").innerText = "Add your first name";
        $("errfirstname").style.color = "red";
        document.querySelector(".fn").style.borderColor = "#f00";
        return false;
    }
    else if(last_name == "") {
        $("errlastname").innerText = "Add your last name";
        $("errlastname").style.color = "red";
        document.querySelector(".ln").style.borderColor = "#f00";
        return false;
    }
    else if(username == "") {
        $("errusername").innerText = "Add your username";
        $("errusername").style.color = "red";
        document.querySelector(".username").style.borderColor = "#f00";
        return false;
    }
    else if(password == "") {
        $("errpassword").innerText = "Add your password";
        $("errpassword").style.color = "red";
        document.querySelector(".password").style.borderColor = "#f00";
        return false;
    }
    else if(password2 == "") {
        $("errpassword2").innerText = "Confirme your password";
        $("errpassword2").style.color = "red";
        document.querySelector(".password2").style.borderColor = "#f00";
        return false;
    }
    else if(email == "") {
        $("erremail").innerText = "Add your email";
        $("erremail").style.color = "red";
        document.querySelector(".email").style.borderColor = "#f00";
        return false;
    }
    else if(phone == "") {
        $("errphone").innerText = "Add your phone number";
        $("errphone").style.color = "red";
        document.querySelector(".phone").style.borderColor = "#f00";
        return false;
    }
    else if(address == "") {
        $("erraddress").innerText = "Add your address";
        $("erraddress").style.color = "red";
        document.querySelector(".address").style.borderColor = "#f00";
        return false;
    }
    else if(city == "") {
        $("errcity").innerText = "Add your city";
        $("errcity").style.color = "red";
        document.querySelector(".city").style.borderColor = "#f00";
        return false;
    }


    if(first_name != "" && last_name != ""  && username != "" && password  != "" && password2 != "" && email != ""
        && phone != "" && address != "" && city != "")
    {
        sendData();
        return false;
    }
}


function CheckData2()
{
    var first_name = $("fn").value;
    var last_name = $("ln").value;
    var username = $("username").value;
    var password = $("password").value;
    var password2 = $("password2").value;
    var email = $("email").value;
    var phone = $("phone").value;
    var address = $("address").value;
    var city = $("city").value;


    if(first_name != "")
    {
        $("errfirstname").innerText = "";
        document.querySelector(".fn").removeAttribute("style");

    }
    if(last_name  != "")
    {
        $("errlastname").innerText = "";
        document.querySelector(".ln").removeAttribute("style");
    }
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
    if(password2  != "")
    {
        $("errpassword2").innerText = "";
        document.querySelector(".password2").removeAttribute("style");
    }
    if(email  != "")
    {
        $("erremail").innerText = "";
        document.querySelector(".email").removeAttribute("style");
    }
    if(phone  != "")
    {
        $("errphone").innerText = "";
        document.querySelector(".phone").removeAttribute("style");
    }
    if(address  != "")
    {
        $("erraddress").innerText = "";
        document.querySelector(".address").removeAttribute("style");
    }
    if(city  != "")
    {
        $("errcity").innerText = "";
        document.querySelector(".city").removeAttribute("style");
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

    var first_name = $("fn").value;
    var last_name = $("ln").value;
    var username = $("username").value;
    var password = $("password").value;
    var password2 = $("password2").value;
    var email = $("email").value;
    var phone = $("phone").value;
    var address = $("address").value;
    var city = $("city").value;


    xmlhttp.open("POST","userinsert.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("first_name="+first_name+"&last_name="+last_name+"&username="+username+"&password="+password+"&password2="+password2+"&email="+email+"&phone="+phone+"&address="+address+"&city="+city);
}