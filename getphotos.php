<?

// Starts with $decade and $year then finds corresponding content
// Creates the follow variables: $photo1[], $photocaptions[], $photo2[]

	$fp = fopen('photocontent.txt','r');
	if (!$fp){
		echo 'ERROR: Unable to open file. photocontent.txt </table></body></html>';
		exit;
	}
	
	$count = 0;
	$photos = array();
	
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
									list ($x,$photo1[$count], $photocaptions[$count], $photo2[$count]) = split ('	', $line);
									$count = $count + 1;
								}
								else break;
							}
							break;
						}
					}				
				}			
			}		
		}
		elseif($line[0] == 'R' && $mainpastpage) {
			while (!feof($fp)) {
				$line = fgets($fp++, 2048);
				if($line[0] == '.')	{					
					list ($x,$photo1[$count], $photocaptions[$count], $photo2[$count]) = split ('	', $line);
					$count = $count + 1;
				}
				else break;
			}
			break;
		}
	}
		
?>
