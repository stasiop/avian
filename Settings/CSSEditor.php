<title>Theme Selector</title>
    <?php
    if ($_COOKIE['style']=="PaP"){echo '<link rel="stylesheet" type="text/css" href="css/Stylesheet3PresetPinkAndPink.css">';}
    if ($_COOKIE['style']=="WaB"){echo '<link rel="stylesheet" type="text/css" href="css/Stylesheet3PresetBlueAndWhite.css">';}
    else { echo '<link rel="stylesheet" type="text/css" href="css/Stylesheet3.css">';}
    ?>
    <hr>
    <form method="POST" action="cssSet.php">
      <label for="themes">Choose a theme:</label>
      <select name="theme">
        <option value="def">Defualt</option>
        <option value="P&P">Pink</option>
        <option value="W&B">White and Blue</option>
      </select>
      <br><br>
      <input type="submit" value="Submit">
    </form>
<!--<head>
    <title>CSS Editor</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="../css/Stylesheet4.css">
</head>
<body>
    <script>
        if(document.getElementById("cssInput").value!=null){
            document.getElementById("cssInput").value=document.customCSS;
        }
        function applyChanges(){
            textInput=document.getElementById("cssInput").value;
            document.customCSS=textInput;
        }

    </script>
    <form onsubmit="applyChanges()">
        <textarea cols="10000" rows="20 "type="text" id="cssInput"></textarea>
        <br>
        <button type="submit">Apply</button>
    </form>
</body>
