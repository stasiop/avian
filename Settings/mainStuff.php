<h3>Themes</h3>
<hr>
<form method="POST" onsubmit="applyChanges()">
<?php 
	$fR=fopen("../PAMregister/users/".$_SESSION['Username']."/CSS/css.css",'r');
	$fC=fread($fR);
	fclose($fR);
 	echo "<input id='cssInputBox' type='file' id='fileInput' name='inputFile' value=".$fC.">";
    ?>
    <input type="submit" id="fileSubmit" value="upload"> 
</form>

<?php 
        function applyChanges(){
    		if($_FILES['inputFile']){
        	$cssTheme= $_FILES['inputFile']
        	$_POST["CUSTOMCSS"]=$cssTheme;
	}
    } 
