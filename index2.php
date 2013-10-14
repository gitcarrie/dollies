<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<?php 
	include("scripts/styles.php");	
	include("scripts/java.php");
	 
	// In Variables:
	$decade = strip_tags($_GET['dec']);	// Decade: 1950 - 2010
	$year = strip_tags($_GET['yea']);		// Dollie Year: 0 - 9
	$page = strip_tags($_GET['pg']);		// 3 Main Sections: 0, 1, 2 => past, present, future
	$index = strip_tags($_GET['ind']);		// Tab Setup: 0, 1, 2, 3 => main, mainphotos, future, contact
	$tab = strip_tags($_GET['tab']);		// Active Tab: 'main','photos','auditions', 'contacts'
	$selected = strip_tags($_GET['sel']);	// Selected Recipient for contact form when applicable.
	
?>
<head><title>Stanford Dollies - 
<? 
	if($page == '0') echo 'Past'; 
	if($page == '1') echo 'Present'; 
	if($page == '2') echo 'Future'; 
?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin=0 style="overflow: hidden" onLoad="MM_preloadImages('images/pastnav/rollover/1950.jpg',
     'images/pastnav/rollover/1960.jpg','images/pastnav/rollover/1970.jpg','images/pastnav/rollover/1980.jpg','images/pastnav/rollover/1990.jpg','images/pastnav/rollover/2000.jpg',
     'images/navigation/rollover/past.jpg',     'images/navigation/rollover/home.jpg',
     'images/navigation/rollover/present.jpg',     'images/navigation/rollover/future.jpg')">

<center>
  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="79px" width="142px" align="center" valign="top" background="images/pastnav/corner.gif">
        <div class="navcontainer">
          <div class="nav" >  
         		 <span class="topnav">
                	&nbsp;
                    <?
                    if($page != '0') 	echo '<a href="index2.php?pg=0" onMouseOut="MM_swapImgRestore()" title="Past: Dollie History, and Former Dollies" 
                    					onMouseOver="MM_swapImage(\'past\',\'\',\'images/navigation/rollover/past.jpg\',1)">&#8249;&#8249; past</a>';
				else 			echo '<span class="topnavselected"><a href="index2.php?pg=0" onMouseOut="MM_swapImgRestore()" title="Past: Dollie History, and Former Dollies" 
                    			 		onMouseOver="MM_swapImage(\'past\',\'\',\'images/navigation/rollover/past.jpg\',1)">&#8249;&#8249; past</a></span>';
								echo	' <span class="navdivider"> | </span>';
                    if($page != '1') 	echo '<a href="index2.php?pg=1" onMouseOut="MM_swapImgRestore()" title="Present: 2012-2013 Dollies"
                                              onMouseOver="MM_swapImage(\'present\',\'\',\'images/navigation/rollover/present.jpg\',1)">present</a>';
				else 			echo '<span class="topnavselected"><a href="index2.php?pg=1" onMouseOut="MM_swapImgRestore()" title="Present: 2012-2013 Dollies"
                                              onMouseOver="MM_swapImage(\'present\',\'\',\'images/navigation/rollover/present.jpg\',1)">present</a></span>';
								echo '<span class="navdivider"> | </span>';
                    if($page != '2') 	echo '<a href="index2.php?pg=2" 	onMouseOut="MM_swapImgRestore()" title="Future: Dollies and Auditions"
                   						 onMouseOver="MM_swapImage(\'future\',\'\',\'images/navigation/rollover/future.jpg\',1)">future &#8250;&#8250;</a>';
                    else 			echo '<span class="topnavselected"><a href="index2.php?pg=2" 	onMouseOut="MM_swapImgRestore()" title="Future: Dollies and Auditions"
                   						 onMouseOver="MM_swapImage(\'future\',\'\',\'images/navigation/rollover/future.jpg\',1)">future &#8250;&#8250;</a></span>';
				?>
				&nbsp;
                </span>
          <div style="position:absolute; top:17px; right:-40px; display:none"><a href="index.php" onMouseOut="MM_swapImgRestore()" title="Return Home"
                   onMouseOver="MM_swapImage('home','','images/navigation/rollover/home.jpg',1)">
          		<img src="images/navigation/homebutton.jpg"></a></div>
               <div style="position:absolute; top:30px; left:35px; display:none;"><img src="images/navigation/littlearrow.png"> </div>
               </div> </div>
               
      </td>
      <th height="79px" align="center" valign="top" background="images/pastnav/topline.gif">
     
		<?php 
			if($page == '0') {
				include("dropmenus.php"); 
				echo '<div align="center" id="formerdolliearchive"><br><img src="images/top/past.jpg" ></font></em></div>';
				$sideimage = 'pastside';
				if($tab == '') $tab = 'main';
				$source = 'tabs.php?pg=0&ind=1&tab=main&tab=' . $tab;
				if($decade == ('1950' || '1960' || '1970' || '1980' || '1990' || '2000' || '2010') && $year == (0 || 1 || 2 || 3 || 4 || 5 || 6 || 7 || 8 || 9 || 10) && $ind == (0 || 1)) {
					if($tab == '') $tab = 'main';
					$source = 'tabs.php?pg=0&ind=' . $index . '&dec=' . $decade . '&yea=' . $year . '&tab=' . $tab;	}
			}
			elseif($page == '2') {
				echo '<div align="center"><br><img src="images/top/future.jpg" ></font></em><br></div>';
				$sideimage = 'futureside';
				$source = 'tabs.php?pg=2&ind=2&tab=main&dec=2000&yea=9';
				if($tab == 'contacts' || $tab == 'auditions') $source = 'tabs.php?pg=2&ind=2&tab=' . $tab . '&dec=2000&yea=9';
			}
			elseif($page == '1') { // THIS IS WHERE YOU SELECT THE CURRENT YEAR / PRESENT DOLLIES!
				echo '<div align="center"><br><img src="images/top/present.jpg" ></font></em><br></div>';
				$sideimage = 'presentside';
				if($tab == '') $tab = 'main';
				$source = 'tabs.php?pg=1&ind=0&tab=' . $tab . '&dec=2010&yea=3'; // Change date
			}
			else {
				echo '<br><span class="error">:: page not found ::</span>';
				$sideimage = 'presentside';
				$source = 'tabs.php?pg=error&ind=0';
			}
		?>
     
     </th></tr>
    <tr> 
      <td rowspan="2" id="<? echo $sideimage; ?>">
      </td>
      	<th height="100%"><iframe src="<? echo $source; ?>" name="inline" width=100% height=100% frameborder=0 scrolling=auto></iframe></th>
    </tr>
    <tr><td class="bottomnav"> <a href="index2.php?pg=0">past</a> | <a href="index2.php?pg=1">present</a> | <a href="index2.php?pg=2">future</a> | <a href="index.php">home</a> | <a href="tabs.php?pg=1&ind=3&tab=contacts" target="inline">contact</a> <br>
      <br></td></tr>
  </table>
  </center>
<? if($page == '0') echo '<a href="http://www.opencube.com"><noscript style="display:none;">Menu by OpenCube</noscript></a>'; ?>
</body>
</html>
