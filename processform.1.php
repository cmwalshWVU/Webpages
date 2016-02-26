<!DOCTYPE html>
<html>
    <head>
        <title>Reading from POST</title>
	
    </head>
    <body>
	<?php  $my_file = 'file.txt';?>
        <?php   //read file & display items
        $total = 0;
	$numEntries=0;
	$average=0;
        foreach( $_POST as $stuff ) {            
                        
            if(is_numeric($stuff)){
                $total += $stuff;
		$numEntries += 1;
		}
	}
	$average = $total/$numEntries;
	
	echo nl2br("The average is: " . $average);
	
	$myFileLink = fopen($my_file, 'w') or die("can't open file");
	$newContents = $average;
	fwrite($myFileLink, $newContents);
	fclose($myFileLink);
    ?>
	        
    </body>
</html>

