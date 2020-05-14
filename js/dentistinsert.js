var $ = function (id) {
    return document.getElementById(id);
}
//Beviteli mezők ellenörzése hogy ki vannak-e töltve
function CheckData3()
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
    var info = $("info").value;
    var languages = $("languages").value;
    var spec1=$("spec1").value;
    var spec2=$("spec2").value;
    var spec3=$("spec3").value;
    var spec4=$("spec4").value;
    var spec5=$("spec5").value;
    var spec6=$("spec6").value;
    var spec7=$("spec7").value;
    var spec8=$("spec8").value;

    if(first_name == "" && last_name == ""  && username == "" && password  == "" && password2 == "" && email == ""
        && phone == "" && address == "" && city == "" && info == "" && languages == "")
    {
        $("errfirstname").innerText = "Adja meg a Keresztnevét!";
        $("errfirstname").style.color = "#f00";
        document.querySelector(".fn").style.borderColor = "#f00";
        $("errlastname").innerText = "Adja meg a Vezetéknevét!";
        $("errlastname").style.color = "#f00";
        document.querySelector(".ln").style.borderColor = "#f00";
        $("errusername").innerText = "Adja meg a felhasználónevét!";
        $("errusername").style.color = "#f00";
        document.querySelector(".username").style.borderColor = "#f00";
        $("errpassword").innerText = "Adja meg a jelszavát!";
        $("errpassword").style.color = "#f00";
        document.querySelector(".password").style.borderColor = "#f00";
        $("errpassword2").innerText = "Adja meg a jelszavát mégegyszer!";
        $("errpassword2").style.color = "#f00";
        document.querySelector(".password2").style.borderColor = "#f00";
        $("erremail").innerText = "Adja meg az email cimét!";
        $("erremail").style.color = "#f00";
        document.querySelector(".email").style.borderColor = "#f00";
        $("errphone").innerText = "Adja meg a telefonszámát!";
        $("errphone").style.color = "#f00";
        document.querySelector(".phone").style.borderColor = "#f00";
        $("erraddress").innerText = "Adja meg a cimét!";
        $("erraddress").style.color = "#f00";
        document.querySelector(".address").style.borderColor = "#f00";
        $("errcity").innerText = "Adja meg a helysége nevét ahol lakik!";
        $("errcity").style.color = "#f00";
        document.querySelector(".city").style.borderColor = "#f00";
        $("errinfo").innerText = "Adjon meg pár infót magáról(pld tanulmányok,tapasztalat)!";
        $("errinfo").style.color = "#f00";
        document.querySelector(".info").style.borderColor = "#f00";
        $("errlanguages").innerText = "Adja meg a beszélt nyelveit!";
        $("errlanguages").style.color = "#f00";
        document.querySelector(".languages").style.borderColor = "#f00";
        return false;
    }
    if(first_name == "") {
        $("errfirstname").innerText = "Adja meg a Keresztnevét!";
        $("errfirstname").style.color = "red";
        document.querySelector(".fn").style.borderColor = "#f00";
        return false;
    }
    else if(last_name == "") {
        $("errlastname").innerText = "Adja meg a Vezetéknevét!";
        $("errlastname").style.color = "red";
        document.querySelector(".ln").style.borderColor = "#f00";
        return false;
    }
    else if(username == "") {
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
    else if(password2 == "") {
        $("errpassword2").innerText = "Adja meg a jelszavát mégegyszer!";
        $("errpassword2").style.color = "red";
        document.querySelector(".password2").style.borderColor = "#f00";
        return false;
    }
    else if(email == "") {
        $("erremail").innerText = "Adja meg az email cimét!";
        $("erremail").style.color = "red";
        document.querySelector(".email").style.borderColor = "#f00";
        return false;
    }
    else if(phone == "") {
        $("errphone").innerText = "Adja meg a telefonszámát!";
        $("errphone").style.color = "red";
        document.querySelector(".phone").style.borderColor = "#f00";
        return false;
    }
    else if(address == "") {
        $("erraddress").innerText = "Adja meg a cimét!";
        $("erraddress").style.color = "red";
        document.querySelector(".address").style.borderColor = "#f00";
        return false;
    }
    else if(city == "") {
        $("errcity").innerText = "Adja meg a helysége nevét ahol lakik!";
        $("errcity").style.color = "red";
        document.querySelector(".city").style.borderColor = "#f00";
        return false;
    }
    else if(info == "") {
        $("errinfo").innerText = "Adjon meg pár infót magáról(pld tanulmányok,tapasztalat)!";
        $("errinfo").style.color = "#f00";
        document.querySelector(".info").style.borderColor = "#f00";
        return false;
    }
    else if(languages == "") {
        $("errlanguages").innerText = "Adja meg a beszélt nyelveit!";
        $("errlanguages").style.color = "#f00";
        document.querySelector(".languages").style.borderColor = "#f00";
        return false;
    }



    if(first_name != "" && last_name != ""  && username != "" && password  != "" && password2 != "" && email != ""
        && phone != "" && address != "" && city != "" && info != "" && languages != "")
    {
        sendData();
        return false;
    }
}


function CheckData4()
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
    var info = $("info").value;
    var languages = $("languages").value;

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
    if(info != "")
    {
        $("errinfo").innerText = "";
        document.querySelector(".info").removeAttribute("style");

    }
    if(languages != "")
    {
        $("errlanguages").innerText = "";
        document.querySelector(".languages").removeAttribute("style");

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
    var info = $("info").value;
    var languages = $("languages").value;
    var spec1=$("spec1").value;
    var spec2=$("spec2").value;
    var spec3=$("spec3").value;
    var spec4=$("spec4").value;
    var spec5=$("spec5").value;
    var spec6=$("spec6").value;
    var spec7=$("spec7").value;
    var spec8=$("spec8").value;


    xmlhttp.open("POST","dentistinsert.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("first_name="+first_name+"&last_name="+last_name+"&username="+username+"&password="+password+"&password2="+password2+"&email="+email+"&phone="+phone+"&address="+address+"&city="+city+"&info="+info+"&languages="+languages+"&fogtömés="+spec1+
        "&fogfehérités="+spec2+"&foghúzás="+spec3+"&fogkő_eltávolitás="+spec4+"&lézerfogászat="+spec5+"&lézersebészet="+spec6+"&szájsebészeti_műtétek="+spec7+"&gyökérkezelés="+spec8);
}