<?php                                                                                                                                                                                                                                                    
session_start();                                                                                                                                                                                                                                         
?>                                                                                                                                                                                                                                                       
<form id="join" method="POST" action="server_joiner.php" enctype="multipart/form-data">                                                                                                                                                                  
        <label for="invcde">server invite code:</label>                                                                                                                                                                                                  
        <input name="invcde" id="invcde" type="text" required>                                                                                                                                                                                           
        <button type="submit" value="submit">Send</button>                                                                                                                                                                                               
</form>                         
