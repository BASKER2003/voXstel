<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta charset="utf-8">
    <title>Pricing</title>
    <link rel="stylesheet" href="..\css\pricing.css">
    <link rel="icon" href="../images/logo.jpg" type="image/icon type">

    <script type="text/javascript">
      function change()
      {
        window.location.href ="../registration.php";
      }
      function rtohome()
      {
        window.location.href ="../index.php";
      }
    </script>

</head>

  <body>

 
<?php 

session_start();

include ('../studheader2.php'); 

$user_id = $_SESSION['regno'];

if(empty($user_id)) 
{
  header('Location: ../index.php');
  exit();
}

?>
    <div class="pricingcontainer">
      <div class="pricingwrapper">  
        <div class="columns">
  <ul class="price">
    <li class="header">Double Bed Room</li>
    <div class="imagewrapper">
    <img style="height:150px; width:150px;" src="../images/1.jpeg" alt="">
    </div>

    <li class="grey">95 Thousand/ year</li>
    <li>common bathroom</li>
    <li>Without A/C</li>
    <li class="grey"><a href="DC.php" class="button">Select</a></li>
  </ul>
</div>


<div class="columns">
<ul class="price">  
<li class="header">Double Bed Room</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="../images/2.jpeg" alt="">
</div>

<li class="grey">1 Lakh/ year</li>
<li>Attached bathroom</li>
<li>without A/C</li>
<li class="grey"><a href="DB.php" class="button">Select</a></li>
</ul>
</div>

<div class="columns">
<ul class="price">
<li class="header">Double Bed Room</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="../images/7.jpeg" alt="">
</div>

<li class="grey">1 lakh 90 thousand/ year</li>
<li>Attached bathroom</li>
<li>With A/C</li>
<li class="grey"><a href="DBAC.php" class="button">Select</a></li>
</ul>
</div>


<div class="columns">
<ul class="price">
<li class="header">Triple Bed Room</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="../images/3.jpg" alt="">
</div>

<li class="grey">1 Lakh/ year </li>
<li>Attached bathroom</li>
<li>Without A/C </li>
<li class="grey"><a href="TB.php" class="button">Select</a></li>
</ul>
</div>


<div class="columns">
<ul class="price">
<li class="header">Triple Bed Room</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="../images/5.jpeg" alt="">
</div>

<li class="grey">95 thousand/ year</li>
<li>common bathroom</li>
<li>Without A/C</li>
<li class="grey"><a href="TC.php" class="button">Select</a></li>
</ul>
</div>


<div class="columns">
<ul class="price">
<li class="header">Four Bed Room</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="../images/4.jpeg" alt="">
</div>

<li class="grey">95 thousand/ year</li>
<li>common bathroom</li>
<li>Without A/C</li>
<li class="grey"><a href="FC.php" class="button">Select</a></li>
</ul>
</div>

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
  else if (speechInput.includes('home')) 
  {
    console.log('Detected keyword: home');
    rtohome();
  }
  else if (speechInput.includes("double bedroom with common bathroom")) 
  {
    console.log('Detected keyword: ' + speechInput);
    window.location.href = "DC.php";
  } 
  else if (speechInput.includes("double bedroom with attached bathroom")) 
  {
    console.log('Detected keyword: ' + speechInput);
    window.location.href = "DB.php";
  } 
  else if (speechInput.includes("double bedroom with ac")) 
  {
    console.log('Detected keyword: ' + speechInput);
    window.location.href = "DBAC.php";
  } 
  else if (speechInput.includes("triple bedroom with attached bathroom")) 
  {
    console.log('Detected keyword: ' + speechInput);
    window.location.href = "TB.php";
  } 
  else if (speechInput.includes("triple bedroom with common bathroom")) 
  {
    console.log('Detected keyword: ' + speechInput);
    window.location.href = "TC.php";
  } 
  else if (speechInput.includes("4 bedroom")) 
  {
    console.log('Detected keyword: ' + speechInput);
    window.location.href = "FC.php";
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




       

