<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="..\assets\CSS\MYBOOTSTRAP\main.css">
    <link rel="stylesheet" href="..\assets\CSS\CSSPROJECT\main.css">
</head>
<body>
    <div class="display-flex width-full height-full back_light-grey">
        <?php
            include ($viewMenu. '.php');
        ?>
        <?php 
            include ($viewName.'.php');
        ?>
    </div>
</body>
</html>

