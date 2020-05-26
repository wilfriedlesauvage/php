<?php
$gender = 'Homme';
?>
        
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exo 3 PHP - Conditions</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>


        <?php
                if ($gender != "Homme"){
                ?>
                    <p> <?php echo "C'est une développeuse !!!";?> </p>
                <?php
                }
                else {
                ?>
                    <p> <?php echo "C'est un développeur !!!";?> </p>
                <?php
                }
        ?>


    </body>
</html>





