<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('bootstrap.min','home'));
		echo $this->Html->script(array('jquery-2.1.4.min.js'                           ,'masks','format','bootstrap.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php echo $this->element('header'); ?>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<?php echo $this->element('footer'); ?>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
