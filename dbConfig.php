<?php 
 
// Database configuration 
// Replace username and password with your own
$dbHost     = "localhost"; 
$dbUsername = "root"; 
$dbPassword = "tom01yum"; 
$dbName     = "web"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
} 
 
?>