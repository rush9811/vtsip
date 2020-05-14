<?php
include "db_config.php";

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$info = $_POST['info'];
$languages = $_POST['languages'];
$spec1=$_POST['fogtömés'];
$spec2=$_POST['fogfehérités'];
$spec3=$_POST['foghúzás'];
$spec4=$_POST['fogkő_eltávolitás'];
$spec5=$_POST['lézerfogászat'];
$spec6=$_POST['lézersebészet'];
$spec7=$_POST['szájsebészeti_műtétek'];
$spec8=$_POST['gyökérkezelés'];

$num = 0;
// checking for filled parts
if (empty($_POST['first_name'])) {
    header("Location:dentistregistration.php?p=1");
    $num++;
} else if (empty($_POST['last_name'])) {
    header("Location:dentistregistration.php?p=2");
    $num++;
} else if (empty($_POST['username'])) {
    header("Location:dentistregistration.php?p=3");
    $num++;
} else if (empty($_POST['password'])) {
    header("Location:dentistregistration.php?p=4");
    $num++;
} else if (empty($_POST['password2'])) {
    header("Location:dentistregistration.php?p=5");
    $num++;
} else if (empty($_POST['email'])) {
    header("Location:dentistregistration.php?p=6");
    $num++;
} else if (empty($_POST['phone'])) {
    header("Location:dentistregistration.php?p=7");
    $num++;
} else if (empty($_POST['address'])) {
    header("Location:dentistregistration.php?p=8");
    $num++;
} else if (empty($_POST['city'])) {
    header("Location:dentistregistration.php?p=9");
    $num++;
}
  else if (empty($_POST['info'])) {
    header("Location:dentistregistration.php?p=19");
    $num++;
}
  else if (empty($_POST['languages'])) {
      header("Location:dentistregistration.php?p=20");
      $num++;
  }
  else if (empty($_POST['fogtömés'])) {
      $spec1=0;
  }
  else if (empty($_POST['fogfehérités'])) {
      $spec2=0;
  }
  else if (empty($_POST['foghúzás'])) {
      $spec3=0;
  }
  else if (empty($_POST['fogkő_eltávolitás'])) {
      $spec4=0;
  }
  else if (empty($_POST['lézerfogászat'])) {
      $spec5=0;
  }
  else if (empty($_POST['lézersebészet'])) {
      $spec6=0;
  }
  else if (empty($_POST['szájsebészeti_műtétek'])) {
      $spec7=0;
  }
  else if (empty($_POST['gyökérkezelés'])) {
      $spec8=0;
  }

if ($num == 0) {
    define("SALT1", "wtSHSU890381IC4");
    define("SALT2", "4CITAcywut46a");
    $num = 0;
// checking other not allowed characters or statement in registration part
    if (!preg_match('/[0-9]/', $firstname) and !preg_match('/[\/^£$%&*()}{@#~?><>,|=_+¬-]/', $firstname) and preg_match('/[A-Za-z]/', $firstname)) {
        $firstname = strip_tags($firstname);
        $firstname = strtolower($firstname);
        $firstname = ucfirst($firstname);
    } else {
        header("Location:dentistregistration.php?p=10");
        $num++;
    }
    if (!preg_match('/[0-9]/', $lastname) and !preg_match('/[\/^£$%&*()}{@#~?><>,|=_+¬-]/', $lastname) and preg_match('/[A-Za-z]/', $lastname)) {
        $lastname = strip_tags($lastname);
        $lastname = strtolower($lastname);
        $lastname = ucfirst($lastname);

    } else {
        header("Location:dentistregistration.php?p=11");
        $num++;
    }
    if ((preg_match('/[0-9]/', $username) or preg_match('/[A-Za-z]/', $username)) and !preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $username)) {
        $username = strip_tags($username);
        $username = strtolower($username);

    } else {
        header("Location:dentistregistration.php?p=12");
        $num++;
    }

    if ($password == $password2 and strlen($password) >= 8) {
        $password = strip_tags($password);
        $password_temp = SALT1 . "$password" . SALT2;
        $password_decrypt = md5($password_temp);

    } else {
        header("Location:dentistregistration.php?p=13");
        $num++;
    }


    $email = strip_tags($email);


    if (preg_match('/[0-9]/', $phone) and !preg_match('/[A-Za-z]/', $phone) and !preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $phone) and strlen($phone) >= 6) {
        $phone = strip_tags($phone);

    } else {
        header("Location:dentistregistration.php?p=14");
        $num++;
    }


    $address = strip_tags($address);


    if (!preg_match('/[0-9]/', $city) and !preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $city) and preg_match('/[A-Za-z]/', $city)) {
        $city = strip_tags($city);
        $city = strtolower($city);
        $city = ucfirst($city);

    } else {
        header("Location:dentistregistration.php?p=15");
        $num++;
    }

    if ((preg_match('/[0-9]/', $info) or preg_match('/[A-Za-z]/', $info)) and !preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $info)) {
        $info = strip_tags($info);

    } else {
        header("Location:dentistregistration.php?p=21");
        $num++;
    }

    if (!preg_match('/[0-9]/', $languages) and !preg_match('/[\/^£$%&*()}{@#~?><>,|=_+¬-]/', $languages) and preg_match('/[A-Za-z]/', $languages)) {
        $languages = strip_tags($languages);
        $languages = strtolower($languages);
        $firstname = ucfirst($firstname);
    } else {
        header("Location:dentistregistration.php?p=22");
        $num++;
    }


    if ($num == 0) {
        $sql = "SELECT user_name, email FROM dentists";
        $result = $conn->query($sql);
        $num = 0;

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                if ($row["user_name"] == $username or $row['email'] == $email) {
                     header("Location:dentistregistration.php?p=16");
                    $num++;

                }
            }
        }
        // if not have errors, inserting user in to db
        if ($num == 0) {
            $sql = "INSERT INTO dentists (first_name, last_name,password,email,phone, address,city,user_name,info,languages,fogtömés,fogfehérités,foghúzás,fogkő_eltávolitás,lézerfogászat,lézersebészet,szájsebészeti_műtétek,gyökérkezelés)
VALUES ('$firstname', '$lastname','$password_decrypt','$email','$phone', '$address', '$city', '$username','$info','$languages','$spec1','$spec2','$spec3','$spec4','$spec5','$spec6','$spec7','$spec8')";

            if (mysqli_query($conn, $sql)) {
                 header("Location:dentistregistration.php?p=17");

            } else if ($num > 0) {
                 header("Location:dentistregistration.php?p=18");
            }

        }
        mysqli_close($conn);
    }
}
