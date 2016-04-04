<?php 

include("layout.php"); //this includes layout.php which contains the navbar and footer
?>

<h1>EDIT CASE NOTES</h1>
<h2>Bernardo, Cathy</h2>
  <div class="form-group" ID="for_notes">
      <textarea class="form-control" rows="6" id="notes" placeholder="Enter notes"></textarea>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-default" id="add_button">Add Case</button>
      <button type="submit" class="btn btn-default" id="cancel" onClick="window.location=\'http://localhost:8080/addclient.php\';">Cancel </button>
    </div>
  </div>
</form>
</div>
