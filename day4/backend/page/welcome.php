<?php require '../config.php'; ?>
<?php 
	
?>
<?php require ('../template/header.php'); ?>
	<h2> <?php echo "Welcome".$_SESSION['username']; ?> </h2> 
	
		<a href="<?php echo URL.'page/logout.php' ?> "><button type="submit" name="logout" value="submit">Logout</button></a> 	
	

</body>
</html>