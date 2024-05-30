<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    
  <link rel="icon" href="..\images\logo.jpg" type="image/icon type">
    <meta charset="utf-8">
    <title>ADMIN</title>
    
    <link rel="stylesheet" href="..\css\mhreg.css">
	<style>
	body {
   width: 100vw;
   background-color: #D2DBDD;
   margin: 0;
   font-family: helvetica;
}

.wrapper {
   width: 100vw;
   margin: 0 auto;
   height: 400px;
   background-color: #161616;
   display: flex;
   justify-content: center;
   align-items: center;
   position: relative;
   transition: all 0.3s ease;
}

@media screen and (max-width: 767px) {
   .wrapper {
      height: 700px;
   }
}

.content {
   max-width: 1024px;
   display:grid;
     grid-template-columns: auto auto auto auto;
   width: 100%;
   padding: 0 4%;
   padding-top: 250px;
   margin: 0 auto;
   display: flex;
   justify-content: center;
   align-items: center;
}

@media screen and (max-width: 767px) {
   .content {
      padding-top: 300px;
      flex-direction: column;
   }
}

.card {
   width: 100%;
   max-width: 300px;
   min-width: 200px;
   height: 250px;
   background-color: #292929;
   margin: 10px;
   border-radius: 10px;
   box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.24);
   border: 2px solid rgba(7, 7, 7, 0.12);
   font-size: 16px;
   transition: all 0.3s ease;
   position: relative;
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
   cursor: pointer;
   transition: all 0.3s ease;
}

.icon {
   margin: 0 auto;
   width: 100%;
   height: 80px;
   max-width:80px;
   background: linear-gradient(90deg, #FF7E7E 0%, #FF4848 40%, rgba(0, 0, 0, 0.28) 60%);
   border-radius: 100%;
   display: flex;
   justify-content: center;
   align-items: center;
   color: white;
   transition: all 0.8s ease;
   background-position: 0px;
   background-size: 200px;
}

.material-icons.md-18 { font-size: 18px; }
.material-icons.md-24 { font-size: 24px; }
.material-icons.md-36 { font-size: 36px; }
.material-icons.md-48 { font-size: 48px; }

.card .title {
   width: 100%;
   margin: 0;
   text-align: center;
   margin-top: 30px;
   color: white;
   font-weight: 600;
   text-transform: uppercase;
   letter-spacing: 4px;
}

.card .text {
   width: 80%;
   margin: 0 auto;
   font-size: 13px;
   text-align: center;
   margin-top: 20px;
   color: white;
   font-weight: 200;
   letter-spacing: 2px;
   opacity: 0;
   max-height:0;
   transition: all 0.3s ease;
}

.card:hover {
   height: 270px;
}

.card:hover .info {
   height: 90%;
}

.card:hover .text {
   transition: all 0.3s ease;
   opacity: 1;
   max-height:40px;
}

.card:hover .icon {
   background-position: -120px;
   transition: all 0.3s ease;
}

.card:hover .icon i {
   background: linear-gradient(90deg, #FF7E7E, #FF4848);
   -webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
   opacity: 1;
   transition: all 0.3s ease;
}


</style>

<script type="text/javascript">
function studentsearch()
{
  window.location.href ="studentsearch.php";
}
function requests()
{
  window.location.href ="leaverequests.php";
}
function roomdetails()
{
  window.location.href ="showhostel.php";
}
function deletestudents()
{
  window.location.href ="delete.php";
}
function update()
{
  window.location.href ="updatepass.php";
}
function show()
{
  window.location.href ="showwardens.php";
}
function warden()
{
  window.location.href ="wardenregistration.php";
}

</script>
  </head>
  <body>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- about -->
<?php include 'header.php';?>

<!-- end about -->
<div class="wrapper">
     
   <div class="content">
      <!-- card -->
      <div class="card" onclick="roomdetails()">

            <div class="icon"><i class="material-icons md-36">visibility</i></div>
            <p class="title">Hostel details</p>
            <p class="text">Check all Hostel details.</p>

      </div>
      <!-- end card -->

      <!-- card -->
      <div class="card" onclick="studentsearch()">

            <div class="icon"><i class="material-icons md-36">search</i></div>
            <p class="title">Student Search</p>
            <p class="text">Search for a student .</p>

      </div>
      <!-- end card -->

      <!-- card -->
      <div class="card" onclick="requests()">

            <div class="icon"><i class="material-icons md-36">description</i></div>
            <p class="title">Leave Requests</p>
            <p class="text">Approve or reject leave requests.</p>

      </div>
      <!-- end card -->

      <!-- card -->

      <div class="card" onclick="deletestudents()">

            <div class="icon"><i class="material-icons md-36">delete</i></div>
            <p class="title">Delete Students</p>
            <p class="text">Removing Allocated Students</p>
            

      </div>

      <!-- card -->
      <div class="card" onclick="update()">

<div class="icon"><i class="material-icons md-36">update</i></div>
<p class="title">Update Password</p>
<p class="text">Admin can update his password</p>


</div>
      

<!-- card -->
<div class="card" onclick="warden()">

<div class="icon"><i class="material-icons md-36">groupadd</i></div>
<p class="title">Appoint Wardens</p>
<p class="text">For appointing wardens to the hostel</p>


</div>


<!-- card -->
<div class="card" onclick="show()">

<div class="icon"><i class="material-icons md-36">visibility</i></div>
<p class="title">Show Wardens</p>
<p class="text">Display Wardens of the hostel</p>


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
  else if (speechInput.includes("hostel details"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    roomdetails();
  }
  else if (speechInput.includes("student search"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    studentsearch();
  }
  else if (speechInput.includes("leave requests"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    requests();
  }
  else if (speechInput.includes("delete students"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    deletestudents();
  }
  else if (speechInput.includes("update password"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    update();
  }
  else if (speechInput.includes("appoint wardens"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    warden();
  }
  else if (speechInput.includes("show wardens"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    show();
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
