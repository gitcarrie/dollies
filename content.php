<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Stanford Dollies</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
	
	if($selected == '') $selected = 1;
	if($index == '0') $tab = 'main';
	
	include("getcontent.php"); 	// OUT VARIABLES: $thedollienames[], $thedolliegraddates[], $imagetype, $imagecaption, $boldline_b[], $boldline_c[], $tablehead[], $tablecont[][]
	
	$nextyear = $year + 1;
	$nextdecade = $decade[2] + 1;
	$yearstart = $decade + $year;
	$yearend = $decade + $nextyear;
	
	$groupimage = $decade[2] . $year . $decade[2] . $nextyear;
	if($imagetype == 'default') $groupimage = 'default';
	elseif($nextyear == 10) $groupimage = $decade[2] . '9' . $nextdecade . '0';
	if($groupimage == '99100') $groupimage = '9900';
	
	$auditionseason = false;		// Indicates if information is present for tryouts

?>
</head>
<body >

<?
// ***********************************************  CONTACTS SECTION **********************************************
if($index == 3) {
	echo '<p align="center"><span class="title">Stanford Dollie Contact Form</span><br><br></p>
		<center><div class="contacttext" >';
			if($selected == 'sent') echo '<p class="contactalert">* Your message has been sent.  Thank you for your input/questions! *<br><br></p>';
			
			echo '<small>The Stanford Dollies are located at Stanford University in Stanford, California.  
			If you have questions/comments, etc specific to the Stanford Dollies or the Stanford Dollie web page, please use the form below to send us an email.<br><br>
			
			If you don\'t fit into a category listed on the bottom of the page, and are not sure to whom to direct your message, 
			please select "<a href="content.php?ind=3&sel=2">Stanford Dollie Webmaster</a>" and enter your comments in the form below.<br><br><center>';

			include('contact-form.php');	
			
			echo '</center><ul class="contactlist"><span class="boldtext">Are you a Prospective Dollie?<br></span> 
			<li>For questions regarding dollie auditions, please <a href="content.php?ind=3&sel=auditions">click here</a>, and fill in the rest of the form above.  
			</li></ul>
			
			<ul class="contactlist"><span class="boldtext">Are you a Former Dollie?<br></span>
			<li>If you\'re a former dollie looking to subscribe to the official <strong>dollie alumni email list</strong>, 
			please <a href="content.php?ind=3&sel=emaillist">click here</a> and fill in the rest of the form below as instructed. 
			The assistant band manager will subscribe your email address to the list as soon as possible. </li>
			
			<li>If you would have questions/comments about the site or would like to add/correct information about your dollie year, 
			please <a href="content.php?ind=3&sel=dolliesite">click here</a> and place your comments in the form above.</li></ul>
			
			<br><br>';

		echo '</div></center>';

} // END CONTACTS SECTION

// ***********************************************  FUTURE SECTION AUDITIONS PAGE *********************************



elseif($tab == 'auditions') {
	echo '<p align="center"><span class="title">2015-2016 Dollie Auditions</span><br></p>';//<br> and General Audition Information!
	if($auditionseason == false) {
		echo
			'<div class="futurecontent">2015-2016 Stanford Dollie Auditions begin early next year!
				Until then, please feel free to browse the <a href="#generalinfo">general information</a> below, or 
				<a href="tabs.php?pg=2&ind=2&tab=contacts&dec=' . $decade . '&yea=' . $year . '" target="inline">contact</a> a 
				current dollie or LSJUMB assistant manager.
			</div>';
		}
	
	if($auditionseason == true) {
		echo 
			'<div class="futurecontent">Auditions for the 2015-2016 Season will take place in January/February!  
			Please refer to the schedule below for relevant dates and times and browse the <a href="#generalinfo">general information</a> section to learn more about the audition process. Feel free to 
			<a href="tabs.php?pg=2&ind=2&tab=contacts&dec=' . $decade . '&yea=' . $year . '" target="inline">contact</a> 
			the current dollies or LSJUMB assistant manager with any questions.
			</div>	
		
			<div class="futurecontent"><p>
			<ul class="futureinfolist"><span class="boldtext">Info Session</span>
				<li>Tuesday 1/19, 8:00 pm (Oak West, Tresidder)</li></ul>
			<ul class="futureinfolist"><span class="boldtext">Workshops</span>
				<li>Jan. 22, 3:00 - 5:00 pm (Elliot Program Center)</li>
				<li>Jan. 25, 7:00 - 9:00 pm (Elliot Program Center)</li>
				<li>Jan. 29, 3:00 - 5:00 pm (Band Shack)</li>
				<li>Feb. 01, 7:00 - 9:00 pm (Elliot Program Center)</li>
				<li>Feb. 03, 7:00 - 9:00 pm (Elliot Program Center)</li>
				<li>Feb. 05, 3:00 - 5:00 pm (Elliot Program Center)</li></ul>
			<ul class="futureinfolist"><span class="boldtext">Office Hours</span>
				<li>Feb. 07, 3:00 - 5:00 pm (Band Shack with Paula Markey)</li>
				<li>Feb. 08, 7:00 - 9:00 pm (Band Shack with Elise Birkhofer)</li>
				<li>Feb. 09, 8:00 - 10:00 pm (Band Shack with Nia Minor)</li>
				<li>Feb. 10, 7:00 - 9:00 pm (Band Shack with Kim Souza)</li>
				<li>Feb. 12, 9:00 - 11:00 pm (Band Shack with Shea Ritchie)</li></ul>
			<ul class="futureinfolist"><span class="boldtext">Auditions</span>
				<li>Feb. 12, 1:00 pm - First Cuts (Oak West, Tressider)</li>
				<li>Feb. 14, 8:00 am - Second Cuts (Band Shack)</li>
				<li>Feb. 14, TBA - Final Cuts (Band Shack)</li></ul>
			<ul class="futureinfolist"><span class="boldtext">Other</span>
				<li>Feb. 13, 5:00 pm - Dollie Reunion <br>(Come watch past and current dollie years perform at the Men\'s Basketball Game)</li></ul>	
			</p></div>';	
		}
		
	echo		
		'<p align="center"><br><span class="title">2010 Audition Video</span></p>
		<div class="videobox">
			<p align="center" ><object width="560" height="340"><param name="movie" value="http://www.youtube.com/v/Rc_b53HmJcw&hl=en_US&fs=1&rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/Rc_b53HmJcw&hl=en_US&fs=1&rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="560" height="340"></embed></object></p>
		</div>';
		
		//2009 Video:
		//<span class="title" font-size="10pt"><br>2010 Audition Video</span><br><br><object width="425" height="344">
//			<param name="movie" value="http://www.youtube.com/v/k0CmFxzL1i0&hl=en&fs=1&rel=0"></param><param name="allowFullScreen" value="true"></param>
//			<param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/k0CmFxzL1i0&hl=en&fs=1&rel=0" type="application/x-shockwave-flash" 
//			allowscriptaccess="always" allowfullscreen="true" width="425" height="344"></embed></object>
		
	
	if($auditionseason == true)	echo '<p align="center"><br><span class="title">General Audition Information</span></p>';
		
	echo	
		'<div class="futurecontent">
			<p>
				<a name="generalinfo"></a>
				<span class="boldtext">When are tryouts?<br></span>
				Auditions begin at the very end of January/early February with workshops, and lead up to 3 rounds of auditions in mid February. 
				Workshops are not mandatory, however very helpful as each ProDo (Prospective Dollie) must <strong>learn 2 dances from the current Dollie year, 
				and then choreograph one routine to a given piece of band music.</strong> To be eligible to audition, the Stanford student must be in their freshmen, 
				sophomore, or junior year (...a Dollie starts in May of one year, and ends in May of the next).
			</p>
			<p>
				<span class="boldtext">When are workshops?<br></span>
				Workshops are held in a dance studio (most recently in EPC) and are very similar to a dance class. 
				The current year of dollies will be there to help ProDos learn choreography, answer any questions and help them perfect their performance. 
				Because the judging is left up to old dollies and band members, these workshops are casual and stress free!
			</p>
			<p>
				<ul class="futureinfolist"><span class="boldtext">The Auditions:<br></span>
					<li><strong>Round 1:</strong> The first round is held in a dance studio / dance space in front of former dollies, drum majors, and band managers. 
						This is the best place as a ProDo to <em>show your dance abilities.</em></li>
					<li><strong>Round 2:</strong> ProDos who are chosen to continue will perform the routines again in front of the band in the morning of "Dollie Day". 
						It is best to think of this experience as amazingly fun, and it is the perfect place as a ProDo to <em>show of how well you can perform.</em></li>
					<li><strong>Round 3:</strong> After the second round, a select few ProDos who are left are then asked to attend the "ProDo" party, 
						an event where band members can meet the top ProDos, and old dollies and important Band Staph members will hold interviews. 
						(Nothing scary!) <em>This is the perfect place for a ProDo\'s personality to shine!</em></li>
				</ul>
			</p>
			<p>
				<span class="boldtext">The Chosen:<br></span>
				The new dollies are chosen and announced within a day.  After that, the selected 5 have approximately 10 weeks to learn 10 dances from former and current dollies 
				to perform at their "Dollie Splash" debut at the beginning of May.
			</p>
		</div> ';
	
} // END FUTURE SECTION AUDITIONS PAGE

// ***********************************************  FUTURE SECTION CONTACTS PAGE *********************************
elseif($tab == 'contacts' && $index == 2) {

	echo '<p align="center"><span class="title">Contact Information</span></p>
		<center><div class="contacttext">';
			if($selected == 'sent') echo '<p class="contactalert">* Your message has been sent.  Thank you for your input/questions! *<br><br></p>';
				$selected = 'auditions';
			echo '<small>Please feel free to contact the current dollies or Assistant Band Manager (Dollie Daddy) with any questions regarding auditions. 
				To do so, enter your name, email address, and questions/comments in the form below and press send. Your message will be sent directly to the current dollies, 
				and a confirmation email will be sent to you.<br><br><center>';

			include('contact-form.php');	
			
			echo '</center>If you have questions/comments not regarding auditions, please refer to the <a href="tabs.php?ind=3&tab=contacts" target="inline">general contacts</a>
				page for further instruction.</small><br><br>';

		echo '</div></center>';

} // END FUTURE SECTION CONTACTS PAGE

// ***********************************************  PAST SECTION MAIN PAGE *********************************
elseif($page == 0 && $decade== '')  {

		echo '<p align="center">
			<span class="title">We present to you... <br>the stunning dancers of years past! <br></span><br>
			<a href="tabs.php?pg=0&ind=0&tab=main&dec=1970&yea=1" target="inline"><img src="photos/small/7172-image1_t.jpg" border="0"></a>
			<a href="tabs.php?pg=0&ind=1&tab=main&dec=1970&yea=3" target="inline"><img src="photos/small/7374-1_t.jpg" border="0"></a>
			<a href="tabs.php?pg=0&ind=1&tab=main&dec=2000&yea=4" target="inline"><img src="photos/small/0405-image3_t.jpg" border="0"></a>
			<span class="caption"><br>(Left: Sheri Sinykin, 1971-1972 Dollie)<br>(Middle: Jacki Nelson, 1973-1974 Dollie - &copy; Alan Mela 1973)
				<br>(Right: Lisa Asari, 2004-2005 Dollie - &copy; Robby Beyers 2004)</span>
			</p>
		<div class="pastcontent">
			
				Although they may no longer put on the red dress, their elegant kicks and Honky Tonk grinds have left an indelible mark on generations of Stanford fans. 
				They have added charm, grace, and good looks to LSJUMB\'s already impressive repertoire.
			</p>
			<p>
				<strong>Please explore the drop-down menu at the top of the page to learn more about a specific year of dollies!  </strong>
				Or, select a tab to see <a href="tabs.php?pg=0&ind=1&tab=photos" target="inline">photos</a> from reunions or to learn more about their growing history.
			</p>
			<p>
				If you are a Dollie alumna and wish to get information about each year\'s Dollie Day, Dollie Reunion, and Dollie Splash, amongst other things, 
				please <a href="tabs.php?ind=3&sel=emaillist" target="inline">click here</a> and use our contact form to subscribe to the Dollie\'s official email list.
				If you wish to add information about your year or the history of dollies to this site, 
				please <a href="tabs.php?ind=3&sel=dolliesite" target="inline">click here</a> and use our contact form to send a message to our Webmaster, Carrie Edwards (Dollie in 04/05).
			</p>
		</div> ';
} // END PAST SECTION MAIN PAGE

// ***********************************************  FUTURE SECTION MAIN PAGE *********************************
elseif($page == 2 && $tab = 'main') {

	echo '<p align="center">
	<span class="title">Congratulations to the <br> 2014-2015 Stanford Dollies!</span><br></p>';
	echo '<p align="center">';
		?>  <!--[if IE]><table class="nametable"><tr><td><![endif]--> <?
		echo '<ul class="nametable">';
			echo '<li>Erika Nguyen</li>
				<li>Aubriana Menendez</li>
				<li>Martha Collins</li>
				<li>Shelby Mynhier</li>
				<li>Jordan Huelskamp</li>';
		echo '</ul><br>'; 
		
		/*echo '<center><img src="images/5dollieslogo.jpg"><br></center>'; */
		
		?>  <!--[if IE]></td></tr></table><![endif]--> 
         		<!--</p><p align="center">These Dollies will make their big debut <br>at Dollie Splash this May!</p>-->
		<?

	echo '<div class="futurecontent2">
			 <ul class="futureinfolist"><span class="boldtext">Interested in the 2015-2016 Stanford Dollie Auditions? </span>
			 <li>Explore the above tabs to find more information on <a href="tabs.php?pg=2&ind=2&tab=auditions&dec=' . $decade . '&yea=' . $year . '" target="inline">this year\'s auditions.</a> </li>
			 <li>Read "The Stanford Daily" articles about the <a href="http://www.stanforddaily.com/cgi-bin/?p=1030158">2009-2010</a> 
			 Stanford Dollies, and their <a href="http://www.stanforddaily.com/cgi-bin/?p=1030482">debut</a>.
			 <!--<a href="http://daily.stanford.org/article/2007/2/20/newDolliesChosen">2007-2008 Stanford Dollies
			 </a> or <a href="http://daily.stanford.edu/article/2007/2/9/roadToADollieDream"> the 2007 auditions.</a>-->
			 </li>
			 
			 		 
			 <li>Be sure to browse the website to learn more about the dollies of the <a href="index2.php?pg=0" target="_top">past</a> and <a href="index2.php?pg=1" target="_top">present</a>.</li>
		 	 </ul>
		</div>
		<div class="futurecontent">	
			<p>
				<span class="boldtext">Who are the Stanford Dollies?</span><br>
				Each year, the Leland Stanford Junior University Marching Band is proud to present five divine divas of dance. 
				Together, we make merry musical mayhem all over the Peninsula and the world. <strong>What are Dollies?</strong> Well, first of all, they are awesome. 
				Secondarily they should not be confused with the Stanford Cheerleaders. 
				<strong>Dollies dance to the live music of the band with choreography entirely of their own (and past Dollies\') design.</strong> 
				Their style ranges from modern to ballet to jazz, but is always unique and impressive. A long Stanford tradition, 
				the Dollies perform at athletic events of every ilk and at rallies with the LSJUMB. 
				They can always be recognized, not only by their stunning attire, but also by their charming smiles and throng of adoring fans. 
				Dollies are often involved in various dance ensembles on campus and off as members of and choreographers for many programs, 
				but above all, the Dollies are the coolest thing to hit Stanford since open kitchen.
			</p>
			<p>
				<span class="boldtext">How are they chosen?</span><br>
				Each group of five\'s glorious reign runs one year starting from the first weekend in May, or "Dollie Splash."
				A panel of judges evaluates each <strong>ProDo (Prospective Dollie)</strong> on three dances: one "traditional," one current, and one that you will choreograph all by yourself. 
				All three dances are set to the music of The One, The Only, The Truly Incomparable, <a target="top" href="http://lsjumb.stanford.edu/">Leland Stanford Junior University Marching Band.</a> 
				For a few weeks leading up to Dollie Tryouts, the current Dollies have practices and workshops for you to learn the dances and clean your choreography, 
				as well as get to know exactly what being a Dollie is all about.
			</p>
			<p>
				This section of the web page will answer questions you might have about the <strong>Dollie Audition Process</strong>, becoming a ProDo, 
				and other information you might need to help you learn about future Stanford Dollies!
			</p>
			<p>
				If you have any questions about the web page, please <a href="tabs.php?ind=3&sel=1">click here</a> and use our general contact form to email our Webmaster. 
				If you have any questions about the audition process, please refer to the 
				<a href="tabs.php?pg=2&ind=2&tab=contacts&dec=' . $decade . '&yea=' . $year . '" target="inline">contacts tab above.</a>
			</p>
		</div> ';
} // END FUTURE SECTION MAIN PAGE

// ***********************************************  DOLLIE YEAR MAIN CONTENT PAGE *********************************
else {
	echo '<div class="content2">
	 	 <span class="title">The Stanford Dollies<br>' . $yearstart . ' - ' . $yearend . '<br></span>';
		 
		 /* If current year doesn't have photos, add their year start as an item */
		 if($yearstart >= '1970' && $yearstart != '1983' && $yearstart != '1971' && $yearstart !='2014' || $yearstart == '1960' || $yearstart == '1961'|| $yearstart == '1956'|| $yearstart == '1957') echo '<a href="tabs.php?pg=0&ind=1&tab=photos&dec=' . $decade . '&yea=' . $year . '" target="inline" title="Click Here for More Photos of this Year!">';
		 echo '<img src="photos/group/dollie-' . $groupimage . '.jpg" border="0"><br>';  
		 if($yearstart >= '1970' && $yearstart != '1983' && $yearstart != '1971'&& $yearstart !='2014'  || $yearstart == '1960' || $yearstart == '1961'|| $yearstart == '1956'|| $yearstart == '1957') echo '</a>';
		 if($imagecaption != '') echo '<span class="caption">' . $imagecaption . '</span><br><br>';
		 
		?>  <!--[if IE]><table class="nametable"><tr><td><![endif]--> <?
		
			echo '<ul class="nametable">';
				for($i = 0; $i < count($thedollienames); $i++) {
					echo '<li>' . $thedollienames[$i] . ' ' . $thedolliegraddates[$i] . '</li>';
				}
			echo '</ul>';
			
		?>  <!--[if IE]></td></tr></table><br><![endif]--> <?
		
		echo '</div>
		<div class="content1"> ';
	   
		if($boldline_b && $page != 1) {
			echo '<ul id="boldnonlist"><p>';
				for($i = 0; $i < count($boldline_b); $i++) {
					echo '<span class="boldtext">' . $boldline_b[$i] . ' </span><span class="text">' . $boldline_c[$i] . '</span><br>';
				}		
			echo '</p></ul>';
		}
		
		if($tablehead && $page != 1) {
			for($i = 0; $i < count($tablehead); $i++) {
				echo '<ul class="infolist"><span class="boldtext">' . $tablehead[$i] . '</span>';
				for($j = 0; $j < count($tablecont[$i]); $j++) {
					echo '<li>' . $tablecont[$i][$j] . '</li>';
				}
				echo '</ul>';
			}
		}
		 
	//<span style="text-align:center;">Audition Video, 2005
	//<p><embed style="width:400px; height:326px;" id="VideoPlayback" type="application/x-shockwave-flash" src="http://video.google.com/googleplayer.swf?docId=3518691763358825130&hl=en" flashvars=""></embed></p>
	//</span>
	
		// Addition for Present Dollie Section -----------------------------------------

	  
	echo '</div> ';
	
	if($page == 1) {
		echo'<div class="pastcontent">
			<p>
				<span class="boldtext">Who are the Stanford Dollies?</span><br>
				Each year, the Leland Stanford Junior University Marching Band is proud to present five divine divas of dance. 
				Together, we make merry musical mayhem all over the Peninsula and the world. 
				Dollies dance to the live music of the band with choreography entirely of their own (and <a href="index2.php?pg=0" target="_top">past</a> Dollies\') design. 
				Their style ranges from modern to ballet to jazz, but is always unique and impressive. <br><br>A long Stanford tradition, 
				the Dollies perform at athletic events of every ilk and at rallies with the <a href="http://lsjumb.stanford.edu" target="_blank">LSJUMB</a>. 
				They can always be recognized, not only by their stunning attire, but also by their charming smiles and throng of adoring fans. 
				Dollies are often involved in various dance ensembles on campus and off as members of and choreographers for many programs, 
				but above all, the Dollies are the coolest thing to hit Stanford since open kitchen.<br><br>
				
				<span class="boldtext">Follow the Stanford Dollies!</span><br>Get the most up-to-date information and happenings involving the current Stanford Dollies on <a href="https://twitter.com/stanforddollies" target="_blank">Twitter</a>, <a href="http://www.youtube.com/user/TheStanfordDollies/videos?flow=grid&view=0" target="_blank">YouTube</a> and <a href="http://www.facebook.com/pages/Stanford-Dollies/185547312524?fref=ts" target="_blank">Facebook</a>!  <br><br><a href="https://twitter.com/stanforddollies" class="twitter-follow-button" data-show-count="false">Follow @thestanforddollies</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				
				<a href="http://www.youtube.com/user/TheStanfordDollies" target="_blank"><img style="padding-left:10px;margin-bottom:1px;" src="//s.ytimg.com/yt/img/creators_corner/Watch_me_on_YouTube/90x15_watchon_red.png" alt="Subscribe to me on YouTube"/></a><img src="//www.youtube-nocookie.com/gen_204?feature=creators_cornier-//s.ytimg.com/yt/img/creators_corner/Watch_me_on_YouTube/90x15_watchon_red.png" style="display: none"/>
				
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
  					var js, fjs = d.getElementsByTagName(s)[0];
  					if (d.getElementById(id)) return;
  					js = d.createElement(s); js.id = id;
  					js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  					fjs.parentNode.insertBefore(js, fjs);
				}(document, "script", "facebook-jssdk"));</script>
				
				<div class="fb-like" data-href="http://www.facebook.com/pages/Stanford-Dollies/185547312524"
				 data-send="true" data-width="500" height="62px" data-show-faces="true" data-font="verdana"></div>

				
			</p>
			</div>';
			
			//<a href="http://twitter.com/stanforddollies" target="new"><img src="images/twitter_logo.png" ></a>
		}		
} // END DOLLIE YEAR MAIN CONTENT PAGE

			
			







?>


</body>
</html>
