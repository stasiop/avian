<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- bit self explainitory -->
  <meta http-equiv="X-UA-Compatible"> <!-- cool thing that picks default redering engine -->
  <!-- <link rel="stylesheet" type="text/css" href="SF"/> link to stylesheet later (when it's good) -->
  <style media="screen">
  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url(PAM.jpg); /* ps i hate css comments awww cute  */
    background-size: cover;
    background-attachment: fixed;
  }
  .box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 400px;
    padding: 40px;
    background: rgba(0, 0, 0, 0.6);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
    border-radius: 10px;
  }
  .box h2{
    margin: 0 0 30px;
    padding: 0px;
    color: #fff;
    text-align: center;
  }
  .box .input-box{
    position: relative;
  }
  .box .input-box input{
    width: 100%;
    padding: 10px 0px;
    font-size: 16px;
    color: #fff;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    outline: none;
    background: transparent;
    border-bottom: 1px solid #fff;
  }
  .box .input-box label{
    position: absolute;
    top: 0;
    left: 0;
    letter-spacing: 1px;
    padding: 10px 0px;
    font-size: 16px;
    color: #fff;
    transition: .5s;PAMRver10
  }
  .box .input-box input:focus ~ label,
  .box .input-box input:valid ~ label{
    top: -18px;
    left: 0px;
    color: #03a9f4;
    font-size: 12px;
  }
  .box input[type="submit"]{
    outline: 8px ridge rgba(170, 50, 220, .6);
    border-radius: 2rem;
    outline: none;
    color: #fff;
    background: #227be3;
    padding: 10px 20px;
    border-radius: 5px;
    cursor:pointer;
  }
  .box input[type="submit"]:hover{
    background-color: #3067b9;
  }
  </style>
  <title>PAMR</title>
</head>
<body>
  <div class="box">
    <h2>Register</h2>
    <form method="post" action="savefile.php">
      <div class="input-box">
        <input type="text" name="username"  autocomplete="off" required>
        <label for="">Username</label>
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
