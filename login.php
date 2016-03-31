<?php 

include("layout.php"); //this includes layout.php which contains the navbar and footer

echo(' 
	<div id="form_login">
	<span class="glyphicon glyphicon-log-in" id="login_img"></span>
	  <div class="form-group">
	  	<div id="login_label">
	    <label class="control-label" for="username">Username </label>
	    </div>
	      <input type="username" class="form-control" id="username" placeholder="Email or Username">
	  </div>
	  <div class="form-group">
	  	<div id="login_label">
	    <label class="control-label" for="password">Password </label>
	    </div>
	      <input type="password" class="form-control" id="password" placeholder="Password">
	  </div>
	  <div class="form-group"> 
	    <div id="login_btn">
	      <button type="submit" class="btn btn-default" id="login"> Login </button>
	    </div>
	  </div>
	</form>
	</div>
');

?>
