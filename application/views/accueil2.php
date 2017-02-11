<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <?php foreach($css as $src) { echo '<link rel="stylesheet" type="text/css" href="'.$src.'">';}?>
        <?php foreach($js as $src) { echo '<script type="text/javascript" src ="'.$src.'" ></script >';}?>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <nav class="bubble"><?php echo dyn_img('assets/img/photo.jpg','','bubble')?></nav>
    </body>
</html>