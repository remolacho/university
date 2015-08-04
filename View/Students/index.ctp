<h1>students' list <?php echo $this->Html->link('Add', array('action' => 'add'));?></h1>
<div class="index">
	<table>
		<tbody>
			  <th><?php echo $this->Paginator->sort('id');?></th>
			  <th><?php echo $this->Paginator->sort('document_identity');?></th>
			  <th><?php echo $this->Paginator->sort('name');?></th>
			  <th><?php echo $this->Paginator->sort('last_name');?></th>
			  <th><?php echo $this->Paginator->sort('email');?></th>
			  <th><?php echo $this->Paginator->sort('age');?></th>
			  <th><?php echo $this->Paginator->sort('phone');?></th>
			<th>Actions</th>
			<?php foreach ($students as $student):?>
	      	  <tr>
		      	  <td><?php echo $student['Student']['id']; ?></td>
		      	  <td><?php echo $student['Student']['document_identity']; ?></td>
				  <td><?php echo $student['Student']['name']; ?></td>
				  <td><?php echo $student['Student']['last_name']; ?></td>
				  <td><?php echo $student['Student']['email']; ?></td>
				  <td><?php echo $student['Student']['age']; ?></td>
				  <td><?php echo $student['Student']['phone']; ?></td>
				  <td><?php echo $this->Html->link('Edit', array('action' => 'edit',$student['Student']['id']));?>
				      <?php echo $this->Form->postLink('Delete', array('action' => 'delete',$student['Student']['id']), array('confirm' => 'Are you sure of delete to '.$student['Student']['name']. ' '.$student['Student']['last_name'].'?'));?>
				  </td>
		      </tr>
		    <?php endforeach;?>
		</tbody>
	</table>
	<?php echo $this->element('paginator');?>
</div>