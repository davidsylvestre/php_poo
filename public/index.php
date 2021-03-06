<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../favicon.ico">
      <title>PHP Foundation</title>
      <!-- Bootstrap core CSS -->
      <link href="asset/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="asset/css/sticky-footer-navbar.css" rel="stylesheet">
      <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
      <!--[if lt IE 9]><script src="asset/js/ie8-responsive-file-warning.js"></script><![endif]-->
      <script src="asset/js/ie-emulation-modes-warning.js"></script>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
       <!-- Bootstrap core JavaScript
         ================================================== -->
       <!-- Placed at the end of the document so the pages load faster -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
       <script src="asset/js/bootstrap.min.js"></script>
       <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
       <script src="asset/js/ie10-viewport-bug-workaround.js"></script>
       <script src="asset/js/jquery.tablesorter.min.js"></script>
   </head>
   <body>
      <!-- Fixed navbar -->
      <?php
         require_once('../view/menu.html');
      ?>
      <!-- Begin page content -->
      <div class="container">

         <?php
            require_once('../init.php');
            $getPage();
         ?>
      </div>
      <footer class="footer">
         <div class="container">
            <p class="text-muted"><?php require_once('../view/rodape.view.php'); ?></p>
         </div>
      </footer>

   </body>
</html>