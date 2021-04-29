<style>                                                                                                                                                                                                  
table, th, td {                                                                                                                                                                                          
  border: 1px solid black;                                                                                                                                                                               
}                                                                                                                                                                                                        
</style>                                                                                                                                                                                                 
<table style="width='100%'"><!--setup user list-->                                                                                                                                                       
<?php                                                                                                                                                                                                    
$con = mysqli_connect("127.0.0.1","root","avianrox123","server_nfo");                                                                                                                                    
                                                                                                                                                                                                         
if (mysqli_connect_errno()) {                                                                                                                                                                            
  echo "Failed to connect to MySQL: " . mysqli_connect_error();                                                                                                                                          
  exit();                                                                                                                                                                                                
}                                                                                                                                                                                                        
                                                                                                                                                                                                         
// Perform query                                                                                                                                                                                         
                                                                                                                                                                                                         
if ($result = mysqli_query($con, 'SELECT server_users FROM server_nfo WHERE server_id=420')) {                                                                                                           
  while ($row = mysqli_fetch_row($result)){                                                                                                                                                              
        if(strpos($row[0], ",")){                                                                                                                                                                        
                $result = explode(",", $row[0]);                                                                                                                                                         
                //echo $result[0] . $result[1];                                                                                                                                                          
                //$con = mysqli_connect("127.0.0.1","root","avianrox123","login_system");                                                                                                                
                foreach ($result as $value) {                                                                                                                                                            
                        $con = mysqli_connect("127.0.0.1","root","avianrox123","login_system");                                                                                                          
                        if ($result = mysqli_query($con, 'SELECT Username FROM users WHERE UniversalID=' . $value )) {                                                                                   
                                 while ($row = mysqli_fetch_row($result)){                                                                                                                               
                                        $username = $row[0];                                                                                                                                             
                                 }                                                                                                                                                                       
                                 mysqli_close($con);                                                                                                                                                     
                        } else {                                                                                                                                                                         
                        echo "failure";                                                                                                                                                                  
                        $username = $row[0];}                                                                                                                                                            
                        echo "<tr><th>" . $username . "</th></tr>";                                                                                                                                      
                }                                                                                                                                                                                        
        } else {                                                                                                                                                                                         
                echo "<tr><th>" . $row[0] . "</th></tr>";                                                                                                                                                
        }                                                                                                                                                                                                
  }                                                                                                                                                                                                      
  // Free result set                                                                                                                                                                                     
}                                                                                                                                                                                                        
$con = mysqli_connect("127.0.0.1","root","avianrox123","server_nfo");                                                                                                                                    
mysqli_close($con);                                                                                                                                                                                      
?>                                                                                                                                                                                                       
</table>
