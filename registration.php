<?php
include 'header.php';
?>
<div class="registration" id="particles-js">
    <div class="page-wrapper">
<<<<<<< HEAD
        <?php
        if (isset($_GET['p']))
            $p = $_GET['p'];
        else
            $p = "";

        if ($p == "1")
            echo "Firstname required!";
        if ($p == "2")
            echo "Lastname required!";
        if ($p == "3")
            echo "Username required!";
        if ($p == "4")
            echo "Password required!";
        if ($p == "5")
            echo "Verification password required!";
        if ($p == "6")
            echo "Email required!";
        if ($p == "7")
            echo "Phone required!";
        if ($p == "8")
            echo "Address required!";
        if ($p == "9")
            echo "City required!";
        if ($p == "10")
            echo "Error in firstname field!";
        if ($p == "11")
            echo "Error in Lastname field!";
        if ($p == "12")
            echo "Error in username field!";
        if ($p == "13")
            echo "Error in password field!";
        if ($p == "14")
            echo "Error in phone field!";
        if ($p == "15")
            echo "Error in city field!";
        if ($p == "16")
            echo "This email or username already exist! ";
        if ($p == "17")
            echo "<span style='color: green'>You are registered! Verify your account via email link.</span> ";
        if ($p == "18")
            echo "Something went wrong! Please try again! ";
        ?>
        <div class="registration__wrapper">
            <h2>Registration:</h2>
            <form class="registration__form" id="data" method="post" onsubmit="return CheckData()" onkeyup="CheckData2()">
                <label for="fn">First name:</label>
                <input type="text" name="fn" class="fn" id="fn" maxlength="30" size="15" placeholder="First Name" autofocus>
                <span class="error" id="errfirstname"> </span>
                <label for="ln">Last name:</label>
                <input type="text" name="ln" class="ln" id="ln" maxlength="30" size="15" placeholder="Last Name" autofocus>
                <span class="error" id="errlastname"> </span>
                <label for="username">Username:</label>
                <input type="text" name="username" class="username" id="username" maxlength="30" size="15" placeholder="Username" autofocus>
                <span class="error" id="errusername"> </span>
                <label for="password">Password:</label>
                <input type="password" name="password" class="password" id="password" minlength="8" maxlength="15" size="15" placeholder="Password" autofocus>
                <span class="error" id="errpassword"> </span>
                <label for="password2">Confirm Password:</label>
                <input type="password" name="password2" class="password2" id="password2" maxlength="15" size="15" placeholder="Confirm Password" autofocus>
                <span class="error" id="errpassword2"> </span>
                <label for="email">Email:</label>
                <input type="email" name="email" class="email" id="email" maxlength="40" size="15" placeholder="Email" autofocus>
                <span class="error" id="erremail"> </span>
                <label for="phone">Phone:</label>
                <input type="text" name="phone" class="phone" id="phone" maxlength="15" size="15" placeholder="Phone" autofocus>
                <span class="error" id="errphone"> </span>
                <label for="address">Address:</label>
                <input type="text" name="address" class="address" id="address" maxlength="40" size="15" placeholder="Address" autofocus>
                <span class="error" id="erraddress"> </span>
                <label for="city">City:</label>
                <input type="text" name="city" class="city" id="city" maxlength="30" size="15" placeholder="City" autofocus>
                <span class="error" id="errcity"> </span>
                <button type="submit" name="submit" value="Send">Send</button>
=======
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
                <label for="password">Jelszó:</label><span class="error" id="errpassword"> </span>
                <input type="password" name="password" class="password" id="password" minlength="8" maxlength="15" size="15" placeholder="Jelszó" autofocus>
                <label for="password2">Jelszó megerősitése:</label><span class="error" id="errpassword2"> </span>
                <input type="password" name="password2" class="password2" id="password2" minlength="8" maxlength="15" size="15" placeholder="Jelszó megerősitése" autofocus>
                <label for="email">Email cim:</label><span class="error" id="erremail"> </span>
                <input type="email" name="email" class="email" id="email" maxlength="40" size="15" placeholder="Email" autofocus>
                <label for="phone">Telefonszám:</label><span class="error" id="errphone"> </span>
                <input type="text" name="phone" class="phone" id="phone" minlength="6" maxlength="15" size="15" placeholder="Telefonszám" autofocus>
                <label for="address">Utcanév,Házszám:</label><span class="error" id="erraddress"> </span>
                <input type="text" name="address" class="address" id="address" maxlength="40" size="15" placeholder="Utcanév,Házszám" autofocus>
                <label for="city">Helységnév:</label><span class="error" id="errcity"> </span>
                <input type="text" name="city" class="city" id="city" maxlength="30" size="15" placeholder="Helységnév" autofocus>
                <button type="submit" name="submit" value="Send">Küld</button>
>>>>>>> dev
            </form>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>