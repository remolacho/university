<h1>Courses' list <?php echo $this->Html->link('Add', array('action' => 'add'));?></h1>
<div class="index">
  <table>
	<tbody>
	    <tr>
		  <th><?php echo $this->Paginator->sort('id');?></th>
		  <th><?php echo $this->Paginator->sort('course');?></th>
		  <th><?php echo $this->Paginator->sort('teacher');?></th>
		  <th>Actions</th>
        </tr>
        <?php foreach ($courses as $course):?>
        	<tr>
        	  <td><?php echo h($course['Course']['id']); ?></td>
	      	  <td><?php echo h($course['Course']['name']); ?></td>
			  <td><?php echo h($course['Teacher']['name']); ?></td>
			  <td><?php echo $this->Html->link('View', array('action' => 'show',$course['Course']['id']));?>
			      <?php echo $this->Html->link('Edit', array('action' => 'edit',$course['Course']['id']));?>
			      <?php echo $this->Form->postLink('Delete', array('action' => 'delete',$course['Course']['id']), array('confirm' => 'Are you sure of delete to '.$course['Course']['name'].'?'));?>
			  </td>
		    <tr>
        <?php endforeach;?>
	</tbody>
  </table>
  <?php echo $this->element('paginator');?>
</div>
