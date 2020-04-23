<?php
session_start();

// Drop the session variable
session_unset();

// Close the session
session_destroy();

// Go to index
header('location: ./index.php');
