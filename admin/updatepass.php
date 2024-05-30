<html>
    <head>
    <link rel="stylesheet" href="../css/pass.css">
    <link rel="icon" href="..\images\logo.jpg" type="image/icon type">

</head>
<body>
<?php
include ('header1.php');

// Start a session if one is not already active
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
  
// Check if the admin is already logged in
if (!isset($_SESSION['employeeid'])) 
{
  header("Location: adminlogin.php");
  exit();
}

include ('../dbConnect.php') ;

// Check if the form has been submitted
if (isset($_POST['submit'])) 
{
  // Get the input values from the form
  $current_password = $_POST['current_password'];
  $new_password = $_POST['new_password'];
  $confirm_password = $_POST['confirm_password'];

  // Check if the current password is correct
  $admin_username = $_SESSION['employeeid'];
  $sql = "SELECT password FROM admin WHERE employeeid = '$admin_username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) 
  {
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];
    if ($current_password == $hashed_password) 
    {
      // Update the admin's password
      if ($new_password == $confirm_password) 
      {
        $hashed_new_password = $new_password;
        $sql = "UPDATE admin SET password = '$hashed_new_password' WHERE employeeid = '$admin_username'";
        if ($conn->query($sql) === TRUE) 
        {
          echo "Password updated successfully.";
        } 
        else 
        {
          echo "Error updating password: " . $conn->error;
        }
      } 
      else 
      {
        echo "New password and confirm password do not match.";
      }
    } 
    else 
    {
      echo "Incorrect current password.";
    }
  } 
  else 
  {
    echo "Error: Admin not found.";
  }
}

?>

<!-- HTML form for changing the password -->
<form method="POST">
  <label for="current_password">Current Password:</label>
  <input type="password" name="current_password" required>
  <br>
  <label for="new_password">New Password:</label>
  <input type="password" name="new_password" required>
  <br>
  <label for="confirm_password">Confirm Password:</label>
  <input type="password" name="confirm_password" required>
  <br>
  <input type="submit" name="submit" id="submit" value="Update">
</form>


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
  else if (speechInput.includes("update"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    var Btn = document.getElementById("submit");
    Btn.click();
  }
  else if (speechInput.includes("home"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    rtohome();
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