<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= Flight::get('flight.base_url') ?>\public\assets\CSS\MYBOOTSTRAP\main.css">
    <link rel="stylesheet" href="<?= Flight::get('flight.base_url') ?>\public\assets\CSS\CSSPROJECT\main.css">
</head>
<body>
    <div class="display-flex width-full height-full justify-center align-center text-regular background all-White">
        <?php include($viewName. '.php') ?>
    </div>
    
    <!-- <img src="../assets\CSS\CSSPROJECT\Leonardo_Anime_XL_a_night_with_a_mount_on_the_background_3.jpg" alt="" srcset=""> -->
</body>
</html>