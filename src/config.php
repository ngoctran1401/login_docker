<?php
$hostname	= "mysql";
$username	= "nhom2";
$password	= "helloworldpassword";
$dbname		= "login";

// Create Connection
$conn = mysqli_connect( $hostname, $username, $password );

// Test Connection
if( !$conn ) {
	// Print error
	die( "Failed to connect: " . mysqli_connect_error() );
}

// Switch database
mysqli_select_db( $conn, $dbname );

// Perform database operations

// Close the connection
mysqli_close( $conn );
