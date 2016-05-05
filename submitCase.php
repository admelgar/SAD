<?php
	include ('database.php');
	session_start();
	if(isset($_POST['add_button'])) {

		$client_id=$_POST['client_id'];
		$status=$_POST['status'];

		$loan=$_POST['loan'];
		$dor=$_POST['dor'];
		$weeks=$_POST['weeks'];
		$rate=$_POST['rate'];
		$notes=$_POST['notes'];

		$userid = $_SESSION['id'];

		$r = $rate*0.01;
		$aib = $loan*$r*$weeks;
		$atb = $loan+$aib;

		$days = $weeks*7;//convert to days
		$Y = date('Y', strtotime($dor));//gets year in xxxx
		$m = date('m', strtotime($dor));//gets month in xx
		$d = date('d', strtotime($dor));//gets day in xx

		$dom = date("Y-m-d", mktime(0, 0, 0, int $m = date("m"), int $d = date("d")+$days, int $Y= date("Y")));//computes for date of maturity

		$sql="INSERT INTO cases(case_id,client_id,loan_amount,actual_total_balance,date_of_release,date_of_maturity,payment_period,weekly_interest_rate,notes,status,actual_principal_balance,actual_interest_balance)
		  VALUES ('$userid','$client_id','$loan','$atb','$dor','$dom','$weeks','$rate','$notes','$status','$loan','$aib')";

		$result = $conn->query($sql);

		if(!$result){
			echo('orayt');
			echo $conn->error;
		}
		else{
			echo('<meta http-equiv="refresh" content="0;URL=addClient.php"/>');
		}		
	}
	else{
		echo "fuq";
	}
?>