<?php
	$Title = "Home";
	$script = '<script type="text/javascript">'.		
		 "$(document).ready(function(){ ".       
      "$('#carousel').jCarousel({".
        "jsonScript : 'json/images.json',".
       " onPicClick  : function(base, imageBlock, i) {".
          "showDetails(base,imageBlock, i);".
        "}".
      "});".      
    "});".	  
		"</script>";
	ob_start();
	
?>
<div id="carousel">
 

</div>
<div id="quote" >
	Don't walk behind me; I may not lead.<br /> Don't walk in front of me; I may not follow.<br /> Just walk beside me and be my friend.
	
</div>
<?php 
	$Content = ob_get_clean();
	require 'FriendsMaster.php';
?>