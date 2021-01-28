<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM servents WHERE servent_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Servent Successfully Send\");
					window.location = (\"add_servent.php\")
				</script>";
	}
?>
