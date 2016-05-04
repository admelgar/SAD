<?php
	include 'database.php';

	$class=$lastr=$firstr=$lastc=$firstc=$company=$tel=$email=$status=$notes="";

	if(!isset($_POST['add_button'])) {

		$class = $_POST['class'];
		$lastr = $_POST['lastr'];
		$firstr = $_POST['firstr'];
		$lastc = $_POST['lastc'];
		$firstc = $_POST['firstc'];
		$company = $_POST['company'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];
		$status = $_POST['status'];
		$notes = $_POST['notes'];

		$db->query("INSERT INTO clients (classification, representative_last_name, representative_first_name, comaker_last_name, comaker_first_name, company_name, contact_no, email, status, notes)
		  VALUES ('$class', '$id_number', '$firstr', '$lastc', '$firstc', '$company', '$tel', '$email', '$status', '$notes')");

		$db->close();

		header("Location: addclient.php");
	}
?>