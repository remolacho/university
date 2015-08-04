<h1>Menu</h1>
<div>
	<ul>
      <li><?php echo $this->Html->link("Students", array('controller' => 'Students', 'action' => 'index')); ?></li>
      <li><?php echo $this->Html->link("Teachers", array('controller' => 'Teachers', 'action' => 'index')); ?></li>
      <li><?php echo $this->Html->link("Courses", array('controller' => 'Courses', 'action' => 'index')); ?></li>
	</ul>
</div>