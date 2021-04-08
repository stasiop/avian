<head>
    <Title>
        Avian | Settings
    </Title>
    <?php
    if ($_COOKIE['style']=="PaP"){echo '<link rel="stylesheet" type="text/css" href="css/Stylesheet3PresetPinkAndPink.css">';}
    if ($_COOKIE['style']=="WaB"){echo '<link rel="stylesheet" type="text/css" href="css/Stylesheet3PresetBlueAndWhite.css">';}
    else { echo '<link rel="stylesheet" type="text/css" href="css/Stylesheet3.css">';}
    ?>
</head>
<body>
    <div id="settingSelector">
        <button>General</button>
        <button onclick="window.location.href='Settings/CSSEditor.php'">Themes</button>
    </div>
	<div id="Vertical">
	</div>
    <iframe href="\Settings\mainStuff.php">
        
    </iframe>
</body>
