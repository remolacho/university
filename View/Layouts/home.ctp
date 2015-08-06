<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('bootstrap.min','banner'));
		echo $this->Html->script(array('jquery-2.1.4.min'                           ,'masks','format'
			                           ,'bootstrap.min'
			                           ,'jssor.slider.mini'
			                           ,'banner'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container"  class="container">
		<div id="header" class="page-header">
		  <?php echo $this->element('header'); ?>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>