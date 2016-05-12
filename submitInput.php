<?php
	include ('database.php');
	session_start();
	if(isset($_POST['add_button'])) {
		$id1=$_GET['value'];
		$turndate=$_POST['turndate'];
		$classtype=$_POST['classtype'];
		$check=$_POST['check'];
		$principal=$_POST['principal'];
		$interest=$_POST['interest'];
		$rate=$_POST['penalty'];

		$sql1='SELECT *  FROM clients, cases, actual, expected WHERE clients.client_id like "'.$_GET['value'].'" AND clients.client_id=cases.client_id';	
		$result = $conn->query($sql);

		$aib = $loan*$r*$weeks;
		$atb = $loan-$aib-$apb;
		$apb = $atb-$aib;
		$days = $weeks*7;//convert to days

		$Ymd = explode ("/", $turndate);
		$m = $Ymd[0];
		$d = $Ymd[1];
		$Y = $Ymd[2];
		$turndate = date("Y-m-d", mktime(0, 0, 0, $m, $d, $Y));
   		
		$sql="INSERT INTO cases(client_id,loan_amount,actual_total_balance,date_of_release,date_of_maturity,payment_period,weekly_interest_rate,notes,status,actual_principal_balance,actual_interest_balance)
		  VALUES ('$id1','$loan','$loan','$dor','$dom','$weeks','$rate','$notes','$status','0.00','0.00')";

		$result = $conn->query($sql);

		if(!$result){
			echo('orayt');
			echo $conn->error;
		}
		else{
			//echo $dom;
			echo('<meta http-equiv="refresh" content="0;URL=main.php"/>');
		}		
	}
	else{
		echo "fuq";
	}
?>