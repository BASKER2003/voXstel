<html>

<head>

<link rel="icon" href="images/logo.jpg" type="image/icon type">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


<!-- CSS for room icons -->
<style>
 .room-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  background-color: #f2f2f2;
  padding: 20px;
}

.room-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 20px;
  width: 150px;
  height: 150px;
  border-radius: 25px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  background-color: #fff;
  transition: all 0.2s ease-in-out;
}

.room-container:hover {
  transform: scale(1.05);
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
  cursor: pointer;
}

.room-icon {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 48px;
  width: 100%;
  height: 100px;
  border-radius: 5px 5px 0px 0px;
  background-color: #2c3e50;
  color: #fff;
}

.room-number {
  font-size: 24px;
  font-weight: bold;
  padding: 10px;
  width: 100%;
  text-align: center;
  background-color: #2c3e50;
  color: #fff;
  border-radius: 0px 0px 25px 25px;
}


</style>

</head>

<body>

<?php

session_start();

include('../studheader2.php');

$user_id = $_SESSION['regno'];

if(empty($user_id)) 
{
  header('Location: ../index.php');
  exit();
}

include ('../dbConnect.php');

// Retrieve data from the database
$rooms = mysqli_query($conn, "SELECT * FROM chacko WHERE room_type='DB' AND AC=0 ");

// Loop through the data and display each room in a grid-like format
echo "<div class='room-grid'>";
while ($room = mysqli_fetch_assoc($rooms)) 
{
  // Determine which icon and color to use based on assigned_for
  $icon = '';
  $color = '';
  if ($room['assigned_for'] == 'warden') 
  {
    $icon = 'fa-user-tie';
    $color = 'gray';
  } 
  elseif ($room['assigned_for'] == 'staff') 
  {
    $icon = 'fa-user';
    $color = 'gray';
  } 
  elseif ($room['assigned_for'] == 'sick') 
  {
    $icon = 'fa-user-nurse';
    $color = 'gray';
  } 
  elseif ($room['available'] == 0)
  {
    $icon = 'fa-bed';
    $color = 'red';
  }
  else 
  {
    $icon = 'fa-bed';
    $color = 'green';
  }

  // Display the room with the appropriate icon and color
  echo "<div class='room-container'>";
  echo "<div class='room-icon' style='background-color: $color;'><i class='fas $icon'></i></div>";
  echo "<a href='room_details.php?room_no=" . $room['room_no'] . "'><div class='room-number'>" . $room['room_no'] . "</div></a>";
  echo "</div>";
}
echo "</div>";

?>


<script type=text/javascript>

function home()
{
  window.location.href = "pricing.php";
}

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

    // check if the speech input matches any of the room numbers
    var rooms = document.getElementsByClassName('room-number');
for (var i = 0; i < rooms.length; i++) {
  var roomNumber = rooms[i].innerText;
  if (speechInput === roomNumber) {
    console.log('Detected room number: ' + roomNumber);
    // navigate to the corresponding room details page
    window.location.href = 'room_details.php?room_no=' + roomNumber;
    return;
  }
}
      
      
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
  else if (speechInput.includes('home')) 
  {
    console.log('Detected keyword: home');
    home();
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