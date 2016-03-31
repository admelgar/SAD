<?php 

include("layout.php"); //this includes layout.php which contains the navbar and footer

echo(' 
	<div id="form_login">
	<img src="/images/round.png" name="login" id="user_img"/>
	<!-- <div>Icons made by <a href="http://www.flaticon.com/authors/google" title="Google">Google</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
	<form role="form">
	  <div class="form-group">
	    <label class="control-label" for="username">Username </label>
	      <input type="username" class="form-control" id="username">
	  </div>
	  <div class="form-group">
	    <label class="control-label" for="password">Password </label>
	      <input type="password" class="form-control" id="password">
	  </div>
	  <div class="form-group"> 
	    <div id="login_btn">
	      <button type="submit" class="btn btn-default" id="login">Login </button>
	    </div>
	  </div>
	</form>
	</div>
');

?>
