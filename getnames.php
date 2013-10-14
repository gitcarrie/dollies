<?

// Creates the follow variable arrays: $decades[], $pagedisplay[][], $yearwidth[][], $yearboxwidth[][], $dollienames[][][], $dolliegraddates[][][]
	$fp = fopen('names.txt','r');
	if (!$fp){
		echo 'ERROR: Unable to open file. names.txt </table></body></html>';
		exit;
	}
	
	$dec = 0;
	$yea = 0;
	$dol = 0;
	$decades = array();
	
	while (!feof($fp)) {
		$line = fgets($fp++, 2048); //use 2048 if very long lines
		if($line[0] == '-') { //Decade Start
			$yea = 0; //refresh year counter
			$decades[$dec] = substr($line,1,4);
			$dec = $dec + 1;
		}
		elseif($line[0] == '.') { //Dollie Name Start
			list ($x,$dollienames[$dec-1][$yea-1][$dol], $dolliegraddates[$dec-1][$yea-1][$dol]) = split ('	', $line);
			$dol = $dol + 1;
		}
		elseif($line[0] == '>') { //Year Start
			$dol = 0; //refresh dollie counter
			list ($x,$pagedisplay[$dec-1][$yea],$yearboxwidth[$dec-1][$yea]) = split ('	', $line);
			$yea = $yea + 1;
		}
		
	}

?>
