<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- bit self explainitory -->
  <meta http-equiv="X-UA-Compatible"> <!-- cool thing that picks default redering engine -->
  <!-- <link rel="stylesheet" type="text/css" href="SF"/> link to stylesheet later (when it's good) -->

  <title>PAM</title>
 </head>
<body>
  <div class="box">
    <h2>Login</h2>
    <form method="post" action="savefile.php">
      <div class="input-box">
        <input type="text" name="username"  autocomplete="off" required>
        <label for="">Username</label>
      </div>
      <div class="direction">
         <a href="PAM register/PAMRver10.php">Register</a>
      </div>
      <div class="input-box">
        <input type="password" name="password"  autocomplete="off" required>
        <label for="">Password</label>
      </div>
        <input type="submit" name="submit" value="Submit"/>
    </form>
  </div>
</body>
</html>
<script>
    // Work in progress will be base 64 encryptor / AES-128 if i can be bothered
</script>
