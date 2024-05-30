<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
  <link rel="icon" href="../images/logo.jpg" type="image/icon type">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="..\css\applyleave.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <style>
    #phone {
      position: relative;
      right: -90%; 
      top: 30px;;
    }

    

    input[type="file"] {
  display: block;
  margin-bottom: 10px;
}

input[type="file"]:focus {
  outline: none;
}

input[type="file"]::-webkit-file-upload-button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 12px;
  border-radius: 5px;
  cursor: pointer;
}

input[type="file"]::-webkit-file-upload-button:hover {
  background-color: #3e8e41;
}

input[type="file"]::-webkit-file-upload-button:active {
  background-color: #3e8e41;
  box-shadow: 0 3px 0 #1e522b;
  transform: translateY(2px);
}

input[type="file"]::-moz-focus-inner {
  border: none;
}

input[type="file"]::-ms-browse {
  display: none;
}

input[type="file"]::-ms-choose {
  display: none;
}


    </style>
   </head>
   <script type="text/javascript">
     function goback()
     {
         window.location.href ="studentdashboard.php";
     }
   </script>


<?php session_start(); ?>

<?php

  $regno = $_SESSION['regno'];
  require_once('../dbConnect.php');
  $sql="SELECT name,block,roomno FROM users WHERE regno='$regno';";
  $query1=mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($query1);
  $name=$row['name'];
  $block=$row['block'];
  $roomno=$row['roomno'];
$errmsg="";
$sucmsg="";
// $result=mysqli_query($conn,"SELECT count($regno) as total from leave where regno='$regno' AND status='Pending';");
// $data=mysqli_fetch_assoc($result);
// $count= $data['total'];


 ?>


 <?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
 if( isset($_POST['fromdate']) && isset($_POST['todate']) && isset($_POST['reason']) )
 {

 $fromdate=$_POST['fromdate'];
 $todate=$_POST['todate'];
 $reason=$_POST['reason'];
date_default_timezone_set('Asia/Kolkata');
 $date = date('d-m-y');
 list($pday, $pmonth, $pyear) = explode('-', $date);
list($year1, $month1, $day1) = explode('-', $fromdate);
list($year2, $month2, $day2) = explode('-', $todate);

$sql = "SELECT * FROM leaverequests WHERE regno='$regno' AND status='Pending'";
if ($result=mysqli_query($conn,$sql)) 
{
    $count=mysqli_num_rows($result);
}

if($month2<$month1 || $day2<$day1 || $day1<$pday || $day2<$pday || $month1<$pmonth || $month2<$pmonth )
{
$errmsg="*You entered wrong information";
}
else
{
  if($count>=1)
  {
  $errmsg="*You already had a leave";
  }
  else
  {
   require_once('../dbConnect.php');
 $sql="INSERT INTO `leaverequests` (`name`,`regno`,`block`,`roomno`,`fromdate`,`todate`,`reason`,`status`)VALUES ('$name','$regno','$block','$roomno','$fromdate','$todate','$reason','Pending')";
 $query=mysqli_query($conn,$sql);
 if($query)
 {
   $sucmsg= '*Entry successful';
 }
 else
 {
   $errmsg= "*Error occoured";
 }
}
}
 }
 }


  ?>
<body>
  <div class="container">
    <div id=phone onclick="speechInput()">
    <?php include ('microphone.php'); ?> </div>
    <div class="title">Application</div>
    <div class="content">
      <form action="applyleave.php" method="post">
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
            <span class="details">From</span>
            <input type="date" name="fromdate" id="fromdate" placeholder="Enter from date " required>
          </div>
          <div class="input-box">
            <span class="details">To</span>
            <input type="date" name="todate" id="todate" placeholder="Enter to date"  required>
          </div>
          <div class="input-box">
            <span class="details">Reason</span>
            <input type="textarea" name="reason" id="reason" placeholder="Reason"  required>
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
