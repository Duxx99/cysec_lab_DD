<?php

// The page we wish to display
$file = $_GET[ 'page' ];

// Input validation
$file = str_replace( array( "http://", "https://" ), "", $file );
$file = str_replace( array( "../", "..\"" ), "", $file );

// Check if the page parameter starts with / or //
if (strpos($file, '/') === 0 || strpos($file, '//') === 0) {
    // Redirect to include.php if it does
    $file = 'include.php';
}

?>
