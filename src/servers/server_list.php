<table>
<tbody>
<?php
session_start();

if(empty($_SESSION['UniversalID'])){}else{
$my_sql_pass=""; // enter pass
$con = mysqli_connect("127.0.0.1","root",$my_sql_pass,"server_nfo");
$query = "SELECT server_id FROM server_nfo WHERE server_users LIKE '%[" .(int)$_SESSION['UniversalID'] . "]%'";
//echo $query;
/*if ($result = mysqli_query($con, $query)) {
                $i=0
                while($row = mysqli_fetch_array($result)){
                echo $row[0];
                //      foreach($row as $value){
                //              echo $value;
                //      }
                }else{echo "waht";}
}else{echo "po0";}*/
if ($stmt = $con->prepare($query)) {
 $stmt->execute();
 $stmt->bind_result($server_id);
 $table = '';
 //$con = mysqli_connect("127.0.0.1","root",$my_sql_pass,"server_nfo");
 while ($stmt->fetch()) {
  $query1 = "SELECT server_name,server_invite FROM server_nfo WHERE server_id = '" . $server_id  . "'";
  //echo $query1 . "<br>";
  if($con1 = mysqli_connect("127.0.0.1","root",$my_sql_pass,"server_nfo")){
  if($result = mysqli_query($con1, $query1)){
        if($row = mysqli_fetch_row($result)){
                $table .= "<tr><td>" . $row[0] . " <a href='server_joiner.php?server_invite=" . $row[1] . "'> connect </a></td></tr>";
        }
  }else{echo "eror";}
 }else{echo "what";}
 }
 $table .= "</tbody></table>";
 printf($table);
 $stmt->close();
} else {
  printf("Prepared Statement Error: %s\n", $mysqli->error);
}
}
?>
