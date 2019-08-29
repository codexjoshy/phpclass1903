<?php 
	function pageAccess()
	{
		if (!isset($_SESSION['username'])) {
			header("location:".URL);
		}
	}

?>