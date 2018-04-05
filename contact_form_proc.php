<?php

if (empty($_POST['submit']))
{
	echo ("Form is not submitted!");
	exit;
}

if(empty($_POST["fname"]) ||
	empty($_POST["lname"]) ||
	empty($_POST["email"]) ||
	empty($_POST["cnumber"]) ||
	empty($_POST["business"]) ||
	empty($_POST["service"])) 
{
	echo("Please fill in form");
		exit;
}

$fname = $_POST["first name"];
$lname = $_POST["last name"];
$email = $_POST["email"];
$cnumber = $_POST["contact number"];
$business = $_POST["business name"];
$service = $_POST["service"];

mail('support@advantagemtm.com', 'New form submission', 
	"New form submission: First Name: $fname, Last Name: $lname, Email: $email, 
	Contact Number: $cnumber, Business Name: $business, Service: $service");


header('Location: thank-you.html');