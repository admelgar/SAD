<?php 

include("layout.php"); //this includes layout.php which contains the navbar and footer
require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser


echo(' 
	<h1 id="h1_report">PORTFOLIOS REPORT</h1>
	<div id="form_report">
	<form class="form-horizontal" role="form">
	  <div class="form-group">
		    <label class="control-label col-sm-3" for="period">Period </label>
		    <div class="col-sm-4">
		        <div class="input-group date" data-provide="datepicker-inline" id="picker_case">
			      	<input type="text" class="form-control">
			      	<div class="input-group-addon">
			          	<span class="glyphicon glyphicon-th"></span>
			      	</div>
	     		</div> 
		    </div>
		    <div class="col-sm-4">
		        <div class="input-group date" data-provide="datepicker-inline" id="picker_case">
			      	<input type="text" class="form-control">
			      	<div class="input-group-addon">
			          	<span class="glyphicon glyphicon-th"></span>
			      	</div>
	     		</div> 
		    </div>
	  	</div>
	  <div class="form-group">
	    <label class="control-label col-sm-3" for="class">Classification </label>
	    <div class="col-sm-4" id="input_class">
	      <select class="form-control form-control-inline" id="class">
	      <option>Micro</option>
	      <option>SME</option>
	    </select>
	    </div>
	  </div>
	  <div class="form-group" id="report_buttons"> 
	    <div class="col-sm-offset-3 col-sm-8">
	      <button type="submit" class="btn btn-default" id="add_button" href="">Generate </button>
	      <button type="submit" class="btn btn-default" id="cancel" onClick="window.location=\'http://localhost:8080/addclient.php\';">Cancel </button>
	    </div>
	  </div>
	</form>
	</div>
');

?>