<?php 

?>
<?php
echo "<script>$(function(){setTimeout(function(){ $('#fr').submit(); },".($submit_time - 1)."000); }); </script>";
?>


<!---FORM HERE -->
<form id="fr" method="post" action="<?= base_url(); ?>index.php/test/finish" >
<input name="kk" value="4" type="hidden" />
<input type="submit" />
</form>