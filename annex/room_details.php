<html>

<head>

  <title>Room Details</title>

  <link rel="icon" href="images/logo.jpg" type="image/icon type">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  


  <style>
   .room-details-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 50px;
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 10px;
}

.room-details-header {
  text-align: center;
  margin-bottom: 20px;
  font-size: 24px;
}

.bed-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
  grid-gap: 20px;
}

.bed-container {
  display: flex;
  flex-direction: row; /* Change direction from top to bottom to left to right */
  justify-content: center;
  align-items: center;
}

.bed-icon {
  width: 80px; /* Increase width to accommodate icon being side-by-side */
  height: 60px; /* Decrease height to fit within grid */
  border-radius: 10px; /* Slightly rounded edges */
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
}

.bed-icon i {
  font-size: 40px;
}

.available {
  background-color: green;
  color: #fff;
}

.unavailable {
  background-color: red;
  cursor: not-allowed;
  color: #fff;
}

.room-details-container.unavailable .bed-icon {
  cursor: not-allowed;
}

.room-details-container.unavailable .bed-icon:not(:first-child) {
  background-color: red;
}

/* Additional CSS for bed count */
.bed-count {
  display: flex;
  justify-content: center;
  margin-top: 20px;
  font-size: 24px;
  font-weight: bold;
}

.bed-count span {
  margin-right: 10px;
}

.bed-count i {
  font-size: 28px;
  color: green;
  margin-right: 5px;
}

.bed-count .full {
  color: red;
}

/* Additional CSS for room availability */
.room-availability {
  display: flex;
  justify-content: center;
  margin-top: 20px;
  font-size: 24px;
  font-weight: bold;
}

.room-availability span {
  margin-right: 10px;
}

.room-availability i {
  font-size: 28px;
  margin-right: 5px;
}

.room-availability .available {
  color: green;
}

.room-availability .full {
  color: red;
}

.room-availability .unavailable {
  color: red;
}


    </style>

</head>

<body>

  <?php

   // Check if user is logged in
   session_start();
   include('../studheader2.php');
   $user_id = $_SESSION['regno'];
   $block = 'Annex Block';
   if(empty($user_id)) 
   {
     header('Location: ../index.php');
     exit();
     
   }

  include('../dbConnect.php');

  // Retrieve data for the selected room from the database
  $room_no = $_GET['room_no'];
  $room_query = "SELECT * FROM annex WHERE room_no='$room_no'";
  $room_result = mysqli_query($conn, $room_query);
  $room = mysqli_fetch_assoc($room_result);

  // Determine which bed icons to use based on the capacity and availability of the room
  $bed_icons = array();
  for($i=1; $i<=$room['capacity']; $i++) 
  {
    $bed_icon = 'fa-bed';
    $bed_color = ($i <= $room['available']) ? 'available' : 'unavailable';
    array_push($bed_icons, array('icon'=>$bed_icon, 'color'=>$bed_color));
  }

  ?>

  <div class="room-details-container <?php echo ($room['available'] == 0) ? 'unavailable' : ''; ?>">

    <div class="room-details-header">
      <h1>Room <?php echo $room['room_no']; ?></h1>
      <h2><?php echo $room['room_type']; ?></h2>
    </div>

    <div class="bed-grid">

      <?php foreach($bed_icons as $index => $bed): ?>
      <div class="bed-container">
        <form method="post" action="">
          <input type="hidden" name="bed_no" value="<?php echo $index + 1; ?>">
          <input type="hidden" name="room_no" value="<?php echo $room['room_no']; ?>">
          <button type="submit" class="bed-icon <?php echo $bed['color']; ?>" <?php if($bed['color'] == 'unavailable') echo 'disabled'; ?>><i class="fas <?php echo $bed['icon']; ?>"></i></button>
        </form>
      </div>
      <?php endforeach; ?>

    </div>

  </div>

  <?php

  if(isset($_POST['bed_no']) && isset($_POST['room_no'])) 
  {

    // Get the selected bed number and room number
    $bed_no = $_POST['bed_no'];
    $room_no = $_POST['room_no'];

    // Update the users table
    $update_query = "UPDATE users SET roomno='$room_no' , block='$block' WHERE regno='$user_id'";
    $result = mysqli_query($conn, $update_query);

    // Update the room capacity and availability
    $update_room_query = "UPDATE annex SET available=available-1 WHERE room_no='$room_no'";
    $result2 = mysqli_query($conn, $update_room_query);

    // Redirect to studentdashboard.php if update queries were successful
    if($result && $result2) 
    {
      echo '<script>window.location.href="../student/studentdashboard.php";</script>';
      exit();
    } 
    else 
    {
      echo "Error updating user record: " . mysqli_error($conn);
    }
  }

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
  // add other commands for your application here
           
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