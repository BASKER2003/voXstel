
<?php
        $sucmsg="";
        $errmsg="";
        $fname="";
        $lname="";
        $email="";
        $phoneno="";
        $message="";

     if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit"]))
     {
     $conn= mysqli_connect('localhost','root','','hms') or die("Connection failed:" .mysqli_connect_error());
     if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['mobile_number']) && isset($_POST['message']))
     {
    $name = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $phoneno = $_POST['mobile_number'];
    $message = $_POST['message'];
   $sql = "INSERT INTO messages (first_name, last_name, email, mobile_number, message) VALUES ('$fname', '$lname', '$email', '$phoneno', '$message')";
   $query=mysqli_query($conn,$sql);
   if($query)
   {
   $sucmsg= '*Your was Entry Successful';
   }
   else
   {
   $errmsg= "*Error occoured";
   }
   }
  }
  else
  {
       $errmsg="*All fields are required";
  }
  ?>