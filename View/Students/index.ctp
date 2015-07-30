<h1>students' list</h1>
<pre>
<table>
	<tbody>
		<th>Id</th>
		<th>Name</th>
		<th>Last Name</th>
		<th>Address</th>
		<?php foreach ($students as $student):?>
      	  <tr>
	      	  <th><?php echo $student['Student']['id']; ?></th>
			  <th><?php echo $student['Student']['name']; ?></th>
			  <th><?php echo $student['Student']['last_name']; ?></th>
			  <th><?php echo $student['Student']['address']; ?></th>
	      </tr>
	    <?php endforeach;?>
	</tbody>
</table>
</pre>