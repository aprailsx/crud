<?php
	include 'crud.php';
	include 'link.php';
?>

<table border='1'>
	<tr>
		<td colspan="4">
			<a href="form.php">Add</a>
		</td>
	</tr>
	
	<tr>
		<th>name</th>
		<th>email</th>
		<th>edit</th>
		<th>delete</th>
	</tr>
	<?php 
		$results = $crud->get_all();
		while($key = mysql_fetch_array( $results )) {  
		
	?>
	<tr>
		<td><?php echo $key['name'];?></td>
		<td><?php echo $key['email'];?></td>
		<td><a href="form.php?id=<?php echo $key['info_id'];?>">edit</td>
		<td><a href="form.php?remove=yes&id=<?php echo $key['info_id'];?>">delete</td>
	</tr>
	<?php } ?>
</table>

