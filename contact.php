<?
$to = $_REQUEST['sendto'] ; 
$from = $_REQUEST['Email'] ; 
$name = $_REQUEST['Name'] ; 
$headers = "From: $from"; 
$subject = "Stanford Dollies - Web Contact Data"; 

if($to == 4) {
	$sendto = 'assman@lsjumb.com, dolliewebmaster@carrie-ann.com';
	$totext = 'Dollie Daddy (Assistant Stanford Band Manager)';	
}
if($to == 2) {
	$sendto = 'cae@stanfordalumni.org, dolliewebmaster@carrie-ann.com';
	$totext = 'Stanford Dollie Webmaster';	
}
if($to == 3) {
	$sendto = 'stanforddollies@gmail.com, cae@stanfordalumni.org';
	$totext = 'Current Stanford Dollies';
}

$fields = array(); 
$fields{"Name"} = "Name"; 
$fields{"Affiliation"} = "Affiliation"; 
$fields{"Email"} = "Email"; 
$fields{"Phone"} = "Phone"; 
$fields{"Message"} = "Message"; 

$body = "Message Generated from dollies.stanford.edu:\n\n"; foreach($fields as $a => $b){ $body .= sprintf("%s: %s\n",$b,$_REQUEST[$a]); }

$headers2 = "From: noreply@dollies.stanford.edu"; 
$subject2 = "Thank you for contacting the Stanford Dollies"; 
$autoreply = "Confirmation Email:\nThank you for contacting \"" . $totext . "\" from the Stanford Dollies web site (http://dollies.stanford.edu).  Your message has been sent, and we hope to get back to you soon.";

if($from == '') print "You have not entered an email, please go back and try again"; 
else { 
	if($name == '') { print "You have not entered a name, please go back and try again"; } 
	else { 
		$send = mail($sendto, $subject, $body, $headers); 
		$send2 = mail($from, $subject2, $autoreply, $headers2); 
		if($send)  { header( "Location: content.php?pg=1&ind=3&tab=contacts&sel=sent" ); } 
		else  { print "We encountered an error sending your mail, please notify webmaster@YourCompany.com"; } 
	}
} 
?>