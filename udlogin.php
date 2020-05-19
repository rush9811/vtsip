<?php
include "db_config.php";
$username = $_POST['username'];
$password = $_POST['password'];
$num = 0;
if (empty($_POST['username'])) {
    header("Location:login.php?p=1");
    $num++;
}
else if (empty($_POST['password'])) {
    header("Location:login.php?p=2");
    $num++;
}

if($num==0) {
    define("SALT1", "wtSHSU890381IC4");
    define("SALT2", "4CITAcywut46a");
    $password_temp = SALT1 . "$password" . SALT2;
    $password_decrypt = md5($password_temp);
    $counter=0;

    if ($num == 0) {
        $sql = "SELECT user_name, password FROM users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["user_name"] == $username and $row['password'] == $password_decrypt) {
                    echo "Welcome Patient you are logged in";
                }
                else{
                    $counter++;
                }
            }
        }
    }
    if ($num == 0) {
        $sql = "SELECT user_name, password FROM dentists";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["user_name"] == $username and $row['password'] == $password_decrypt) {
                    echo "Welcome Dentist you are logged in";
                }
                else{
                    $counter++;
                }
            }
        }
    }
}
if ($counter==2){
    echo "You don't have account";
}