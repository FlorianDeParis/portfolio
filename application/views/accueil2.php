<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <?php foreach($css as $src) { echo '<link rel="stylesheet" type="text/css" href="'.$src.'">';}?>
        <?php foreach($js as $src) { echo '<script type="text/javascript" src ="'.$src.'" ></script >';}?>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <nav class="w_bubble">
            <div class="open-bubble" style="background-image: url(<?php echo base_url()."assets/img/eye-open.png" ?>)"></div>
            <div class="close-bubble"></div>
            <?php echo dyn_img('assets/img/photo.jpg','','bubble')?>
        </nav>
    </body>
</html>