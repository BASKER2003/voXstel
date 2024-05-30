<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="icon" href="../images/logo.jpg" type="image/icon type">

<?php       session_start(); ?>
<?php

  $regno = $_SESSION['regno'];
  require_once('../dbConnect.php');
  $sql="SELECT gender,block,roomno FROM users WHERE regno='$regno';";
    // $sql="SELECT regno,name,email,phoneno,block,roomno FROM users WHERE ";
  $query1=mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($query1);
  $gender=$row['gender'];
  $block=$row['block'];
  $roomno=$row['roomno'];
  $sql="SELECT regno,name,email,phoneno,block,roomno FROM users WHERE gender='$gender' AND block='$block' AND roomno='$roomno'";
  $query=mysqli_query($conn,$sql);


 ?>

<style media="screen">
table {
    border-collapse:separate;
    border:solid black 1px;
    border-radius:6px;
    margin-left: 30%;
    margin-top: 15px;

}

td, th {
    border-left:solid black 1px;
    border-top:solid black 1px;
        padding: 10px;
}

th {
    background-color: #292929;
    border-top: none;
    color: white;
}

td:first-child, th:first-child {
     border-left: none;
}
</style>
  </head>
  <body>

<?php include '../studheader.php';?>

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<div class="tablediv">


<table align="center" >
	<tr>
		<th colspan="6"><h2>Student Record</h2></th>
		</tr>
			  <th> RegNo</th>
			  <th> Name </th>
			  <th> Email </th>
			  <th> Phone no </th>
        <th> Block </th>
        <th> Room no </th>

		</tr>

		<?php while($rows=mysqli_fetch_assoc($query))
		{
		?>
		<tr> <td><?php echo $rows['regno']; ?></td>
		<td><?php echo $rows['name']; ?></td>
    <td><?php echo $rows['email']; ?></td>
		<td><?php echo $rows['phoneno']; ?></td>
    <td><?php echo $rows['block']; ?></td>
    <td><?php echo $rows['roomno']; ?></td>
		</tr>
	<?php
               }
          ?>

	</table>
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
  else if (speechInput.includes("notification"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    showstatus();
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
