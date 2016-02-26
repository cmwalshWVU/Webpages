<!DOCTYPE html>
<html>
<link href="myStyle.css" rel="stylesheet" type="text/css">
<head>

</head>
<body>
<?php  $my_file = 'file.txt';?>

<div class="background" >
  <div class="transbox" >
    <p>The Official Future Fan Club</p>
	<p2>Moderated/Created by: Colin Walsh</p>
	

  </div>
</div>
<ul style="float:left;list-style-type:none;">
  <li><a href="mainPage.php">Home</a></li>
  <li><a href="poll.php">Poll</a></li>
  <li><a href="results.php">Results</a></li>
 
</ul>
<div class="bodyBackground" style= height:800px>
<center>
        <div class="pollR" style= margin:60px >
	<h3 class="h3">Results for: What Is Future's Best Song?</h3>

<?php
	$DD = 0;
        $BR = 0;
        $LF = 0;
        $DiD = 0;
        $SC = 0;
        $PB = 0;
        $IP = 0;
        $CL = 0; 
        $JM = 0;
        $JE = 0;    
   	$choice= $_POST["vote"];     
                   if(fopen("file.txt","r"))
                    {
                        $itemFile = fopen("file.txt","r");
                        $DD = fgets($itemFile);
                        $DD=trim($DD);
                        $BR = fgets($itemFile);
                        $BR =trim($BR);
                        $LF = fgets($itemFile);
                        $LF =trim($LF);
                        $DiD = fgets($itemFile);
                        $DiD=trim($DiD);
                        $SC = fgets($itemFile);
                        $SC=trim($SC);
                        $PB = fgets($itemFile);
                        $PB=trim($PB);
                        $IP = fgets($itemFile);
                        $IP=trim($IP);
                        $CL = fgets($itemFile);
                        $CL=trim($CL);
                        $JM = fgets($itemFile);
                        $JM =trim($JM);
                        $JE = fgets($itemFile);
                        $JE=trim($JE);
                        $FREE = fgets($itemFile);
                        $FREE=trim($FREE);
                        fclose("file.txt");
                    }
                    if($choice == "0"){
			$DD = $DD + 1;}
		    if($choice == "1"){
			$BR = $BR + 1;}
		    if($choice == "2"){
			$LF = $LF + 1;}
                    if($choice == "3"){
			$DiD = $DiD + 1;}
		    if($choice == "4"){
			$SC = $SC + 1;}
		    if($choice == "5"){
			$PB = $PB + 1;}
		    if($choice == "6"){
			$IP = $IP + 1;}
                    if($choice == "7"){
			$CL = $CL + 1;}
		    if($choice == "8"){
			$JM = $JM + 1;}
		    if($choice == "9"){
			$JE = $JE + 1;}
		    if($choice == "10"){
			$FREE = $FREE + 1;}
		
		$resultFile = fopen("file.txt","w");
		    fwrite($resultFile, $DD . "\n" . $BR . "\n" . $LF . "\n" . $DiD . "\n" . 				$SC . "\n" . $PB . "\n" . $IP . "\n" . $CL . "\n" . $JM . "\n" . $JE . "\n" . 				$FREE . "\n");
		   fclose($resultFile);

                    $total = $DD + $BR + $LF + $DiD + $SC + $PB + $IP + $CL +$JM + $JE + $FREE;
                    $DDp = ($DD/($total))*100;
                    $BRp = ($BR/($total))*100;
                    $LFp = ($LF/($total))*100;
                    $DiDp = ($DiD/($total))*100;
                    $SCp = ($SC/($total))*100;
                    $PBp = ($PB/($total))*100;
                    $IPp = ($IP/($total))*100;
	            $CLp=  ($CL/($total))*100;
                    $JMp = ($JM/($total))*100;
                    $JEp = ($JE/($total))*100;
                    $FREEp = ($FREE/($total))*100;
                   
                    echo round($DDp)."% =>"." Digital Dash "."<br>";
                    echo round($BRp)."% => Big Rings "."<br>";
                    echo round($LFp)."% => Live From the Gutter"."<br>";
                    echo round($DiDp)."% => Diamonds Dancing "."<br>";
                    echo round($SCp)."% => Scholarship "."<br>";
                    echo round($PBp)."% => Plastic Bags "."<br>";
                    echo round($IPp)."% => I'm the Plug "."<br>";
                    echo round($CLp)."% => Change Locations "."<br>";
                    echo round($JMp)."% => Jumpman "."<br>";
                    echo round($JEp)."% =>Jersey "."<br>";
                    echo round($FREEp)."% => 30 for 30 Freestyle "."<br>";
                    echo "<br>";

                    ?>





</div></center>
</div>

<ul style="
    bottom: 0;
    width: 100%; border=1">
  <li><a href="mainPage.php">Home</a></li>
  <li><a href="poll.php">Poll</a></li>
  <li><a href="results.php">Contact</a></li>
</ul>

</body>

</html>
