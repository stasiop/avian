<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible"> 
  <link rel="stylesheet" type="text/css" href="pamstylesheet.css"/>
  <title>PAMR</title>
</head>
<body>
  <div class="box">
    <h2>Register</h2>
    <form method="post" action="savefile.php">
	
	  <div class="input-box">
        <input type="text" name="email"  autocomplete="off" required>
        <label for="">Email</label>
      </div>
      <div class="input-box">
        <input type="text" name="username"  autocomplete="off" required>
        <label for="">Username</label>
      </div>
      <div class="input-box">
        <input type="password" name="password"  autocomplete="off" required>
        <label for="">Password</label>
      </div>
      <div class="input-box">
        <input type="password" name="Rpassword"  autocomplete="off" required>
        <label for="">Rewrite Password</label>
      </div>
        <input type="submit" name="submit" value="Submit"/>
    </form>
  </div>
</body>
</html>

