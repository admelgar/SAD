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

		$daye = 7;
		$days = $weeks*7;//convert to days
		$Ymd = explode ("/", $dor);
		$m = $Ymd[0];
		$d = $Ymd[1];
		$Y = $Ymd[2];
		$dor = date("Y-m-d", mktime(0, 0, 0, $m, $d, $Y));//computes for date of release
		$doe = date("Y-m-d", mktime(0, 0, 0, $m, $d+$daye, $Y));//computes for first expected due date
		$dom = date("Y-m-d", mktime(0, 0, 0, $m, $d+$days, $Y));//computes for date of maturity

		$idue = $loan*$r;
		$pdue = $loan/$weeks;
		$tdue = $idue+$pdue;

		$epb = $loan-$pdue;
		//next few: $epb=$epb-$pdue
		$eib = ($idue*$weeks)-$idue;
		//next few: $eid=$eib-$idue
		$etb = $epb+$eib;

		$apb = $loan;
		//next: $apb = $apb - principal from the input
		$aib = $loan*$r*$weeks;
		$atb = $apb+$aib;
   		

		$sql="INSERT INTO cases(client_id,loan_amount,actual_total_balance,date_of_release,date_of_maturity,payment_period,weekly_interest_rate,notes,status,actual_principal_balance,actual_interest_balance)
		  VALUES ('$id1','$loan','$atb','$dor','$dom','$weeks','$rate','$notes','$status','$apb','$aib')";

		$result = $conn->query($sql);
		//$id2=$mysqli->insert_id;

		if(!$result){
			echo('orayt');
			echo $conn->error;
		}
		else{
			$sql3="INSERT INTO expected(client_id,case_id,expected_due_date,expected_principal_balance,expected_interest_balance,expected_total_balance,principal_due,interest_due,total_due,status) VALUES('$id1','100000','$doe','$epb','$eib','$etb','$pdue','$idue','$tdue','Unpaid')";
			//FOR JUSKO: LOOP { DATE_ADD TO ADJUST THE 1 WEEK THEN INSERT INTO PARA UMULIT NG UMULIT } -- IF EVER SA SINGLE CLIENT
			$result3 = $conn->query($sql3);
			//pano query to get case id
			echo('<meta http-equiv="refresh" content="0;URL=main.php"/>');
		}		
	}
	else{
		echo "fuq";
	}
?>