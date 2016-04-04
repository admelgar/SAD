<?php 

include("layout.php"); //this includes layout.php which contains the navbar and footer

?> 
<h1>EDIT CLIENT</h1>
<h2>Bernardo, Cathy</h2>
<div id="form_Addclient">
<form class="form-horizontal" role="form">

<!-- EDIT THESE PARTS FOR DISABLING EDITS: I ADDED READONLY BUT IT WON\'T WORK FOR SELECT --> 
  <div class="form-group">
    <label class="control-label col-sm-4" for="class">Classification </label>
    <div class="col-sm-6">
      <select class="form-control form-control-inline" id="class">
      <option readonly>Micro</option>
      <option readonly>SME</option>
    </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="rep">Name of Representative </label>
    <div class="col-sm-3">
          <input type="text" class="form-control form-control-inline2" id="last" placeholder="Enter last name" readonly>
    </div>
    <div class="col-sm-3">
          <input type="text" class="form-control form-control-inline2" id="first" placeholder="Enter first name" readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="co">Name of Co-maker </label>
    <div class="col-sm-3">
      <input type="text" class="form-control form-control-inline2" id="last" placeholder="Enter last name" readonly>
    </div>
    <div class="col-sm-3">
      <input type="text" class="form-control form-control-inline2" id="first" placeholder="Enter first name" readonly>
    </div>
  </div>
<!-- END OF DISABLED SECTION--> 

  <div class="form-group">
    <label class="control-label col-sm-4" for="company">Company Name </label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="company" placeholder="Enter company name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="tel">Telephone Number </label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="tel" placeholder="Enter telephone number">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="email">Email </label>
    <div class="col-sm-6">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="oadd">Office Address </label>
    <div class="col-sm-6"> 
      <textarea class="form-control" rows="3" id="oadd"placeholder="Enter address"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="status">Status </label>
    <div class="col-sm-6">
      <select class="form-control form-control-inline" id="status">
      <option>Active</option>
      <option>Risk</option>
      <option>Runaway</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="notes">Notes </label>
    <div class="col-sm-6">
      <textarea class="form-control" rows="3" id="notes" placeholder="Enter notes"></textarea>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-7">
      <button type="submit" class="btn btn-default" id="add_button">Add Client </button>
      <button type="submit" class="btn btn-default" id="cancel" onClick="window.location=\'http://localhost:8080/addclient.php\';">Cancel </button>
    </div>
  </div>
</form>
</div>
