<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="..\css\applyleave.css">
    <link rel="icon" href="../images/logo.jpg" type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        textarea[name="complaint"] {
  width: 100%;
  height: 150px;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 2px solid #ccc;
  box-sizing: border-box;
  resize: vertical;
}
.details {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

    #phone {
      position: relative;
      right: -90%; 
      top: 30px;;
    } 

    </style>
  </head>
  <script type="text/javascript">
    function goback() 
    {
      window.location.href = "studentdashboard.php";
    }
  </script>
  

  <?php
    session_start();
    $regno = $_SESSION['regno'];
    require_once('../dbConnect.php');
    $sql = "SELECT name, block, roomno FROM users WHERE regno='$regno';";
    $query1 = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query1);
    $name = $row['name'];
    $block = $row['block'];
    $roomno = $row['roomno'];
    $errmsg = "";
    $sucmsg = "";
  ?>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      if (isset($_POST['complaint'])) 
      {
        $complaint = $_POST['complaint'];
        require_once('../dbConnect.php');
        $sql = "INSERT INTO `complaints` (`name`, `regno`, `block`, `roomno`, `complaint`, `status`)
                VALUES ('$name', '$regno', '$block', '$roomno', '$complaint', 'Pending')";
        $query = mysqli_query($conn, $sql);
        if ($query) 
        {
          $sucmsg = '*Your complaint has been registered';
        } 
        else 
        {
          $errmsg = "*Error occurred";
        }
      }
    }
  ?>

  <body>
    <div class="container">
    <div id=phone onclick="speechInput()">
    <?php include ('microphone.php'); ?> </div>
      <div class="title">File a Complaint</div>
      <div class="content">
        <form action="complaint.php" method="post">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Full Name</span>
              <input type="text" placeholder="Enter your name" pattern="[a-z A-Z]*" value="<?php echo $name; ?>" required disabled>
            </div>
            <div class="input-box">
              <span class="details">Reg No</span>
              <input type="text" placeholder="Enter your regno" pattern="[0-9]{2}[A-Z]{3}[0-9]{4}" value="<?php echo $regno; ?>" disabled required>
            </div>
            <div class="input-box">
              <span class="details">Block Name</span>
              <input type="text" placeholder="Enter your block name" value="<?php echo $block; ?>" disabled required>
            </div>
            <div class="input-box">
              <span class="details">Room no</span>
              <input type="number" placeholder="Enter your room " value="<?php echo $roomno; ?>" disabled required>
            </div>
            <div class="input-box">
                <span class="details">Complaint</span>
                <textarea name="complaint" placeholder="Enter your complaint" required></textarea>
            </div>
          </div>
          <div class="button">
            <input type="button" value="Go Back" onclick="goback()">
            <input type="submit" name="submit" id="submit" style="margin-left:85px;" >
          </div>
      </form>
      <span style="color: red;"><?php echo $errmsg; ?></span>
        <span style="color: green;"><?php echo $sucmsg; ?></span>
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
  else if (speechInput.includes("submit")) 
  {
    console.log('Detected keyword: ' + speechInput.toLowerCase());
    var Btn = document.getElementById("submit");
    Btn.click();
  }
  else if (speechInput.includes("go back"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    goback();
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
