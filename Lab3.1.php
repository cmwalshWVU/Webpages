<!DOCTYPE html>
<html>
 <head>


        <style>
            table{margin-left:auto;
                margin-right:auto;
                text-align:center;
                width:80%;
            }
            td{vertical-align:top;text-align:left;}
        </style>
	<script>
	function addBox(){
		var number = document.getElementById("number").value;
		var table = document.getElementById("table");
		
		while (table.hasChildNodes()) {
                	table.removeChild(table.lastChild);
            	}
		for(i=0; i<number; i++){
			var input = document.createElement("input");
			input.type ="number";
              		input.name = "member" + i;
			table.appendChild(input);
			table.appendChild(document.createElement("br"));
		}
	}

	</script>
</head>
<body>	
	
	Enter Number Of Input Fields:<br>        
        <input id="number" type="number"><br>
   	 <button type="button" id="createBoxes" onclick="addBox()">Submit</button>
	<form action="processform.php" method="post">      
	<div id="table">
	</div>
   	<input type="submit" value="process" ><br>

        </form>  

	<?php   //read file & display items
            $itemFile = fopen("file.txt","r") or die("Unable to open file!");
            while (!feof($itemFile)){            
                echo "Last Average Was: " .fgets($itemFile) . " " . fgets($itemFile) . "<br>";
            }
            fclose($itemFile);
        ?>
	
</body>
<html
