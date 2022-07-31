<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Password";
$dbname = "green_garden";

ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

///////////////////////////////////////////////////////// RUN THIS CODE FIRST TIME ONLY //////////////////////////
// // connect to MySQL .
// if ($dbc = @mysqli_connect ($dbhost, $dbuser, $dbpass)) 
// {		
// print '<p>Successfully connected to MySQL.</p>';

//     if (@mysqli_query ($dbc,"CREATE DATABASE greenHouse")) {
//     print '<p>The database has been created.</p>';	
//     } 
//     else {		
//         die ('<p>Could not create the database because: <b>' . mysqli_error($dbc) . '</b></p>');	
//         }

//             if (@mysqli_select_db ($dbc,$dbname)) {
//             print '<p>The database has been selected.</p>';
//             } 
//             else {		
//             die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');
//             }		

//             // create table for users 
//             $create_user_table_query = 'CREATE TABLE users (users_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,	
//             users_name VARCHAR(100) NOT NULL,
//             email VARCHAR(100) NOT NULL,
//             phone_number TEXT NOT NULL,
//             users_password VARCHAR(255) NOT NULL,
//             join_date TEXT NOT NULL)';
//             // Run the query.
//             if (@mysqli_query ($dbc, $create_user_table_query)) {	
//             print '<p>The table has been created.</p>';
//             } 
//             else {	
//             die ('<p>Could not create the table because: <b>' . mysqli_error($dbc) . '</b>.</p>
//             <p>The query being run was: ' . $create_user_table_query . '</p>');}


//         mysqli_close($dbc); // Close the connection.
//     } 
// else {	
//     die ('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');
// }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// reuseable connection with database
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die ('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');
}


?>