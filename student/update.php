<?php

include ('../dbConnect.php');

if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
  }

$regno = $_SESSION['regno']; // assuming you have stored the user's regno in the session



// check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $option = $_POST["option"];

  // update password
  if ($option === "password" || $option === "password_email" || $option === "password_phone" || $option === "all") 
  {
    $password = $_POST["password"];
    $hashed_password = $password;
    $sql = "UPDATE users SET password='$hashed_password' WHERE regno='$regno'";

    mysqli_query($conn, $sql);
  }

  // update email
  if ($option === "email" || $option === "password_email" || $option === "email_phone" || $option === "all") 
  {
    $email = $_POST["email"];
    $sql = "UPDATE users SET email='$email' WHERE regno='$regno'";
    mysqli_query($conn, $sql);
  }

  // update phone
  if ($option === "phone" || $option === "password_phone" || $option === "email_phone" || $option === "all") 
  {
    $phone = $_POST["phone"];
    $sql = "UPDATE users SET phoneno='$phone' WHERE regno='$regno'";
    mysqli_query($conn, $sql);
  }

  // redirect to success page
  header("Location: studentroomdetails.php");
  exit();
}

mysqli_close($conn);

?>
