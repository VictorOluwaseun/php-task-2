<?php
// print $_POST;

//Collecting the data
// if (isset($_POST["submit"])) {
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $gender = $_POST["gender"];
  $designation = $_POST["designation"];
  $department = $_POST["department"];
// }

$errorArray = [];

//Verifying the data, validation
if ($first_name == "") {
  $errorArray = "First name cannot be empty";
}

print_r($errorArray);
?>