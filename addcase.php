<?php 

include("layout.php"); //this includes layout.php which contains the navbar and footer

?>
<h1>ADD CASE</h1>
<h2>Bernardo, Cathy</h2>
<div id="form_Addcase">
<form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="control-label col-sm-4" for="loan">Loan Amount </label>
    <div class="col-sm-4">
      <input type="number" class="form-control" id="loan" placeholder="Enter amount">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="release">Date of Release </label>
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
    <label class="control-label col-sm-4" for="weeks">Payment Period </label>
    <div class="col-sm-3">
      <input type="number" class="form-control" id="weeks" placeholder="Weeks">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="rate">Weekly Interest Rate </label>
    <div class="col-sm-3">
      <input type="number" class="form-control" id="rate" placeholder="Rate (%)">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="notes">Notes </label>
    <div class="col-sm-5">
      <textarea class="form-control" rows="3" id="notes" placeholder="Enter notes"></textarea>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-default" id="add_button">Add Case</button>
      <button type="submit" class="btn btn-default" id="cancel" onClick="window.location=\'http://localhost:8080/addclient.php\';">Cancel </button>
    </div>
  </div>
</form>
</div>

