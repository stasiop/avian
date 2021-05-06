table, th, td {
  border: 1px solid black;
}
</style>
<table style="width='100%'"><!--setup user list-->
<?php
session_start();
$my_sql_pass=""; // enter pass
$con = mysqli_connect("127.0.0.1","root",$my_sql_pass,"server_nfo");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
if ($result = mysqli_query($con, 'SELECT server_users FROM server_nfo WHERE server_invite="' . $_SESSION['server_selected'] . '"')) {
        if ($row = mysqli_fetch_row(mysqli_query($con, 'SELECT server_users FROM server_nfo WHERE server_invite="' . $_SESSION['server_selected'] . '"'))){
                if(strpos($row[0], ",")){

                $result = explode(",", $row[0]);
                foreach ($result as $value){
                        $value = str_replace( array( '[', ']'), "", $value);
                        $con = mysqli_connect("127.0.0.1","root",$my_sql_pass,"login_system");
                        if ($result = mysqli_query($con, 'SELECT Username FROM users WHERE UniversalID=' . $value)) {
                        if ($row = mysqli_fetch_row($result)){
                        $value = $row[0];
                        }
                        }
                        $username = $value;
                        echo "<tr><th>" . $username . "</th></tr>";
                }
        }
  }else{echo "pee";}
  // Free result set
} else {echo "IS THIS PEE AND POO";}
//} else{echo "bad mysql";}

?>
</table>
