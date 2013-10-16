<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>The Stanford Dollies</title>
<?php 
	include("scripts/styles.php");	// Stylesheet
	include("scripts/java.php"); 		// Java
	
	// In Variables:
	$decade = strip_tags($_GET['dec']);	// Decade: 1950 - 2010
	$year = strip_tags($_GET['yea']);		// Dollie Year: 0 - 9
	$page = strip_tags($_GET['pg']);		// 3 Main Sections: 0, 1, 2 => past, present, future
	$index = strip_tags($_GET['ind']);		// Tab Setup: 0, 1, 2, 3 => main, mainphotos, future, contact
	$tab = strip_tags($_GET['tab']);		// Active Tab: 'main','photos','auditions', 'contacts'
	$selected = strip_tags($_GET['sel']);	// Selected Recipient for contact form when applicable.
		
	if($index == '0') $tab = 'main';
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body style="overflow: hidden" onLoad="MM_preloadImages('images/tabs/rollover/main.jpg','images/tabs/rollover/photos.jpg','images/tabs/rollover/auditions.jpg','images/tabs/rollover/contacts.jpg')">
<center>

  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="25" width="30" align="center" valign="top"></td>
      <th height="25" colspan="2" align="left" valign="bottom">
      	<?
			
			// Main
			if($index != 3) {
				if($tab != 'main' ) {
					if($tab == 'auditions' || $tab == 'contacts') {$page = 2; $index= 2; }
					echo '<a href="tabs.php?pg='. $page .'&ind='. $index .'&tab=main&dec=' . $decade . '&yea=' . $year; 
					echo '" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(\'main1\',\'\',\'images/tabs/rollover/main.jpg\',1)">';
				}
				echo '<img src="images/tabs/main.jpg" name="main1" border="0" id="main">';
				if($tab != 'main') echo '</a>';
			}
				
			if($index == 1) {	
				
				// Photos
				if($tab != 'photos') {
					echo '<a href="tabs.php?pg='. $page .'&ind=1&tab=photos&dec=' . $decade . '&yea=' . $year;  
					echo '" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(\'photos1\',\'\',\'images/tabs/rollover/photos.jpg\',1)">';
				}
				echo '<img src="images/tabs/photos.jpg" name="photos1" border="0" id="photos">';
				if($tab != 'photos') echo '</a>';
			}
			
			if($index == 2) {
							
				// Auditions
				if($tab != 'auditions') {
					echo '<a href="tabs.php?pg=2&ind=1&tab=auditions&dec=' . $decade . '&yea=' . $year;  
					echo '" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(\'audit1\',\'\',\'images/tabs/rollover/auditions.jpg\',1)">';
				}
				echo '<img src="images/tabs/auditions.jpg" name="audit1" border="0" id="audit">';
				if($tab != 'auditions') echo '</a>';	
			}	
			
			if($index == 2 || $index == 3) {			
				// Contact
				if($index == 3) $tab = 'contacts';
				if($tab != 'contacts') {
					echo '<a href="tabs.php?pg=2&ind=2&tab=contacts&dec=' . $decade . '&yea=' . $year; 
					echo '" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(\'cont1\',\'\',\'images/tabs/rollover/contact.jpg\',1)">';
				}
				echo '<img src="images/tabs/contact.jpg" name="cont1" border="0" id="cont">';
				if($tab != 'contacts') echo '</a>';	
			}
			
			echo '<img src="images/tabs/shadow.jpg" border=0>';
			
          ?></th>
    </tr>
    <tr>
      <td width="30" align="left" valign="bottom"><img src="images/contentbox/leftupcorner.gif" ></td>
      <th width="100%" align="left" valign="top" background="images/contentbox/top.gif">
	 	<? 
			if($tab == 'contacts' && $index != 2) echo '<div class="contacts2white">&nbsp;</div>';
			else echo '<div class="' . $tab . 'white">&nbsp;</div>';
			
			if($page == '0' && $decade != '') {
				echo '<div class="righttabnav">';
					$year1 = $decade + $year;
					$year2 = $year1+1;
					$pastyear = $year - 1;
					$nextyear = $year + 1;
					$pastdec = $decade;
					$nextdec = $decade;
					if($year == '0') {
						$pastyear = '9';
						$pastdec = $decade - 10;
					}
					if($year == '9') {
						$nextyear = '0';
						$nextdec = $decade + 10;
					}
					if($decade == '1950' && $year == '6') $pastyear = 4;
					if($decade == '1950' && $year == '4') $nextyear = 6;
					
					$pastindex = 1;
					$nextindex = 1;
					if($year1 < '1973' && $year1 != '1961' && $year1 != '1962' && $year1 != '1957' && $year1 != '1958' || $year1 == '1984') $pastindex = 0;
					if($year2 < '1972' && $year1 != '1959' && $year1 != '1960' && $year1 != '1954' && $year1 != '1956' || $year2 == '1983') $nextindex = 0;

					
					if($year1 > '1954') echo 	'<a href = "tabs.php?pg=0&ind=' . $pastindex . '&tab=main&dec=' . $pastdec . '&yea=' . $pastyear . '" target="inline">
											&#8249;&#8249; previous</a><span class="navdivider"> | </span>';
					echo '<strong>' . $year1 . ' - ' . $year2 . '</strong>';
					if($year2 < '2013') echo 	'<span class="navdivider"> | </span><a href = "tabs.php?pg=0&ind=' . 
											$nextindex . '&tab=main&dec=' . $nextdec . '&yea=' . $nextyear . '" target="inline">next &#8250;&#8250;';
				echo '</div>';
			}
		
		?>
      </th>
      <th width="30" align="left" valign="bottom"><img src="images/contentbox/rightupcorner.gif" ></th>
    </tr>
    <tr>
      <td height="100%" align="right" background="images/contentbox/left.gif"></td>
      <th height="100%" valign="top">
      <iframe src="<?
      	if($index == 3) echo 'content.php?pg=0&ind=3&sel=' . $selected;
		elseif($tab == 'main') echo 'content.php?pg='. $page .'&dec=' . $decade . '&yea=' . $year;
		elseif($tab == 'auditions') echo 'content.php?pg=2&tab=auditions';
		elseif($tab == 'contacts') echo 'content.php?pg=2&ind=2&tab=contacts';
		elseif($tab == 'photos') echo 'photos-content.php?dec=' . $decade . '&yea=' . $year . '&pg=' . $page;  ?> 
      "name="inline3" width=100% height=100% frameborder=0 scrolling=auto></iframe></th>
      <th valign="top" background="images/contentbox/right.gif"></th>
    </tr>
    <tr>
      <td height="25" align="right" valign="top"><img src="images/contentbox/leftbottomcorner.gif" ></td>
      <th height="100%" background="images/contentbox/bottom.gif">&nbsp;</th>
      <th><img src="images/contentbox/rightbottomcorner.gif" ></th>
    </tr>
  </table>
  </center>
    

</body>
</html>
