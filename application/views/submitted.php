<?php 
if (!isset($_POST)) {
        redirect("..");
} 
?>
<div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Thanks for submitting</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p style="font-size: 30px">Your Email: <?= $_POST["mail"] ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p style="font-size: 30px">Your Code: <?= $_POST["code"] ?></p>
	  <p style="font-size: 15px">Please save this code because you will need it during the online test</p>
        </div>
      </div>
    </div>

