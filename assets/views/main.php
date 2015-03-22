<!DOCTYPE html>
<html lang="en">
    <head>                
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>СибНГП</title>
        <link href="components/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="components/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="sibngp.css" rel="stylesheet">
        <link href="assets/slick/slick.css" rel="stylesheet">
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />     
        <script src="components/jquery/jquery.min.js"></script>
        <script src="components/bootstrap/js/bootstrap.min.js"></script>       
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script src="assets/slick/slick.min.js"></script>
    </head>
    <body>
        <section id="main" class="container">
            <!-- Here is where we include a subtemplate -->
            <?php include($subview.'.php');?>
        </section>
    </body>
</html>