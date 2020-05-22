<?php
include 'header.php';
?>
<div class="registration" id="particles-js">
    <div class="page-wrapper">
        <div class="registration__wrapper">
            <h2>Regisztráció:</h2>
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
            ?>
            <form class="registration__form" id="data" method="post" onsubmit="return CheckData()" onkeyup="CheckData2()">
                <label for="fn">Keresztnév:</label><span class="error" id="errfirstname"> </span>
                <input type="text" name="fn" class="fn" id="fn" maxlength="30" size="15" placeholder="Keresztnév" autofocus>
                <label for="ln">Vezetéknév:</label><span class="error" id="errlastname"> </span>
                <input type="text" name="ln" class="ln" id="ln" maxlength="30" size="15" placeholder="Vezetéknév" autofocus>
                <label for="username">Felhasználónév:</label><span class="error" id="errusername"> </span>
                <input type="text" name="username" class="username" id="username" maxlength="30" size="15" placeholder="Felhasználónév" autofocus>
                <label for="password">Jelszó:</label><span class="error" id="errpassword"> </span><span class="error" id="errpasswordlength"> </span>
                <input type="password" name="password" class="password" id="password" minlength="8" maxlength="15" size="15" placeholder="Jelszó" autofocus>
                <label for="password2">Jelszó megerősitése:</label><span class="error" id="errpassword2"> </span>
                <input type="password" name="password2" class="password2" id="password2" minlength="8" maxlength="15" size="15" placeholder="Jelszó megerősitése" autofocus>
                <label for="email">Email cim:</label><span class="error" id="erremail"> </span>
                <input type="email" name="email" class="email" id="email" maxlength="40" size="15" placeholder="Email" autofocus>
                <label for="phone">Telefonszám:</label><span class="error" id="errphone"> </span><span class="error" id="errphonelength"> </span>
                <input type="text" name="phone" class="phone" id="phone" minlength="9" maxlength="15" size="15" placeholder="Telefonszám" autofocus>
                <label for="address">Utcanév,Házszám:</label><span class="error" id="erraddress"> </span>
                <input type="text" name="address" class="address" id="address" maxlength="40" size="15" placeholder="Utcanév,Házszám" autofocus>
                <label for="city">Helységnév:</label><span class="error" id="errcity"> </span>
                <input type="text" name="city" class="city" id="city" maxlength="30" size="15" placeholder="Helységnév" autofocus>
                <button type="submit" name="submit" value="Send">Küld</button>
            </form>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>