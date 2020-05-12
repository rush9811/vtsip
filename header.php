<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header class="header">
        <div class="header__top">
            <div class="page-wrapper">
                <div class="text"> Telefonszám vagy valami faszság</div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="page-wrapper">
                <button class="nav__open"><?php echo file_get_contents("images/menu.svg"); ?></button>
                <div class="logo">
                    <a href=""><?php echo file_get_contents("images/medical.svg"); ?></a>
                </div>
                <div class="nav__wrapper">
                    <div class="nav__wrapper-inner">
                        <button class="nav__close"><?php echo file_get_contents("images/cross.svg"); ?></button>
                        <ul>
                            <?php
                            include 'nav.php'
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>