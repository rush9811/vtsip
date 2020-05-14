<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oldal</title>
</head>
<script src="js/dentistinsert.js"></script>
<body>
<?php
if (isset($_GET['p']))
    $p = $_GET['p'];
else
    $p = "";

if ($p == "1")
    echo "<span style='color: red'>Adja meg a Keresztnevét!</span>";
if ($p == "2")
    echo "<span style='color: red'>Adja meg a Vezetéknevét!</span>";
if ($p == "3")
    echo "<span style='color: red'>Adja meg a felhasználónevét!</span>";
if ($p == "4")
    echo "<span style='color: red'>Adja meg a jelszavát!</span>";
if ($p == "5")
    echo "<span style='color: red'>Adja meg a jelszavát mégegyszer!</span>";
if ($p == "6")
    echo "<span style='color: red'>Adja meg az email cimét!</span>";
if ($p == "7")
    echo "<span style='color: red'>Adja meg a telefonszámát!</span>";
if ($p == "8")
    echo "<span style='color: red'>Adja meg a cimét!</span>";
if ($p == "9")
    echo "<span style='color: red'>Adja meg a helysége nevét ahol lakik!</span>";
if ($p == "10")
    echo "<span style='color: red'>Ne használjon speciális karaktereket és számokat a Keresztnevében!</span>";
if ($p == "11")
    echo "<span style='color: red'>Ne használjon speciális karaktereket és számokat a Vezetéknevében!</span>";
if ($p == "12")
    echo "<span style='color: red'>Ne használjon speciális karaktereket a felhasználónevében!</span>";
if ($p == "13")
    echo "<span style='color: red'>A megadott két jelszó nem egyezik meg!</span>";
if ($p == "14")
    echo "<span style='color: red'>Ne használjon speciális karaktereket és betűket a telefonszámban!</span>";
if ($p == "15")
    echo "<span style='color: red'>Ne használjon speciális karaktereket és számokat a helységnévben!</span>";
if ($p == "16")
    echo "<span style='color: red'>A megadott email cim vagy felhasználónév már létezik!</span>";
if ($p == "17")
    echo "<span style='color: green'>A regisztráció sikeres!</span> ";
if ($p == "18")
    echo "<span style='color: red'>Hiba történt az adatok bevitelekor!</span>";
if ($p == "19")
    echo "<span style='color: red'>Adjon meg pár infót magáról(pld tanulmányok,tapasztalat)!</span>";
if ($p == "20")
    echo "<span style='color: red'>Adja meg a beszélt nyelveit!</span>";
if ($p == "21")
    echo "<span style='color: red'>Ne használjon speciális karaktereket az infó mezőben!</span>";
if ($p == "22")
    echo "<span style='color: red'>Ne használjon speciális karaktereket és számokat a nyelvek mezőben!</span>";
?>

<form id="data" method="post" onsubmit="return CheckData3()" onkeyup="CheckData4()">
    <h2>Regisztráció:</h2>
    <label for="fn">Keresztnév:</label>
    <input type="text" name="fn" class="fn" id="fn" maxlength="30" size="15" placeholder="Keresztnév" autofocus>
    <span class="error" id="errfirstname"> </span>
    <br><br>
    <label for="ln">Vezetéknév:</label>
    <input type="text" name="ln" class="ln"  id="ln" maxlength="30" size="15" placeholder="Vezetéknév" autofocus>
    <span class="error" id="errlastname"> </span>
    <br><br>
    <label for="username">Felhasználónév:</label>
    <input type="text" name="username" class="username"  id="username" maxlength="30" size="15" placeholder="Felhasználónév" autofocus>
    <span class="error" id="errusername"> </span>
    <br><br>
    <label for="password">Jelszó:</label>
    <input type="password" name="password" class="password" id="password" minlength="8" maxlength="15" size="15" placeholder="Jelszó" autofocus>
    <span class="error" id="errpassword"> </span>
    <br><br>
    <label for="password2">Jelszó megerősitése:</label>
    <input type="password" name="password2" class="password2" id="password2" minlength="8" maxlength="15" size="15" placeholder="Jelszó megerősitése" autofocus>
    <span class="error" id="errpassword2"> </span>
    <br><br>
    <label for="email">Email cim:</label>
    <input type="email" name="email" class="email" id="email"  maxlength="40" size="15" placeholder="Email" autofocus>
    <span class="error" id="erremail"> </span>
    <br><br>
    <label for="phone">Telefonszám:</label>
    <input type="text" name="phone" class="phone"  id="phone" minlength="6" maxlength="15" size="15" placeholder="Telefonszám" autofocus>
    <span class="error" id="errphone"> </span>
    <br><br>
    <label for="address">Utcanév,Házszám:</label>
    <input type="text" name="address" class="address"  id="address" maxlength="40" size="15" placeholder="Utcanév,Házszám" autofocus>
    <span class="error" id="erraddress"> </span>
    <br><br>
    <label for="city">Helységnév:</label>
    <input type="text" name="city" class="city"  id="city" maxlength="30" size="15" placeholder="Helységnév" autofocus>
    <span class="error" id="errcity"> </span>
    <br><br>
    <label for="info">Info:</label><br>
    <textarea id="info" class="info" rows="4" cols="50"></textarea><br>
    <span class="error" id="errinfo"> </span><br><br>
    <label for="languages">Beszélt nyelvek:</label>
    <input type="text" name="languages" class="languages"  id="languages" maxlength="20" size="15" placeholder="Beszélt nyelvek" autofocus>
    <span class="error" id="errlanguages"> </span><br><br>
    <label for="spec1">Fogtömés:</label>
    <input type="checkbox" id="spec1" name="fogtömés" value="1"><br><br>
    <label for="spec2">Fogfehérités:</label>
    <input type="checkbox" id="spec2" name="fogfehérités" value="1"><br><br>
    <label for="spec3">Foghúzás:</label>
    <input type="checkbox" id="spec3" name="foghúzás" value="1"><br><br>
    <label for="spec4">Fogkő eltávolitás:</label>
    <input type="checkbox" id="spec4" name="fogkő_eltávolitás" value="1"><br><br>
    <label for="spec5">Lézerfogászat:</label>
    <input type="checkbox" id="spec5" name="lézerfogászat" value="1"><br><br>
    <label for="spec6">Lézersebészet:</label>
    <input type="checkbox" id="spec6" name="lézersebészet" value="1"><br><br>
    <label for="spec6">Szájsebészeti műtétek:</label>
    <input type="checkbox" id="spec7" name="szájsebészeti_műtétek" value="1"><br><br>
    <label for="spec7">Gyökérkezelés:</label>
    <input type="checkbox" id="spec8" name="gyökérkezelés" value="1"><br><br>
    <button type="submit" name="submit" value="Send">Küld</button>
</form>
</body>
</html>