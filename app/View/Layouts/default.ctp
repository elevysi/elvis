<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title><?php  echo $title_for_layout; ?></title>

    <!-- Bootstrap core CSS -->
    <?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap/bootstrap.min');
		echo $this->Html->css('bootstrap/navbar');
		echo $this->Html->css('bootstrap/dashboard');
		
		echo $this->Html->css('jquery/smoothness/jquery-ui.min'); //CSS file for the layout of the Jquery widgets, MIN is used for MINIMUM load
		
		echo $this->Html->script('jquery/jquery-1.11.1.min'); //The Jquery Lib
		echo $this->Html->script('jquery/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.min'); //The Jquery UI Lib
		echo $this->Html->script('tinymce/js/tinymce/tinymce.min.js');
		
		echo $this->Html->script('bootstrap/bootstrap');
		echo $this->Html->script('bootstrap/docs');
		echo $this->Html->script('bootstrap/bootstrap');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		
	?>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>

    
    
      <div class="row">
        <?php  echo $this->fetch('actions_left'); ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <?php echo $this->Session->flash(); ?>
          <?php  echo $this->fetch('content'); ?>
        </div>
      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php
    
	    echo $this->Html->script('bootstrap/bootstrap-transition.js');
	    echo $this->Html->script('bootstrap/bootstrap-alert.js');
	    echo $this->Html->script('bootstrap/bootstrap-modal.js');
	    echo $this->Html->script('bootstrap/bootstrap-dropdown.js');
	    echo $this->Html->script('bootstrap/bootstrap-scrollspy.js');
	    echo $this->Html->script('bootstrap/bootstrap-tab.js');
	    echo $this->Html->script('bootstrap/bootstrap-tooltip.js');
	    echo $this->Html->script('bootstrap/bootstrap-popover.js');
	    echo $this->Html->script('bootstrap/bootstrap-button.js');
	    echo $this->Html->script('bootstrap/bootstrap-collapse.js');
	    echo $this->Html->script('bootstrap/bootstrap-carousel.js');
	    echo $this->Html->script('bootstrap/bootstrap-typeahead.js');
	    echo $this->Html->script('bootstrap/holder.js');
	     
	   	
	   	 echo $this->fetch('script');
   ?>
  </body>
</html>
