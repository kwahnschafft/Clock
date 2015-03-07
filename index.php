<!DOCTYPE html>
    <html>
        <head>
            <?php require "logic.php"; ?>
            <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" type="text/css" href="style.css">
            <title><?php echo $title; ?></title>
          
        </head>
        
        <body id="<?php echo $backColor;?>">
            <div id="total">
                <img id="pic" src="<?php echo $image;?>"/>
                <div id="time"><?php echo $today;?></div>
            </div>
        </body>
        
    </html>