<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title_for_layout; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800' rel='stylesheet' type='text/css'>
<?php echo $this->Html->css(array('bootstrap.min.css', 'css.css')); ?>
<?php echo $this->Html->css(array('style.css', 'css.css')); ?>
<?php echo $this->Html->css(array('jquery.selectbox.css', 'css.css')); ?>
<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<!--[if lt IE 9]><?php echo $this->Html->script(array('html5shiv.js', 'respond.min.js')); ?><![endif]-->
<?php echo $this->Html->script(array('jquery-1.7.2.min.js', 'js.js')); ?>
<?php echo $this->Html->script(array('bootstrap.min.js', 'js.js')); ?>
<?php echo $this->Html->script(array('jquery.selectbox-0.2.js', 'js.js')); ?>
<?php echo $this->App->js(); ?>
<?php echo $this->fetch('meta'); ?>
<?php echo $this->fetch('css'); ?>
<?php echo $this->fetch('script'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<?php if($this->Session->check('Shop')) : ?>
<script type="text/javascript">
$(document).ready(function(){
	$('#cartbutton').show();
});
</script>
<?php endif; ?>
</head>
<body>

	<div class="navbar navbar-inverse navbar-static-top topo" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo $this->Html->url('/'); ?>">
					<img alt="" title="Pedidos Online" src="<?php echo $this->Html->url('/'); ?>img/logo_topo.gif">
				</a>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><?php echo $this->Html->link('Página Inicial', array('controller' => 'products', 'action' => 'view')); ?></li>
					<li><?php echo $this->Html->link('Quem Somos', array('controller' => 'quem-somos')); ?></li>
					<li><?php echo $this->Html->link('Bares e Restaurantes', array('controller' => 'quem-somos')); ?></li>
					<li><?php echo $this->Html->link('Buscar', array('controller' => 'quem-somos'));  ?></li>
					<li><?php echo $this->Html->link('Fale Conosco', array('controller' => 'fale-conosco')); ?></li>
				</ul>
					<ul class="navbar-form form-inline navbar-right">
					<?php echo $this->Form->create('Product', array('type' => 'GET', 'url' => array('controller' => 'products', 'action' => 'search'))); ?>

					<span id="cartbutton" style="display:none;">
					<?php echo $this->Html->link('Seus Produtos', array('controller' => 'shop', 'action' => 'cart'), array('class' => 'btn btn-sm btn-success')); ?>
					</span>
					<?php echo $this->Form->end(); ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="content <?php echo $this->params['controller'].$this->params['action']; ?>">
		<div class="container <?php echo $this->params['controller'].$this->params['action']; ?>">

			<?php echo $this->Session->flash(); ?>
			<?php 
			 if("cidadesindex"!=$this->params['controller'].$this->params['action']){ ?>
				<ul class="breadcrumb">
					<?php echo $this->Html->link('Home', array('controller' => 'products', 'action' => 'index')); ?> / <?php echo $this->Html->getCrumbs(' / '); ?>
				</ul>
			<?php  } ?>

			<?php echo $this->fetch('content'); ?>
			<br />
			<div id="msg"></div>
			<br />

		</div>
	</div>

	<div class="footer cleafix">
		<div class="conteudo-rodape">
			<a href="<?php echo $this->Html->url('/'); ?>">
				<img alt="" title="Pedidos Online" src="<?php echo $this->Html->url('/'); ?>img/logo_rodape.gif">
			</a>
			<a href="#" class="contato-rodape">
				contato@pedidoonline.com.br
			</a>
			<span class="todos-direitos">Pedido Online - Todos os direitos reservados - 2014</span>
		</div>
	</div>

	<div class="sqldump">
		<?php echo $this->element('sql_dump'); ?>
	</div>

</body>
</html>
