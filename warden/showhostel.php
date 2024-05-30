<!DOCTYPE html>
<html>
<head>
	<title>Hostels</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="icon" href="../images/logo.jpg" type="image/icon type">
    <style>
        /* Body styles */
body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
}

/* Header styles */
header {
  background-color: #333;
  color: #fff;
  padding: 10px;
}

/* Navigation styles */
nav {
  background-color: #555;
  color: #fff;
  padding: 10px;
  margin-bottom: 20px;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline-block;
  margin-right: 20px;
}

nav a {
  color: #fff;
  text-decoration: none;
  padding: 10px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

nav a:hover {
  background-color: #777;
}

/* Hostel section styles */
.hostel-section {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.hostel-card {
  width: calc(33.33% - 20px);
  margin-bottom: 20px;
  background-color: #fff;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
  border-radius: 5px;
  overflow: hidden;
}

.hostel-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.hostel-card h2 {
  font-size: 24px;
  margin: 20px;
}

.hostel-card p {
  font-size: 16px;
  margin: 0 20px 20px;
}



/* Footer styles */
footer {
  background-color: #555;
  color: #fff;
  padding: 10px;
  text-align: center;
}

        </style>
</head>
<body>

<?php include 'header1.php'; 

include('../dbConnect.php');

$sql="SELECT `block` FROM wardens WHERE `wardenno` = '$employeeid' ;";

$query=mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($query);
  
$warden_hostel = $row['block'];


// Define an array of hostels and their names
$hostels = array(
  'St Thomas Block' => 'St Thomas hostel for boys',
  'Annex Block' => 'Annex hostel for boys',
  'Chacko Block' => 'Chacko hostel for girls'
);

?>

	<div class="container">
    <br />
    <br />
		<?php
    echo '<div class="row">';
    foreach ($hostels as $hostel => $name) 
      {
        if ($hostel == $warden_hostel) 
        {
			  echo '<div class="col-sm">';
				echo '<button type="button" id="show" class="btn btn-primary" onclick="showStudents(\''.$hostel.'\')">'.$name.'</button>';
			  echo '</div>';
        }
        else 
        {
          // hide the button
          echo '<div class="col-sm d-none">';
          echo '<button type="button" class="btn btn-primary" onclick="showStudents(\''.$hostel.'\')">'.$name.'</button>';
          echo '</div>';
        }
  }
  echo '</div>';
  ?>
		<div class="row mt-3">
			<div class="col-sm">
				<table class="table table-bordered" id="studentsTable">
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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
  else if (speechInput.includes("show students")) 
  {
    console.log('Detected keyword: ' + speechInput.toLowerCase());
    var Btn = document.getElementById("show");
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

	<script>
		function showStudents(hostel) 
    {
			$.ajax({
				url: "getstud.php",
				type: "POST",
				data: {hostel: hostel},
				success: function(data) {
					$("#studentsTable tbody").html(data);
				}
			});
		}
	</script>

  

</body>
</html>
