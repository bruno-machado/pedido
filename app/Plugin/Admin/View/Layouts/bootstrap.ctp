<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
	?>

  	<!-- Latest compiled and minified CSS -->
  	<?php 
	  	echo $this->Html->css('bootstrap.min.css');
  	?>

  	<!-- Latest compiled and minified JavaScript -->
  	<?php 
	  	echo $this->Html->script('jquery.min.js');
	  	echo $this->Html->script('bootstrap.min.js');
  	?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      	<?php 
		  	echo $this->Html->script('html5shiv.js');
		  	echo $this->Html->script('respond.min.js');
	  	?>
    <![endif]-->
    
  	<?php 
	  	echo $this->fetch('css');
	  	echo $this->fetch('script');
  	?>
    <style type="text/css">
    	body{ padding: 70px 0px; }
    </style>

  </head>

  <body>

    <?php echo $this->Element('navigation'); ?>

    <div class="container">
			<?php echo $userLogado['username'];?>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
    </div><!-- /.container -->

  </body>
</html>
