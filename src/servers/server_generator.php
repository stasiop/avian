
<?php                                                                                                                                                                                                                                                    
        session_start();
        $my_sql_pass=""; //taskjdbgajsdhashdakdsfjdskcjrehkhvofdjedgfiudhgfkhyfdsgdhdfhdfvbfdhvfdhdbdhshhsgsdfhggxikuhijshgcbh9ushvugbvzsduvcjbgb9pdsduvhgdsg
        $con = mysqli_connect("127.0.0.1","root",$my_sql_pass,"server_nfo");                                                                                                                                                                    
        $query = "SELECT * FROM server_nfo WHERE server_creator = " .  $_SESSION['UniversalID'];                                                                                                                                                         
        if(mysqli_num_rows(mysqli_query($con, $query)) < 1){                                                                                                                                                                                             
                $id_generated = md5(rand());                                                                                                                                                                                                             
                $query = "INSERT INTO server_nfo(server_id, server_name, server_creator, server_users, date_created, server_invite) VALUES ('" . $id_generated . "','" . $_POST['servername'] . "'," .(int)$_SESSION['UniversalID'] . ",'[" . (int)$_SESS
ION['UniversalID'] ."]','" . (int)time() . "','" . bin2hex(random_bytes(3)) . "')";                                                                                                                                                                      
                echo $query;                                                                                                                                                                                                                             
                if(!mysqli_query($con, $query)){echo "failure";}else{$_SESSION['server_selected'] = $id_generated; header('Location: server_finder.php');}                                                                                               
        } else {                                                                                                                                                                                                                                         
                echo "you already own a server";                                                                                                                                                                                                         
        }                                                                                                                                                                                                                                                
?>
