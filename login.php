<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<script src="js/login.js"></script>
<body>
<?php
if (isset($_GET['p']))
    $p = $_GET['p'];
else
    $p = "";

if ($p == "1")
    echo "<span style='color: red'>Adja meg a Felhasználónevét!</span>";
if ($p == "2")
    echo "<span style='color: red'>Adja meg a Jelszavát!</span>";
?>
<form id="data" method="post" onsubmit="return CheckData1()" onkeyup="CheckData2()">
    <h2>Bejelentkezés</h2>
    <label for="username">Felhasználónév:</label>
    <input type="text" name="username" class="username"  id="username" maxlength="30" size="15" placeholder="Felhasználónév" autofocus>
    <span class="error" id="errusername"> </span> <br><br>
    <label for="password">Jelszó:</label>
    <input type="password" name="password" class="password" id="password" minlength="8" maxlength="15" size="15" placeholder="Jelszó" autofocus>
    <span class="error" id="errpassword"> </span>
    <span class="error" id="errpasswordlength"> </span><br><br>
    <button type="submit" name="submit" value="Send">Küld</button>
</form>
</body>
</html>