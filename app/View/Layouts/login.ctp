<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap/bootstrap.min');
		echo $this->Html->css('bootstrap/signin');
		
		echo $this->Html->css('jquery/smoothness/jquery-ui.min'); //CSS file for the layout of the Jquery widgets, MIN is used for MINIMUM load
		
		echo $this->Html->script('jquery/jquery-1.11.1.min'); //The Jquery Lib
		echo $this->Html->script('jquery/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.min'); //The Jquery UI Lib
		echo $this->Html->script('tinymce/js/tinymce/tinymce.min.js');
		
		echo $this->Html->script('bootstrap/bootstrap');
		echo $this->Html->script('bootstrap/docs');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		
	?>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
    
    <?php 
    	echo $this->fetch('content');
    ?>
    
    
    

     

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php
   	
   	 echo $this->fetch('script');
   ?>
  </body>
</html>
