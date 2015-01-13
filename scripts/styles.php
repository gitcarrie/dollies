<style type="text/css">

/* ------------------------- Body and Background ------------------------ */

html,body {
	background-color: #FFFFFF;
	height:100%;
	width:100%;
	padding:0;
	margin:0;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	color:#333;
	line-height:1.3;
	font-size: 11px;
	letter-spacing:0.01em;
}

img, div, a, li { behavior: url(iepngfix.htc);}

a:link { font-size: 10pt; color:#CC0000; text-decoration: none; }
a:visited { font-size: 10pt; color: #CC0000; text-decoration: none; }
a:hover { font-size: 10pt; color:#990000; text-decoration: underline; }

/* ------------------------- Text / Typography ------------------------ */


.boldtext {
	font-weight:bold;
	text-transform:capitalize;
	color:#780C0F;
	font-style:normal;
}

.boldtext2 {
	font-weight:bold;
	text-transform:capitalize;
	color:#780C0F;
	font-style:normal;
	font-size:11px;
}

.title {
	font-size:13px;
	font-weight:bold;
	text-align:center;
	text-transform:none;
	font-family:Georgia, "Times New Roman", Times, serif;
}

.centertxt {
	font-align:center;
}

.error {
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:14px;
	background-color:white;
	color:#990000;
}

/* ------------------------- Navigation ------------------- */
.navcontainer { position:relative; width:100%; height:100%; }
.nav { position:absolute;right:-50;top:20px;  }
.nav img { float:right; }

.bottomnav {
	font-size:10px;
	color:#999999;
	text-align:center;
}
.bottomnav td { vertical-align:top;}
.bottomnav a:link { font-size: 10px; color:#999999; text-decoration: none; }
.bottomnav a:visited { font-size: 10px; color:#999999; text-decoration: none; }
.bottomnav a:hover { font-size: 10px; color:#990000; text-decoration: underline; }

.topnav {
	font-size:9px;
	color:#990000;
	text-align:center;
	background-color:white;
}
.topnav td { vertical-align:top;}
.topnav a:link, .topnav a:visited { font-size: 9px; color:#999999; text-decoration: none; }
.topnav a:hover { font-size: 9px; color:#990000; text-decoration: none; }
.topnavselected a:link, .topnavselected a:visited, .topnavselected a:hover { font-size: 9px; color:#990000; text-decoration: none; }

.navdivider { color:#CCCCCC; }

.righttabnav {
	position:absolute;
	right:25px;
	top:5px;
	width:200px;
	text-align:right;
	font-size:9px;
	color:#990000;
	background-color:white;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-weight:normal;
}
.righttabnav a:link, .righttabnav a:visited { font-size: 9px; color:#999999; text-decoration: none; }
.righttabnav a:hover { font-size: 9px; color:#990000; text-decoration: none; }
.righttabnavselected a:link, .righttabnavselected a:visited, .righttabnavselected a:hover { font-size: 9px; color:#990000; text-decoration: none; }

/* ------------------------- Tab Whitespaces ------------------- */

.mainwhite {
	position:absolute;
	top:24;
	left:32px;
	width:60px;
	background-color:white;
	height:5px;
	
}
.photoswhite {
	position:absolute;
	top:24;
	left:96px;
	width:63px;
	background-color:white;
	height:5px;
}
.auditionswhite {
	position:absolute;
	top:24;
	left:97px;
	width:80px;
	background-color:white;
	height:5px;
}
.contactswhite {
	position:absolute;
	top:24;
	left:183px;
	width:65px;
	background-color:white;
	height:5px;
}

.contacts2white {
	position:absolute;
	top:24;
	left:34px;
	width:65px;
	background-color:white;
	height:5px;
}

/* ------------------------- Lists ------------------------ */

.blanklist { padding:5px; }
.infolist { list-style-image: url("images/bullet.png");	marker-offset:50; }
.infolist img {behavior: url(iepngfix.htc);}
.futureinfolist { list-style-image: url("images/bullet.png");	margin-left: -38px; behavior: url(iepngfix.htc);}
.contactlist { list-style-image: url("images/bullet.png");	margin-left: -38px; behavior: url(iepngfix.htc);}
#boldnonlist {	line-height:15px; }
#boldnonlist2 { line-height:15px; font-size:10pt; width:550px; margin:0 auto; }

/* ------------------------- Frame Images ------------------------ */

#pastside {
	height:100%;
	width:142px;
	min-width:142px;
	align:right;
	valign:top;
	white-space:nowrap;
	background-color:white;
	background: url("images/side/past-dresses.gif") no-repeat;
}
#presentside {
	height:100%;
	width:142px;
	min-width:142px;
	align:right;
	valign:top;
	background-color:white;
	background: url("images/side/present-dresses.gif") no-repeat;
}
#futureside {
	height:100%;
	align:right;
	width:142px;
	min-width:142px;
	white-space:nowrap;
	valign:top;
	background-color:white;
	background: url("images/side/future-dresses.gif") no-repeat;
}

/* ------------------------- Past Section ------------------------ */

.pastcontent {
	width:90%;
	margin: 0 auto;
	max-width:550px;
	font-size: 10pt;
}

.nametable { 
	text-align:left; 
	min-width:10px; 
	display:table; 
	margin:0 auto; 
	list-style-type:decimal; 
	padding-right:15px;
}

#formerdolliearchive {
	position:absolute;
	top:32px;
	border: 0px;
	width: 100px;
	left:50%;
	margin-left:-35px;
	z-index:100;
}

/* ------------------------- Future Section ------------------------ */

.futurecontent {
	width:90%;
	margin: 6 auto;
	max-width:600px;
	font-size:10pt;
}

.futurecontent2 {
	width:90%;
	margin: 6 auto;
	max-width:600px;
	font-size:10pt;
}

.contacttable {
	width:auto;
	font-size:10pt;
	margin: 0 auto;
	border-collapse: collapse;
	
}
.contacttable td {
	vertical-align: top;
	padding: 2px 10px;
	border-style:none;

}

.contacttable th {
	vertical-align: top;
	padding: 2px 10px;
	font-weight:bold;
	text-align:left;
	border-style:none;
	color:#990000;
	width:100px;
}

/* -------------------------  Contact Related ------------------------ */

.contacttext {
	width:500px;
	max-width: 500px;
	margin: 0 auto;
	font-size:10pt;
	text-align:left;
}

.contactalert {
	max-width: 500px;
	width:90%;
	margin: 0 auto;
	font-size:10pt;
	color:#990000;
	text-align:center;
}

.contacttext a:link, .contacttext a:visited, .contactttext a:hover { font-size: 11px; }

.contacttable2 {
	width: 400px;
	margin: 0 auto;
	font-size:10pt;
	border: 1px;
	border-color:#999999;
	border-style:dashed;
	border-collapse:separate;
	background-color:#F5F5F5;
	
}
.contacttable2 td {
	vertical-align: top;
	padding: 3px 3px;
	border-style:none;

}

.contacttable2 th {
	vertical-align: top;
	padding: 3px 3px;
	font-weight:bold;
	text-align:left;
	border-style:none;
	color:#990000;
	width:100px;
}

/* ------------------------- Photo Related ------------------------ */

.caption {
	color:#999999;
	font-style:italic;
	font-size:11px;
}

.albumcaption {
	font-size:11px;
	font-style:italic;
	text-transform:capitalize;
	color:#666666;

}

.content1 {
	border:0px; 
	width:440px; 
	position:absolute; 
	left:50%; 
	margin-left:-230px; 
	text-align:left; 

}

.content2 {
	text-align:center; 
	font-size:12px;
}

/* --------------------------------- Front Page -----------------------------------------*/

#mainbackground {
	width:640px;
	height:615px;
	border:0;
	position:relative;
	left:50%;
	margin-top:5%;
	margin-bottom:5%;
	margin-left:-320px;
	/*background: url('images/main/dollies-back2.jpg') top no-repeat;*/
}
#maincontainer { position:absolute; width:100%; height:100%; }
#pastbutton {	position:absolute; width:90px; height:40px; border:0px; right:172px; top:190px; }
#presentbutton { position:absolute; width:90px; height:40px; border:0px; right:147px; top:231px; }
#futurebutton { position:absolute; width:90px; height:40px; border:0px; right:116px; top:272px;  }
#lsjumbbutton { position:absolute; width:90px; height:40px; border:0px; right:127px; top:314px;  }
#updatesbox { position:absolute; width:580px; height:150px; bottom:0px; left:60px; border:0; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px; font-style:italic; }


</style>

<!-- ********************************* End Default Styles **************************** -->

<!--[if IE]>
<style type="text/css">
.nametable { 
	text-align:left; 
	list-style-type:decimal; 
     border:0;
     font-size:12px;
}
.content1 {
	padding:0;
}

.pastcontent {
	max-width:550px;
     width:500px;
     position:absolute;
     left:50%;
     margin-left:-250px;
	font-size: 10pt;
}

.futurecontent {
     width:580px;
     position:absolute;
     left:50%;
     margin-left:-290px;
	font-size:10pt;
}

.futurecontent2 {
     width:580px;
	position:relative;
     left:50%;
     margin-left:-290px;
     padding-left:5px;
	font-size:10pt;
     z-index:10;
}

.futureinfolist { 
	list-style-image: url("images/bullet.png");	
     margin-left: 5;
     list-image-position: absolute;
     behavior: url(iepngfix.htc);
}

.contactlist { list-style-image: url("images/bullet.png");	margin-left: 5; list-image-position: absolute; behavior: url(iepngfix.htc);}

.futureinfolist li { 
	padding:0 0 0 10;
     margin-left:-10px;
}

.infolist li{ 
	padding:0 0 0 10;
     margin-left:-10px;	
}

.videobox {
	position: inherit;
     margin-top:90px;
     vertical-align:bottom;
}

</style>
<![endif]-->
