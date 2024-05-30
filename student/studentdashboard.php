<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="icon" href="../images/logo.jpg" type="image/icon type">

    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title></title>
    <link rel="stylesheet" href="..\css\studentdashboard.css">

    <script type="text/javascript">
      function applyleave()
      {
        window.location.href ="applyleave.php";
      }
      function roomdetails()
      {
        window.location.href ="studentroomdetails.php";
      }
      function searchroommates()
      {
        window.location.href ="roommatesearch.php";
      }
      function update()
      {
        window.location.href ="updatestud.php";
      }
      function complaint()
      {
        window.location.href ="complaint.php";
      }
    </script>

  </head>

  <body>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- about -->

<?php include '../header.php';?>


<!-- end about -->
<div class="wrapper">

   <div class="content">
      <!-- card -->

      <div class="card" onclick="searchroommates()">

            <div class="icon"><i class="material-icons md-36">search</i></div>
            <p class="title">Find Roommates</p>
            <p class="text">Know your roommates.</p>

      </div>
      <!-- end card -->
      <!-- card -->
      <div class="card" onclick="roomdetails()">

            <div class="icon"><i class="material-icons md-36">description</i></div>
            <p class="title">My Details</p>
            <p class="text">Check your details.</p>

      </div>
      <!-- end card -->


      <!-- card -->
      <div class="card"  onclick="applyleave()">

            <div class="icon"><i class="material-icons md-36">border_color</i></div>
            <p class="title">Apply Leave</p>
            <p class="text">Apply for leave.</p>

      </div>
      <!-- end card -->
      

      <!-- card -->
      <div class="card"  onclick="update()">

<div class="icon"><i class="material-icons md-36">update</i></div>
<p class="title">Update</p>
<p class="text">Update Your Profile</p>

</div>

<!-- card -->
<div class="card"  onclick="complaint()">

<div class="icon"><i class="material-icons md-36">edit_note</i></div>
<p class="title">Complaint</p>
<p class="text">File The Complaint.</p>

</div>
<!-- end card -->
  

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
  else if (speechInput.includes("find roommates"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    searchroommates();
  }
  else if (speechInput.includes("my details"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    roomdetails();
  }
  else if (speechInput.includes("apply leave"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    applyleave();
  }
  else if (speechInput.includes("update"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    update();
  }
  else if (speechInput.includes("complaint"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    complaint();
  }
  else if (speechInput.includes("notification"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    showstatus();
  }
  else if (speechInput.includes("logout"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    logout();
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
