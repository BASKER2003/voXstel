<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

  <style>
    #phone {
      position: relative;
      right: 10%; 
      top: 30px;;
    }
    </style>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css\resgistration.css">
     <script type="text/javascript">
       function back()
       {
         window.location.href ="index.php";
       }
       function register()
       {
         window.location.href ="student/mhregistration.php";
       }
     </script>

     <?php
        $errmsg="";
        $name="";
        $email="";
        $regno="";
        $phoneno="";

     if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit"]))
     {
     $conn= mysqli_connect('localhost','root','','hms') or die("Connection failed:" .mysqli_connect_error());
     if(isset($_POST['name']) && isset($_POST['regno']) && isset($_POST['email']) && isset($_POST['phoneno']) && isset($_POST['password']) && isset($_POST['confirmpassword']) && isset($_POST['gender']) )
     {
     $name=$_POST['name'];
     $email=$_POST['email'];
     $regno=$_POST['regno'];
     $phoneno=$_POST['phoneno'];
     $password=$_POST['password'];
     $confirmpassword=$_POST['confirmpassword'];
     $gender=$_POST['gender'];
     $passwordregex="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/";


   $nameregex="/^[a-z A-Z]*$/";
   if(!preg_match($nameregex, $name))
   {
       $errmsg="*Password should be in correct format";
   }
     else if($password!=$confirmpassword)
     {
     $errmsg="*Password and confirm password are not same";
     }
     elseif (!preg_match($passwordregex, $password)) 
     {
         $errmsg="*Password must contain Minimum eight and maximum 16 characters, at least one uppercase letter, one lowercase letter, one number and one special character";
     }
     else
     {
     session_start();
   $sql="INSERT INTO `users` (`name`,`regno`,`email`,`phoneno`,`password`,`gender`,`block`)VALUES ('$name','$regno','$email','$phoneno','$password','$gender','NULL')";
   $query=mysqli_query($conn,$sql);
   if($query)
   {
   $errmsg= '*Entry successful';
   $_SESSION['regno'] = $regno;
   if( $gender=="male")
   {
      header('Location: student\mhregistration.php');
   }
   else if($gender=="female")
   {
       header('Location: student\lhregistration.php');
   }
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
     }
      ?>

   </head>

<body>

  <?php session_start(); ?>


  <div class="container">
  <div id="phone" align="right" onclick="speechInput()">
  <?php include ('microphone.php'); ?>
  </div>
    <div class="title">Registration</div>
    <div class="content">
      <form action="registration.php"   method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input name="name" type="text" placeholder="Enter your name" value="<?php echo "$name"; ?>" required pattern="[a-z A-Z]*">
          </div>
          <div class="input-box">
            <span class="details">Reg No</span>
            <input type="text" placeholder="Enter your regno" name="regno" value="<?php echo "$regno"; ?>" pattern="[0-9]{2}[a-z]{2,3}[0-9]{2,3}" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" value="<?php echo "$email"; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phoneno" value="<?php echo "$phoneno"; ?>" pattern="[0-9]{10}" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="confirmpassword" required>
          </div>

        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="male">
          <input type="radio" name="gender" id="dot-2" value="female">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>

          </div>
        </div>
        <div class="button">
          <input type="submit" value="Go Back" onclick="back()">
          <input type="submit" id="register" value="Register" name="submit" style="margin-left:85px;">
        </div>
        <span style="color:red"><?php echo $errmsg; ?></span>
      </form>
    </div>
  </div>

  <script type=text/javascript>
      
function speechInput() 
{
  // check if browser supports Web Speech API
  if ('SpeechRecognition' in window || 'webkitSpeechRecognition' in window) 
  {
    const button = document.getElementById('speech-button');
    // create new speech recognition object
    var recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();

    // set recognition properties
    recognition.lang = 'en-US';
    recognition.continuous = false;
    recognition.interimResults = false;

    // start speech recognition
    button.addEventListener('click', () => {
  recognition.start();
});

    recognition.onstart = () => {
  button.classList.add('active');
};

recognition.onend = () => {
  button.classList.remove('active');
};
    console.log('Listening for speech input...');

    // when speech is recognized
    recognition.onresult = function(event) 
    {
      // get the recognized transcript
      var speechInput = event.results[0][0].transcript.toLowerCase();
      
      
  // Check if the speech input includes any of the given keywords
  if (speechInput.includes('what time is it')) 
  {
    console.log('Detected keyword: what time is it');
    var speech = new SpeechSynthesisUtterance(`The time is ${new Date().toLocaleTimeString()}`);
    window.speechSynthesis.speak(speech);
  } 
  else if (speechInput.includes('what date is it')) 
  {
    console.log('Detected keyword: what date is it');
    var speech = new SpeechSynthesisUtterance(`Today's date is ${new Date().toLocaleDateString()}`);
    window.speechSynthesis.speak(speech);
  } 
  else if (speechInput.includes('what day is it')) 
  {
    console.log('Detected keyword: what day is it');
    var speech = new SpeechSynthesisUtterance(`Today is ${new Date().toLocaleDateString('en-US', { weekday: 'long' })}`);
    window.speechSynthesis.speak(speech);
  }
  else if (speechInput.includes('what is your name')) 
  {
    console.log('Detected keyword: what is your name');
    var speech = new SpeechSynthesisUtterance('My name is Chiti. How can I assist you?');
    window.speechSynthesis.speak(speech);
  } 
  else if (speechInput.includes('what month is it')) 
  {
    console.log('Detected keyword: what month is it');
    var speech = new SpeechSynthesisUtterance(`It is currently ${new Date().toLocaleDateString('en-US', { month: 'long' })}`);
    window.speechSynthesis.speak(speech);
  } 
  else if (speechInput.includes("register")) 
  {
    console.log('Detected keyword: ' + speechInput.toLowerCase());
    var loginBtn = document.getElementById("register");
    loginBtn.click();
  }
  else if (speechInput.includes("go back"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    back();
  }
  else
  {
    console.log('No keyword detected : '+ speechInput.toLowerCase());
    var speech = new SpeechSynthesisUtterance('I did not understand what you said. Please try again.');
    window.speechSynthesis.speak(speech);
  }
    };
  }
  else 
  {
    // Speech recognition is not supported, display a message to the user
    console.log('Speech recognition is not supported in this browser.');
  }

}

    </script>

</body>
</html>
