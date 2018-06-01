<?php 
include_once("system_session.php");
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>WEC - CPANEL</title>
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="style/dash_board.css" type="text/css">
  <link rel="stylesheet" href="style/form_contents.css" type="text/css">
  <link rel="stylesheet" href="style/content.css" type="text/css">
  <link rel="stylesheet" href="style/accordion.css" type="text/css">
  <link rel="stylesheet" href="style/tab.css" type="text/css">
  
  <script src="script/jquery-1.11.0.min.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function() {

	//Default Action
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

});
</script>
  
</head>
<body>
<div id="top_bar">
	<?php include("pages/dash_board_top.php"); ?>
</div>
<div id="center_content">
	<div id="left_column">
    	<?php include("pages/dash_board_leftcolumn.php"); ?>
    </div>
    
    <div id="right_column">
<?php include("pages/add_latest_content.php"); ?>
    </div>
</div>

</body>
</html>
