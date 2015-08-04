<h1>Teachers' list <?php echo $this->Html->link('Add', array('action' => 'add'));?></th></h1>
<pre>
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
        </tr> 		
		<?php foreach ($teachers as $teacher):?>
      	  <tr>
	      	  <td><?php echo $teacher['Teacher']['id']; ?></td>
	      	  <td><?php echo $teacher['Teacher']['document_identity']; ?></td>
			  <td><?php echo $teacher['Teacher']['name']; ?></td>
			  <td><?php echo $teacher['Teacher']['last_name']; ?></td>
			  <td><?php echo $teacher['Teacher']['email']; ?></td>
			  <td><?php echo $teacher['Teacher']['phone']; ?></td>
			  <td><?php echo $teacher['Teacher']['address']; ?></td>	  
	      </tr>
	    <?php endforeach;?>
	</tbody>
</table>
</pre>