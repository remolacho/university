<h1>students' list <?php echo $this->Html->link('Add', array('action' => 'add'));?></th></h1>
<pre>
<table>
	<tbody>
		<th>Id</th>
		<th>Name</th>
		<th>Last Name</th>
		<th>Address</th>
		<th>Actions</th>
		<?php foreach ($students as $student):?>
      	  <tr>
	      	  <td><?php echo $student['Student']['id']; ?></td>
			  <td><?php echo $student['Student']['name']; ?></td>
			  <td><?php echo $student['Student']['last_name']; ?></td>
			  <td><?php echo $student['Student']['address']; ?></td>
			  <td><?php echo $this->Html->link('Edit', array('action' => 'edit',$student['Student']['id']));?>
			      <?php echo $this->Form->postLink('Delete', array('action' => 'delete',$student['Student']['id']), array('confirm' => 'Are you sure of delete to '.$student['Student']['name']. ' '.$student['Student']['last_name'].'?'));?>
			  </td>
	      </tr>
	    <?php endforeach;?>
	</tbody>
</table>
</pre>