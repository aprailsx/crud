<?php
include 'crud.php';

if(isset($_POST['submit'])){
	$data = array('name' => $_POST['name'], 'email'=>$_POST['email'], 'message'=>$_POST['message']);
	
	if(!isset($_GET['id'])){
		$crud->add($data);
		header("Location: /");
	}else{
		$crud->edit($_POST['info_id'], $data);
		header("Location: /");
	}
}

	
if(!isset($_GET['id'])){
?>

	<form action="" method="post">
		name: <input type="text" name="name" /><br>
		email: <input type="text" name="email" /><br>
		message: <textarea name="message"></textarea><br>
		<input type="submit" value="submit" name="submit" />
	</form>
<?php 
	}else{ 
	
	$row = mysql_fetch_row($crud->get_one($_GET['id']));
?>

	<form action="" method="post">
		name: <input type="text" name="name" value="<?php echo $row[1]?>" /><br>
		email: <input type="text" name="email" value="<?php echo $row[2]?>" /><br>
		message: <textarea name="message"><?php echo $row[3]?></textarea><br>
		<input type="hidden" value="<?php echo $row[0]?>" name="info_id" />
		<input type="submit" value="submit" name="submit" />
	</form>

<?php } ?>

<?php 
	if(isset($_GET['remove'])){
		$crud->remove($_GET['id']);
		header("Location: /");
	}
?>