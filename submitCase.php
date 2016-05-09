<?php
	include ('database.php');
	session_start();
	if(isset($_POST['add_button'])) {
		$id1=$_GET['value'];
		$status=$_POST['status'];
		$loan=$_POST['loan'];
		$dor=$_POST['dor'];
		$weeks=$_POST['weeks'];
		$rate=$_POST['rate'];
		$notes=$_POST['notes'];

		$r = $rate*0.01;
		$aib = $loan*$r*$weeks;
		$atb = $loan+$aib;
		$apb = $atb-$aib;

		$days = $weeks*7;//convert to days

		$Ymd = explode ("/", $dor);
		$m = $Ymd[0];
		$d = $Ymd[1];
		$Y = $Ymd[2];
		//$Y = date('Y', strtotime($dor));//gets year in xxxx
		//$m = date('m', strtotime($dor));//gets month in xx
		//$d = date('d', strtotime($dor));//gets day in xx

		$dor = date("Y-m-d", mktime(0, 0, 0, $m, $d, $Y));//computes for date of release
		$dom = date("Y-m-d", mktime(0, 0, 0, $m, $d+$days, $Y));//computes for date of maturity
   		
   		//FIX PA FOR DOR, DOM, PRINCIPAL BALANCE

		$sql="INSERT INTO cases(client_id,loan_amount,actual_total_balance,date_of_release,date_of_maturity,payment_period,weekly_interest_rate,notes,status,actual_principal_balance,actual_interest_balance)
		  VALUES ('$id1','$loan','$atb','$dor','$dom','$weeks','$rate','$notes','$status','0.00','0.00')";

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
