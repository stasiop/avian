<?php                                                                                                                                                                                                                                                    
ini_set('display_errors', 1);                                                                                                                                                                                                                            
ini_set('display_startup_errors', 1);                                                                                                                                                                                                                    
error_reporting(E_ALL);                      
$my_sql_pass=""; // enter db pass here
session_start();                                                                                                                                                                                                                                         
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);                                                                                                                                                                                               
                                                                                                                                                                                                                                                         
if (!isset($_SESSION['UniversalID'])){header("Location: server_join.php?error=invalid_session");}                                                                                                                                                        
if ($con = mysqli_connect("127.0.0.1","root",$my_sql_pass,"server_nfo")){                                                                                                                                                                       
if ($result = mysqli_query($con, 'SELECT server_users FROM server_nfo WHERE server_invite="' . $_POST['invcde'] . '"')) {                                                                                                                                
        echo 'SELECT server_users FROM server_nfo WHERE server_invite="' . $_POST['invcde'] . '"';                                                                                                                                                       
        if(strpos(mysqli_fetch_row($result)[0], "[" . $_SESSION['UniversalID'] . "]")){echo "user is already in the server";}else{                                                                                                                       
        if($row = mysqli_fetch_row($result)){                                                                                                                                                                                                            
        if($new_row=$row[0] . ',[' . (int)$_SESSION['UniversalID'] . ']'){                                                                                                                                                                               
        if($result = mysqli_query($con, 'UPDATE server_nfo SET server_users="' . $new_row . '" WHERE server_invite="' . $_POST['invcde'] . '"')){                                                                                                        
        } else {echo "failed uploading new value";}                                                                                                                                                                                                      
        } else {echo "failed getting new value";}                                                                                                                                                                                                        
        } else {echo "failed getting value";}                                                                                                                                                                                                            
        }                                                                                                                                                                                                                                                
}else{echo "invalid code";}                                                                                                                                                                                                                              
}                                                                                                                                                                                                                                                        
?>                              
