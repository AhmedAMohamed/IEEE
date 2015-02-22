<?php
  echo "<script>$(function(){setTimeout(function(){ $('#fr').submit(); },".($submit_time - 1)."000); }); </script>";
?>
<div class="container">
 <div class="row">
  <div class="col-md-12">
    <h1 class="text-center">The 4G started with a 1G</h1>
    <h3 class="text-center"> TEST</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" id="fr"role="form" action="<?= base_url(); ?>index.php/test/finish" method="post">
      <div id="testHere">
      </div>
      <input type="hidden" name="email" value="<?php echo $email ?>">
      <button type="submit" name ="submit"class="btn btn-default btn-block">Submit</button>
     </form>
     <script type="text/javascript">
	$.getJSON('<?= base_url();?>libs/questions.json' , function  (data) {
     	var output = "" ;
     	var questionNum = 0;
          	$.each(data , function  (key , val) {
    	// body...
    	questionNum++;
     	output += '<div class="form-group"><div class="col-sm-9">' ;
     	output += '<label for="Q'+questionNum+'" class="control-label">'+val.q+'</label>' ;
        	output += '</div><div class="col-sm-3">' ;
        	output += '<select name="Q'+questionNum+'" class="form-control">' ;
    	output += '<option value="noAns">Choose</option>' ;
    	output += '<option value="a">'+val.a+'</option>' ;
    	output += '<option value="b">'+val.b+'</option>' ;
    	output += '<option value="c">'+val.c+'</option>' ;
    	if (val.d != "" ) {
    		output += '<option value="d">'+val.d+'</option>' ;
    	};
    	output += '</select></div></div><hr />' ;
        	});

       $('#testHere').html(output) ;
    }); 
</script>
   </div>
 </div>
</div>