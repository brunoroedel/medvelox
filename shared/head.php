<?php 
   //$path = $_SERVER['DOCUMENT_ROOT'];
   $css = "http://localhost/medvelox/assets/stylesheets/";
   $img = "http://localhost/medvelox/assets/img/";
   $js = "http://localhost/medvelox/assets/javascripts/";
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MedVelox</title>

    

    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!--scrollable tables-->
    <script src="http://handsontable.com/dist/handsontable.full.js"></script>
    <link rel="stylesheet" media="screen" href="http://handsontable.com/dist/handsontable.full.css">
    <link rel="stylesheet" media="screen" href="<?php echo $css; ?>handsontable.bootstrap.css">

    <!-- Bootstrap -->
    <link href="<?php echo $css; ?>styles.css" rel="stylesheet" type="text/css" />
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
