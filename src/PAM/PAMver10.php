<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- bit self explainitory -->
  <meta http-equiv="X-UA-Compatible"> <!-- cool thing that picks default redering engine -->
  <link rel="stylesheet" type="text/css" href="PAMregister/pamstylesheet.css"/>
  <title>PAM</title>
</head>
<body>
  <div class="box">
    <h2>Login</h2>
    <form method="post" action="checkfile.php">
      <div class="input-box">
        <input type="text" name="email"  autocomplete="off" required>
        <label for="">Email</label>
      </div>

      <div class="input-box">
        <input type="password" name="password"  autocomplete="off" required>
        <label for="">Password</label>
      </div>

        <input type="submit" name="submit" value="Submit"/>
		
	  <div class="direction">
         <a href="PAMregister/PAMRver10.php">Register</a>
      </div>
    </form>
  </div>
</body>
</html>
<script>
    // Work in progress will be base 64 encryptor / AES-128 if i can be bothered
</script>
