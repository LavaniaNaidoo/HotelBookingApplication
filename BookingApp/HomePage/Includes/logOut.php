<?php

// Session Cookie
session_destroy(); 

// Closes sessions off
session_write_close(); 

// Clears data in superglobals
unset( $_REQUEST ); 

// Heads back to homepage
header("Location: /../HomePage/index.php" . $_POST['hotellist']);

exit();
