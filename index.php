<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unbenanntes Dokument</title>
</head>
<?php
	
	echo "<i>Voreinstellungen für das Spiel Cards of Pain treffen</i><br>";
	echo "<br>";
	echo "Einstellungen wählen";
	echo "<br>";
	
	if($anzeige == '');
	{
		echo "Step 1 - Spielzone";
		echo "<br>";
	
?>

	<form action="" method="post">
	  <input type="radio" name="spielzone" id="en" value="en" onclick="document.getElementById('self').style.display='none'; document.getElementById('defined').style.display='block';"> Zonen selbst definieren
	  <input type="radio" name="spielzone" id="de" value="de" onclick="document.getElementById('self').style.display='block'; document.getElementById('defined').style.display='none';"> Vorgeschlage Zonen

	<br>
		
	  <div id="self" style="display:none">

		<h2>Vorgeschlage Zonen</h2>
		<br>
		  Es wurde die Vordefinierten Spielzonen ausgewählt, bitte Zone selektieren
		<br>
		<form method="post" action="index.php">      
			<fieldset>      
				<legend>Die möglichen Spielzonen auswählen?</legend>      
				<input type="checkbox" name="impactcards[]" id="Brust" value="Brust">Brust<br>      
				<input type="checkbox" name="impactcards[]" id="Fusssohle" value="Fusssohle">Fusssohle<br>      
				<input type="checkbox" name="impactcards[]" id="Ruecken" value="Ruecken">Rücken<br>
				<input type="checkbox" name="impactcards[]" id="PO" value="PO">PO<br> 
				<input type="checkbox" name="impactcards[]" id="Intimbereich" value="Intimbereich">Intimbereich<br> 
				<input type="checkbox" name="impactcards[]" id="Oberschenkel" value="Oberschenkel">Oberschenkel<br> 
				<br>      
				<input type="submit" name="spielzone1" value="Spielzone bestätigen" />      
			</fieldset>      
		</form>
	  </div>

	  <div id="defined" style="display:none">

		<h2>Zonen selbst definieren</h2>
		 <br>
		  Es wurde die Selbdefinierte Spielzonen ausgewählt, bitte Zone eingeben
		 <br>
		<form method="post" action="index.php">      
			<fieldset>      
				<legend>Die möglichen Spielzonen eingeben?</legend>      
 				<input type="text" name="zone1" value=""><br>
				<input type="text" name="zone2" value=""><br>
				<input type="text" name="zone3" value=""><br>
				<input type="text" name="zone4" value=""><br>
				<input type="text" name="zone5" value=""><br>
				<input type="submit" name="spielzone2" value="Spielzone bestätigen" />      
			</fieldset>      
		</form>
	  </div>

	</form>
	

	<?php
	
	// Impactzonen
		if(isset($_POST["spielzone1"]) or isset($_POST["spielzone2"]))
		{
			if(isset($_POST["spielzone1"]))
			{
				//Vordefinierte Zone
				$impactcards = $_POST["impactcards"];
				foreach($impactcards as $impactcard=>$value)
				{
					//echo "Impactcard: " . $value . "<br>";
				}
			}

			if(isset($_POST["spielzone2"]))
			{
				//Selbstdefinierte Zone
				$impactcards = array();
				$zone1 = $_POST["zone1"];
				$zone2 = $_POST["zone2"];
				$zone3 = $_POST["zone3"];
				$zone4 = $_POST["zone4"];
				$zone5 = $_POST["zone5"];
				
				if($zone1 != '')
				{ 
					$impactcards[]=$zone1;
				}
				if($zone2 != '')
				{ 
					$impactcards[]=$zone2;
				}
				if($zone3 != '')
				{ 
					$impactcards[]=$zone3;
				}
				if($zone4 != '')
				{ 
					$impactcards[]=$zone4;
				}	
				if($zone5 != '')
				{ 
					$impactcards[]=$zone5;
				}
				foreach($impactcards as $impactcard=>$value)
				{
					//echo "Impactcard: " . $value . "<br>";
				}				
				
			}
			if(isset($_POST["spielzone1"]) or isset($_POST["spielzone2"]))
			{
				$anzeige = "2";
			}
			
		 
		
			
			// Spielzeug
		}
	}
			

		if($anzeige == "2");
		{
			echo "Step 2 - Spielwerkzeug";
			echo "<br>";	
?>
			
			<form action="" method="post">
			  <input type="radio" name="schlagwerkzeug" id="en" value="en" onclick="document.getElementById('selfwerkzeug').style.display='none'; document.getElementById('definedwerkzeug').style.display='block';"> Schlagwerkzeug selbst definieren
			  <input type="radio" name="schlagwerkzeug" id="de" value="de" onclick="document.getElementById('selfwerkzeug').style.display='block'; document.getElementById('definedwerkzeug').style.display='none';"> Vorgeschlages Schlagwerkzeug

			<br>

			  <div id="selfwerkzeug" style="display:none">
				<h2>Vorgeschlages Schlagwerkzeug</h2>
				<br>
				  Es wurde die Vordefinierten Spielzonen ausgewählt, bitte Zone selektieren
				<br>
				<form method="post" action="index.php">      
					<fieldset>      
						<legend>Die möglichen Spielzonen auswählen?</legend>      
						<label for="cane"><img src="images/devices/cane.jpg"></lable><input type="checkbox" name="schlagwerkzeug[]" id="cane" value="cane">cane<br>     <label for="cat"><img src="images/devices/cat.jpg"></lable><input type="checkbox" name="schlagwerkzeug[]" id="cat" value="cat">cat<br> 
						<label for="crop"><img src="images/devices/crop.jpg"></lable><input type="checkbox" name="schlagwerkzeug[]" id="crop" value="crop">crop<br> 
						<label for="hands"><img src="images/devices/hands.jpg"></lable><input type="checkbox" name="schlagwerkzeug[]" id="hands" value="hands">hands<br> 
						<label for="ovalpaddle"><img src="images/devices/ovalpaddle.jpg"></lable><input type="checkbox" name="schlagwerkzeug[]" id="ovalpaddle" value="ovalpaddle">ovalpaddle<br> 
						<label for="paddle"><img src="images/devices/paddle.jpg"></lable><input type="checkbox" name="schlagwerkzeug[]" id="paddle" value="paddle">paddle<br> 
						<label for="perforatedpaddle"><img src="images/devices/perforatedpaddle.jpg"></lable><input type="checkbox" name="schlagwerkzeug[]" id="perforatedpaddle" value="perforatedpaddle">perforatedpaddle<br> 
						<label for="shoe"><img src="images/devices/shoe.jpg"></lable><input type="checkbox" name="schlagwerkzeug[]" id="shoe" value="shoe">shoe<br> 
						<label for="slapper"><img src="images/devices/slapper.jpg"></lable><input type="checkbox" name="schlagwerkzeug[]" id="slapper" value="slapper">slapper<br> 
						<label for="spoon"><img src="images/devices/spoon.jpg"></lable><input type="checkbox" name="schlagwerkzeug[]" id="spoon" value="spoon">spoon<br> 
						<label for="strap"><img src="images/devices/strap.jpg"></lable><input type="checkbox" name="schlagwerkzeug[]" id="strap" value="strap">strap<br> 
						<label for="tawse"><img src="images/devices/tawse.jpg"></lable><input type="checkbox" name="schlagwerkzeug[]" id="tawse" value="tawse">tawse<br> 
						<br>      
						<input type="submit" name="spielwerkzeug1" value="Spielwerkzeug bestätigen" />      
					</fieldset>      
				</form>
			  </div>

			  <div id="definedwerkzeug" style="display:none">
				<h2>Zonen selbst definieren</h2>
				 <br>
				  Es wurde selbdefinierte Schlagwerkzeug ausgewählt, bitte Schlagwerkzeug eingeben
				 <br>
				<form method="post" action="index.php">      
					<fieldset>      
						<legend>Die möglichen Spielzonen eingeben?</legend>      
						<input type="text" name="werkzeug1" value=""><br>
						<input type="text" name="werkzeug2" value=""><br>
						<input type="text" name="werkzeug3" value=""><br>
						<input type="text" name="werkzeug4" value=""><br>
						<input type="text" name="werkzeug5" value=""><br>
						<input type="text" name="werkzeug6" value=""><br>
						<input type="text" name="werkzeug7" value=""><br>						
						<input type="submit" name="spielwerkzeug2" value="Spielwerkzeug bestätigen" />      
					</fieldset>      
				</form>
			  </div>

			</form>	
			
<?php	
			
	
	}
	
	
	
	
	?>
	
<body>
</body>
</html>