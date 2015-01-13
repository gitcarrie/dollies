<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Stanford Dollies</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php 
	include("scripts/styles.php");	// Stylesheet
	include("scripts/java.php"); 		// Java
	include('updates.php');			// $updates[] and $announcements[]
	
	$dispview = "no";
	$comment = 'portfolio (index)';
?>

</head>
<body onLoad="MM_preloadImages('images/main/present-red.gif','images/main/past-red.gif','images/main/future-red.gif','images/main/lsjumb-red.gif')">

<div id="maincontainer"><div id="mainbackground"><img src="images/main/dollies-back2.jpg">

  <div id="pastbutton" ><a href="index2.php?pg=0" title="Dollie History, and Past Dollie Info" onMouseOut="MM_swapImgRestore()" 
     onMouseOver="MM_swapImage('past','','images/main/past-red.gif',1)"><img src="images/main/past-white.gif" name="past" border="0"></a></div>
  <div id="presentbutton"><a href="index2.php?pg=1" title="The current Dollies" onMouseOut="MM_swapImgRestore()" 
     onMouseOver="MM_swapImage('present','','images/main/present-red.gif',1)"><img src="images/main/present-white.gif" name="present" border="0"></a></div>
  <div id="futurebutton"><a href="index2.php?pg=2" title="Audition Information" onMouseOut="MM_swapImgRestore()" 
  	onMouseOver="MM_swapImage('future','','images/main/future-red.gif',1)"><img src="images/main/future-white.gif" name="future" border="0"></a></div>
  <div id="lsjumbbutton"><a href="http://lsjumb.stanford.edu" title="The One, The Only, The Truly Incomparable Leland Stanford Junior University Marching Band" 
  	onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('lsjumb','','images/main/lsjumb-red.gif',1)"><img src="images/main/lsjumb-white.gif" name="lsjumb" border="0"></a></div>
     
  <div id="updatesbox" >
  	<span class="boldtext2">Updates: </span>
          <?
			for($i = 0; $i < 3; $i++) {
				list ($site,$details, $date, $href) = split ('	', $updates[$i]);
				if($site == 'past') $page = 0;
			  	if($site == 'present') $page = 1;
			  	if($site == 'future') $page = 2;
				echo '<br>';
				if($href != 'x') echo '<a href="'. $href .'" style="font-size:10px">' . $site . '</a>: ' . $details . ' ' . $date;
				else echo '<a href="index2.php?pg=' . $page . '" style="font-size:10px">' . $site . '</a>: ' . $details . ' ' . $date;
			}
          ?>
  	  	<br>for more updates, <A HREF="getupdates.php" style="font-size:10px" onClick="return popup(this, 'notes')">click here!</A>
  	  	<!--<br><br><span class="boldtext2">News/Announcements:</span>
          <?
			/*for($i = 0; $i < count($announcements); $i++) {
				list ($details, $date) = split ('	', $announcements[$i]);
				echo'<br>';
				echo $details . ' ' . $date;
          	}*/
		?>-->
       
       <div style="padding-top:25px"><a href="https://twitter.com/stanforddollies" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @stanforddollies</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				
				<!--<a href="http://www.youtube.com/user/TheStanfordDollies" target="_blank"><img style="padding-left:10px;margin-bottom:1px;" src="//s.ytimg.com/yt/img/creators_corner/Watch_me_on_YouTube/90x15_watchon_red.png" alt="Subscribe to me on YouTube"/></a><img src="//www.youtube-nocookie.com/gen_204?feature=creators_cornier-//s.ytimg.com/yt/img/creators_corner/Watch_me_on_YouTube/90x15_watchon_red.png" style="display: none"/>-->
				
				<script>(function(d, s, id) {
  					var js, fjs = d.getElementsByTagName(s)[0];
  					if (d.getElementById(id)) return;
  					js = d.createElement(s); js.id = id;
  					js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  					fjs.parentNode.insertBefore(js, fjs);
				}(document, "script", "facebook-jssdk"));</script>
				
				<div class="fb-like" style="top: -2px; padding-left: 10px;" data-href="http://www.facebook.com/pages/Stanford-Dollies/185547312524"
				 data-send="true" data-layout="button_count" data-width="500" height="62px" data-show-faces="false" data-font="verdana"></div><div class="fb-link" style="display:inline-block; padding-left:8px; vertical-align:1px; font-size:10px; font-color:black;"><a href="http://www.facebook.com/pages/Stanford-Dollies/185547312524" target="_blank"><img src="images/f_logo.png" width="18px"></a></div>
        </div>
        
  </div> 
  
  
  
  
</div></div>
</body>
</html>
