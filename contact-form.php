<form method="post" action="contact.php"> 
<table class="contacttable2"> 
<tr><td colspan=2><span class="boldtext">Stanford Dollie Contact Form:</span><br></td></tr>
<tr><td>To:<font color=#990000>*</font></td><td>

     <select name="sendto"> 
          <option value="1" <? if($selected == 1 || $selected == 'sent') echo 'selected';  ?>>Select Recipient:</option> 
          <option value="2" <? if($selected == 2 || $selected == 'dolliesite') echo 'selected';  ?>>Stanford Dollie Webmaster</option> 
          <option value="3" <? if($selected == 3 || $selected == 'auditions') echo 'selected';  ?>>The Current Stanford Dollies</option> 
          <option value="4" <? if($selected == 4 || $selected == 'emaillist') echo 'selected';  ?>>Dollie Daddy (Assistant Stanford Band Manager)</option> 
     </select>
     
</td></tr> 
<tr><td>Name:<font color=#990000>*</font></td><td><input size=40 name="Name"></td></tr> 
<tr><td>Email:<font color=#990000>*</font></td><td><input size=40 name="Email"></td></tr> 
<tr><td>Affiliation:</td><td><input size=40 name="Affiliation" <? 	if($selected=='emaillist' || $selected=='dolliesite') echo 'value="Former Dollie, <please enter dollie year>"'; 
														if($selected=='auditions') echo 'value="Prospective Dollie"' ?>></td></tr> 
<tr><td>Phone:</td><td><input size=40 name="Phone"></td></tr> 
<tr><td colspan=2>Comments/Message:</td></tr> 
<tr><td colspan=2 align=center><textarea name="Message" rows=5 cols=47 ><? if($selected=='emaillist') echo 'Please subscribe my email address to kickline@lists.stanford.edu'; ?></textarea></td></tr> 
<tr><td colspan=2 align=center><input type=submit name="send" value="Submit"></td></tr> 
<tr><td colspan=2 align=center><small><font color=#990000>*</font> indicates a required field</small></td></tr> 
</table> 
</form> 
