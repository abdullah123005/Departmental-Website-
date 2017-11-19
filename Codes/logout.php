<?php
  session_start();
  session_destroy();
  echo "you have logged out.<a href = 'new.php'>Click here</a> to return.";
   

?>
