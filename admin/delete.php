<!DOCTYPE html>
<html>
<head>
	<title>Delete Student Record</title>
	<link rel="stylesheet" type="text/css" href="../css/delete.css">
	<link rel="icon" href="../images/logo.jpg" type="image/icon type">
</head>
<body>
    <?php include ('header1.php'); ?>
	<h1>Delete Student Record</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="hostel">Select Hostel:</label>
		<select id="hostel" name="hostel">
    <option value="St Thomas Block"<?php if(isset($_POST['hostel']) && $_POST['hostel'] == 'St Thomas Block') { echo ' selected'; } ?>>St Thomas Hostel</option>
    <option value="Annex Block"<?php if(isset($_POST['hostel']) && $_POST['hostel'] == 'Annex Block') { echo ' selected'; } ?>>Annex Hostel</option>
    <option value="Chacko Block"<?php if(isset($_POST['hostel']) && $_POST['hostel'] == 'Chacko Block') { echo ' selected'; } ?>>Chacko Hostel</option>
		</select>
		<input type="submit" id="submit" name="submit" value="Show Students">
	</form>
	<?php

        include ('../dbConnect.php');
		if(isset($_POST['submit']))
        {
            $hostel = $_POST['hostel'];

			$sql = "SELECT * FROM users WHERE block = '$hostel'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				echo "<table>
					<tr>
						<th>Name</th>
						<th>Reg No</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Room No</th>
						<th>Action</th>
					</tr>";
				while($row = mysqli_fetch_assoc($result)) 
                {
					echo "<tr>
						<td>".$row['name']."</td>
						<td>".$row['regno']."</td>
						<td>".$row['phoneno']."</td>
						<td>".$row['email']."</td>
						<td>".$row['gender']."</td>
						<td>".$row['roomno']."</td>
						<td><a href='deletestud.php?id=".$row['regno']."'>Delete</a></td>
					</tr>";
				}
				echo "</table>";
			} 
      else 
      {
				echo "No students found in the selected hostel";
			}

			mysqli_close($conn);
		}
	?>

  <script>

         
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
  else if (speechInput.includes("st thomas hostel"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    var option = "St Thomas Block";
    document.getElementById("hostel").value = option;
  }
  else if (speechInput.includes("annex hostel"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    var option = "Annex Block";
    document.getElementById("hostel").value = option;
  }
  else if (speechInput.includes("chako hostel"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    var option = "Chacko Block";
    document.getElementById("hostel").value = option;
  }
  else if (speechInput.includes("show students")) 
  {
    console.log('Detected keyword: ' + speechInput.toLowerCase());
    var loginBtn = document.getElementById("submit");
    loginBtn.click();
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
