<!DOCTYPE html>
<html>

<link href="myStyle.css" rel="stylesheet" type="text/css">
<head>
<script>
function check(){
	var Op=document.getElementsByName("vote");
	var i=0;
	var num=0;
	for(i=0;i<11;i++)
	{
		if(Op[i].checked)
		{
			num++;
		}
	}
	if(num==0)
	{
		alert("you must selct one");
	}
	else
	{
		document.getElementById("inputs").submit();
	}
	}
		
		</script>
</head>
<body>
<div class="background" >
  <div class="transbox" >
    <p>The Official Future Fan Club</p>
	<p2>Moderated/Created by: Colin Walsh</p>
  </div>
</div>
<ul >
  <li><a  href="mainPage.php">Home</a></li>
  <li><a  href="poll.php">Poll</a></li>
  <li><a  href="results.php">Results</a></li>
 
</ul>

<div class="bodyBackground" style= "margin: 0; height:800px">
<form class="form" id = "inputs" action="results.php" method="post">
        <div class="poll" style= margin:60px>
	<h3 class="h3">What Is Future's Best Song?</h3>

	<input  type="radio" name="vote" value="0" onclick="displaySubmit()">
	1. Digital Dash:
	<br><input type="radio" name="vote" value="1" onclick="displaySubmit()">
	2. Big Rings:
	<br><input type="radio" name="vote" value="2" onclick="displaySubmit()">
	3. Live From the Gutter:
	<br><input type="radio" name="vote" value="3" onclick="displaySubmit()">
	4.Diamonds Dancing:
	<br><input type="radio" name="vote" value="4" onclick="displaySubmit()">
	5. Scholarship:
	<br><input type="radio" name="vote" value="5" onclick="displaySubmit()">
	6. Plastic Bags
	<br><input type="radio" name="vote" value="6" onclick="displaySubmit()">
	7. I'm the Plug:
	<br><input type="radio" name="vote" value="7" onclick="displaySubmit()">
	8. Change Locations:
	<br><input type="radio" name="vote" value="8" onclick="displaySubmit()">
	9. Jumpman:
	<br><input type="radio" name="vote" value="9" onclick="displaySubmit()">
	10. Jersey:
	<br><input type="radio" name="vote" value="10" onclick="displaySubmit()">
	11. 30 for 30 Freestyle:<br><br><br>

	<center><button  type="button" onClick="check()"> SUBMIT</button></center>
<br>

</form>

</div>
<br>
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
