<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php 
	include("scripts/styles.php");	
	include("scripts/java.php"); 
	
	// In Variables:
	$decade = strip_tags($_GET['dec']);	// Decade: 1950 - 2000
	$year = strip_tags($_GET['yea']);		// Dollie Year: 0 - 9
	$page = strip_tags($_GET['pg']);		// 3 Main Sections: 0, 1, 2 => past, present, future
	$index = strip_tags($_GET['ind']);		// Tab Setup: 0, 1, 2, 3 => main, mainphotos, future, contact
	$tab = strip_tags($_GET['tab']);		// Active Tab: 'main','photos','auditions', 'contacts'
	$selected = strip_tags($_GET['sel']);	// Selected Recipient for contact form when applicable.
	
	if($decade == '') $mainpastpage = true;	// Tells get photos to rechieve reunion photos because displaying main past page
	include("getphotos.php"); 			// variables: $photo1[], $photocaptions[], $photo2[]
	
	$nextyear = $year + 1;
	$nextdecade = $decade[2] + 1;
	$yearstart = $decade + $year;
	$yearend = $decade + $nextyear;
	$imagefolder = $decade[2] . $year . $decade[2] . $nextyear;
	if($nextyear == 10) $imagefolder = $decade[2] . '9' . $nextdecade . '0';
	if($mainpastpage) $imagefolder = 'reunions';
	if($imagefolder == '99100') $imagefolder = '9900';
?>
</head>

<body >
<div class="content2"> 
  
  <?
  if($mainpastpage) echo '<span class="title">Dollie Reunions and Alumni Events<br>Photo Album<br></span>';
  else echo '<span class="title">Photo Album<br>' . $yearstart . ' - ' . $yearend . ' Dollies<br></span>';
  
    
		for($i = 0; $i < count($photo1); $i++) {
			if($photo1[$i] != 'x') echo '<img src="photos/' . $imagefolder . '/' . $photo1[$i] . '">';
			if($photo2[$i] != 'x') echo '<img src="photos/' . $imagefolder . '/' . $photo2[$i] . '">';
			if($photocaptions[$i] != 'x') echo '<span class="albumcaption"><br>' . $photocaptions[$i] . '</span>';
			echo '</br><br>';
		}
    ?>

</div>

  
</div>  
</body>
</html>
