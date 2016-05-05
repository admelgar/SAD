<?php
	include 'database.php';

	$last=$dor=$weeks=$rate="";

	if(!isset($_POST['add_button'])) {

		$last = $_POST['last'];
		$dor = $_POST['dor'];
		$weeks = $_POST['weeks'];
		$rate = $_POST['rate'];

		$db->query("INSERT INTO cases (classification, representative_last_name, representative_first_name, comaker_last_name, comaker_first_name, company_name, contact_no, email, status, notes)
		  VALUES ('$last', '$dor', '$weeks', '$rate')");

		$db->close();

		header("Location: addclient.php");
	}
?>