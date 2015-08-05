<h1><?php echo $this->Html->link("Index", array('controller' => 'pages', 'action' => 'index')); ?> |Teachers' list <?php echo $this->Html->link('Add', array('action' => 'add'));?></h1>
<div>
	<table>
		<tbody>
		    <tr>
			  <th><?php echo $this->Paginator->sort('id');?></th>
			  <th><?php echo $this->Paginator->sort('document_identity');?></th>
			  <th><?php echo $this->Paginator->sort('name');?></th>
			  <th><?php echo $this->Paginator->sort('last_name');?></th>
			  <th><?php echo $this->Paginator->sort('email');?></th>
			  <th><?php echo $this->Paginator->sort('phone');?></th>
			  <th><?php echo $this->Paginator->sort('address');?></th>
			  <th>Actions</th>
	        </tr>
			<?php foreach ($teachers as $teacher):?>
	      	  <tr>
		      	  <td><?php echo h($teacher['Teacher']['id']); ?></td>
		      	  <td><?php echo h($teacher['Teacher']['document_identity']); ?></td>
				  <td><?php echo h($teacher['Teacher']['name']); ?></td>
				  <td><?php echo h($teacher['Teacher']['last_name']); ?></td>
				  <td><?php echo h($teacher['Teacher']['email']); ?></td>
				  <td><?php echo h($teacher['Teacher']['phone']); ?></td>
				  <td><?php echo h($teacher['Teacher']['address']); ?></td>
				  <td><?php echo $this->Html->link('View', array('action' => 'view',$teacher['Teacher']['id']));?>
				      <?php echo $this->Html->link('Edit', array('action' => 'edit',$teacher['Teacher']['id']));?>
				      <?php echo $this->Form->postLink('Delete', array('action' => 'delete',$teacher['Teacher']['id']), array('confirm' => 'Are you sure of delete to '.$teacher['Teacher']['name']. ' '.$teacher['Teacher']['last_name'].'?'));?>
				  </td>
		      </tr>
		    <?php endforeach;?>
		</tbody>
	</table>
	<?php echo $this->element('paginator');?>
</div>