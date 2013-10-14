<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Stanford Dollies: Website Updates</title>
<?php 
	include("scripts/styles.php");	
	include("scripts/java.php"); 
	include("updates.php"); // Returns $updates[]
?>
<style type="text/css">	html,body { padding:5px;	font-style:italic;	} </style>
</head>

<body>

<span class="boldtext">Stanford Dollie Web Site Updates:</span><br /><br />
<table width="375" border="0">
  <?
  	for($i=0; $i<count($updates); $i++) {
		  echo '<tr>';
			  list ($site,$details, $date, $href) = split ('	', $updates[$i]);
			  if($site == 'past') $page = 0;
			  if($site == 'present') $page = 1;
			  if($site == 'future') $page = 2;
			  if($href != 'x') echo '<td><a href="'. $href .'" style="font-size:10px" target="_top" onclick="return targetopener(this,true)">' . $site . ':</a></td>';
			  else echo '<td><a href="index2.php?pg=' . $page . '" style="font-size:10px" target="_top" onclick="return targetopener(this,true)">' . $site . ':</a></td>';
			  echo '<td>' . $details . '</td>';
			  echo '<td><em>' . $date . '</em></td>';
		  echo '</tr>';
	}
  ?>

</table><br />
</body>
</html>
