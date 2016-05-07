<?php 

include("layout.php"); //this includes layout.php which contains the navbar and footer

// ADD TOOLTIPS!!!!!!!!!!!!!! :---)

?> 
	<div id="with_searchbar">
		<h1 id="h1_view">VIEW ALL</h1>
		<form class="pull-right searchsearch" role="search">
			<div class="input-group" id="for_Search">
				<input type="text" class="form-control" placeholder="Search">
				<div class="input-group-btn">
					<a href="search.php" class="btn btn-default" role="button"><i class="glyphicon glyphicon-search" id="search_glyph"></i></a>
				</div>
			</div>
		</form>
	</div>
	<div class="table-responsive" id="view_all_table">
        <table class="table table-striped">
          <thead id="colored_head">
            <tr>
                 <th id="client_head">CLIENT</th>
                <th id="icons_head"> </th>
                <th id="release_head">RELEASE</th>
                <th id="maturity_head">MATURITY</th>
                <th id="loan_head">LOAN AMOUNT</th>
                <th id="amount_head">AMOUNT BALANCE</th>
                <th id="status_head">STATUS</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include ('database.php');

            $sql = "SELECT clients.representative_last_name, clients.representative_first_name, cases.date_of_release, cases.date_of_maturity, cases.loan_amount, cases.actual_total_balance, cases.status FROM clients, cases WHERE clients.client_id=cases.client_id;";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
        ?>
                    <tr>
                        <td class="container"><?php echo $row['representative_last_name'].", ".$row['representative_first_name']?></td>
                        <td class="container" id="logo_column"><a href="editclient.php"><i class="glyphicon glyphicon-pencil" id="icons"></i></a><a href="input.php"><i class="glyphicon glyphicon-plus" id="icons"></i></a><a href="addcase.php"><i class="glyphicon glyphicon-level-up" id="icons"></i></a></td>
                        <td class="container" id="center_column"><?php echo $row['date_of_release']?></td>
                        <td class="container" id="center_column"><?php echo $row['date_of_maturity']?></td>
                        <td class="container" id="money"><?php echo $row['loan_amount']?></td>
                        <td class="container" id="money"><?php echo $row['actual_total_balance']?></td>
                        <td class="container" id="center_column"><?php echo $row['status']?></td>
                    </tr>

            <?php
                }
            }
            ?>
            </tbody>
            </table>
    </div>

