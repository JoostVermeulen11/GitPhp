<?php
session_start();
if(isset($_SESSION["ingelogd"]) && $_SESSION["ingelogd"]) {
    session_destroy();
    echo "logout finished"; 
}
else 
    echo "logout failed";
    
echo "<hr>";
echo '<a href="index.php">Index</a>';
?>