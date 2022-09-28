<?php include 'query.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>To do list</title>
	<style>
		<?php include 'files/style.css'; ?>
	</style>
</head>
<body>
  <!-- Form send the task to database -->
	<div id="content">
		<div id="content-form">
			<form action="./script.php" method="post">
				<input type="text" name="text">
				<input type="submit" value="add">
			</form>
		</div>
    <!-- show all task   -->
		<div id="content-list">
			<ul>
				<?php $query->data_seek(0) ?>
				<?php while($fila = $query->fetch_assoc()){ ?>
				<li id="<?php echo $fila['id']; ?>">
					<form action="./script.php" method="post">
						<input type="hidden" value="<?php echo $fila['id']; ?>" name="id_task">
						<input type="submit" value="X">
					</form>
					<?php echo $fila['text']; ?>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</body>
</html>
