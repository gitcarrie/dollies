<?

// Starts with $decade and $year then finds corresponding content
// Creates the follow variables: $thedollienames[], $thedolliegraddates[], $imagetype, $imagecaption, $boldline_b[], $boldline_c[], $tablehead[], $tablecont[][]

	$fp = fopen('names.txt','r');
	if (!$fp){
		echo 'ERROR: Unable to open file. names.txt </table></body></html>';
		exit;
	}
	
	$dol = 0;
	$thedollienames = array();
	
	while (!feof($fp)) {
		$line = fgets($fp++, 2048);
		if($line[0] == '-') { //Decade Start
			$decy = substr($line,1,4);
			if($decy == $decade) {
				while (!feof($fp)) {
					$line = fgets($fp++, 2048);
					if($line[0] == '>') {
						if($line[2] == $year) {
							while (!feof($fp)) {
								$line = fgets($fp++, 2048);
								if($line[0] == '.')	{					
									list ($x,$thedollienames[$dol], $thedolliegraddates[$dol]) = split ('	', $line);
									$dol = $dol + 1;
								}
								else break;
							}
							break;
						}
					}				
				}			
			}		
		}
	}
	
	$fp2 = fopen('content.txt','r');
	if (!$fp2){
		echo 'ERROR: Unable to open file. content.txt </table></body></html>';
		exit;
	}
	
	$dol = 0;
	$bcount = 0;
	$tcount = 0;
	$ccount = 0;
	
	
	while (!feof($fp2)) {
		$line = fgets($fp2++, 2048);
		if($line[0] == '-') { //Decade Start
			$dec = substr($line,1,4);
			if($dec == $decade) {
				while (!feof($fp2)) {
					$line = fgets($fp2++, 2048);
					if($line[0] == '>') {
						if($line[2] == $year) { // Correct Year
							while (!feof($fp2)) {
								$line = fgets($fp2++, 2048);
								if($line[0] == '~')	{					
									list ($x,$imagetype, $imagecaption) = split ('	', $line);
								}
								elseif($line[0] == '|') {
									list ($x,$boldline_b[$bcount], $boldline_c[$bcount]) = split ('	', $line);
									$bcount = $bcount + 1;								
								}
								elseif($line[0] == 't') {
									list ($x,$tablehead[$tcount]) = split ('	', $line);
									$tcount = $tcount + 1;
									$ccount = 0;
								}	
								elseif($line[0] == '.') {
									list ($x,$tablecont[$tcount-1][$ccount]) = split ('	', $line);
									$ccount = $ccount + 1;
								}
								else break;						
							}
							break;
						}
					}				
				}
				break;			
			}		
		}
	}
		
?>
