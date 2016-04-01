<?php 

include("layout.php"); //this includes layout.php which contains the navbar and footer

//with responsive calendar (not edited)

echo(' 
	<div id="side_by_side">
	
	<div id="calendar_Div">
		<!-- Responsive calendar - START -->
		<div class="responsive-calendar">
		  <div class="controls">
		      <a class="pull-left" data-go="prev"><div class="btn"><i class="icon-chevron-left"></i></div></a>
		      <h4><span data-head-year></span> <span data-head-month></span></h4>
		      <a class="pull-right" data-go="next"><div class="btn"><i class="icon-chevron-right"></i></div></a>
		  </div><hr/>
		  <div class="day-headers">
		    <div class="day header">Mon</div>
		    <div class="day header">Tue</div>
		    <div class="day header">Wed</div>
		    <div class="day header">Thu</div>
		    <div class="day header">Fri</div>
		    <div class="day header">Sat</div>
		    <div class="day header">Sun</div>
		  </div>
		  <div class="days" data-group="days">
		    <!-- the place where days will be generated -->
		  </div>
		</div>
		<!-- Responsive calendar - END -->
	</div>
		
	</div>
	<div class="table-responsive" id="for_table">
		<table class="table table-hover">
		  <thead>
		    <tr id="mainthead">
		      <th>March 31, 2016</th>
		    </tr>
		    <tr id="subthead">
		      <th>Client</th>
		      <th>Company</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Benitez, Sasa</td>
		      <td>Ateneo de Manila University</td>
		    </tr>
		    <tr>
		      <td>Cruz, Angelica</td>
		      <td>Sari-Sari Store</td>
		    </tr>
		    <tr>
		      <td>Santos, Jose</td>
		      <td>Rainbow Shop</td>
		    </tr>
		    <tr>
		      <td>dela Costa, Horacio</td>
		      <td>Ice Cream Shop</td>
		    </tr>
		    <tr>
		      <td>Ricci, Matteo</td>
		      <td>JSEC Enterprisep</td>
		    </tr>
		  </tbody>
		</table>
	</div>
	</div>

	<div class="table-responsive" id="for_2ndtable"> 
		<table class="table table-hover">
		  <thead>
		    <tr id="mainthead">
		      <th colspan="2">Pending Payments</th>
		    </tr>
		    <tr id="subthead">
		      <th id="for_Date">Date</th>
		      <th>Client</th>
		      <th>Company</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Jan-20-2015</td>
		      <td>Benitez, Sasa</td>
		      <td>Ateneo de Manila University</td>
		    </tr>
		    <tr>
		      <td>Feb-13-2015</td>
		      <td>Cruz, Angelica</td>
		      <td>Sari-Sari Store</td>
		    </tr>
		    <tr>
		      <td>Mar-05-2015</td>
		      <td>Santos, Jose</td>
		      <td>Rainbow Shop</td>
		    </tr>
		    <tr>
		      <td>May-21-2015</td>
		      <td>dela Costa, Horacio</td>
		      <td>Ice Cream Shop</td>
		    </tr>
		    <tr>
		      <td>July-26-2015</td>
		      <td>Ricci, Matteo</td>
		      <td>JSEC Enterprisep</td>
		    </tr>
		  </tbody>
		</table>
	</div>
');

?>