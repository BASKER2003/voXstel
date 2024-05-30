<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="icon" href="..\images\logo.jpg" type="image/icon type">
    <meta charset="utf-8">
    <title>Warden login</title>
    <style>
    #phone {
      position: relative;
      right: 20%; 
      top: 80px;;
    }
    </style>
    <link rel="stylesheet" href="..\css\signin.css">
    <?php
    $errmsg="";
    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
         session_start();
    $employeeid = $_POST['employeeid'];
    $password = $_POST['password'];
    require_once('../dbConnect.php');
    $sql= "SELECT * FROM wardens WHERE wardenno = '$employeeid' AND password = '$password' ";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_fetch_array($result);
    if(isset($check))
    {
      $_SESSION['employeeid'] = $employeeid;
      header('Location: wardendashboard.php');
    }
    else
    {
    $errmsg="*Username or password is wrong";
    }
    }


     ?>
  </head>
  <body>
    <div class="bg">
    <div id="phone" align="right" onclick="speechInput()">
  <?php include ('../microphone.php'); ?>
  </div>
    <div class="center">
      <h1>Warden Login</h1>
      <form action="wardenlogin.php" method="post">
        <div class="txt_field">
          <input id="employeeid" name="employeeid" type="text" required>
          <span></span>
          <label>Warden ID</label>
        </div>
        <div class="txt_field">
          <input id="password" name="password" type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" name="submit" id="submit" value="Login">
        <div class="signup_link">
          Forgot? <a href="#">Contact</a>
        </div>
      </form>
        <span style="color:red;margin-left: 15px;"><?php echo "$errmsg"; ?></span>
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
            
            // check if transcript matches "regno" or "password"
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
            else if (speechInput.includes("login")) 
            {
              console.log('Detected keyword: ' + speechInput);
              var loginBtn = document.getElementById("submit");
              loginBtn.click();
            }
            else if (speechInput.includes("go back"))
            {
              console.log('Detected keyword : '+ speechInput);
              window.location.href ="../index.php";
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
