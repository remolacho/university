<h1><?php echo $this->Html->link("Courses' List", array('action' => 'index')); ?> | Add Course</h1>
<p>
  <?php echo $this->Form->label("ID: ".$course["Course"]["id"]); ?>
  <?php echo $this->Form->label("Name: ".$course["Course"]["name"]); ?>
  <?php echo $this->Form->label("Teacher: ".$course["Teacher"]["name"]); ?>
  <p>
    <?php echo $this->Form->label("Description:"); ?>
    <?php echo $course["Course"]["description"]; ?>
  </p>
</p>
<h1><?php echo $this->Html->link('Edit', array('action' => 'edit',$course['Course']['id']));?></h1>