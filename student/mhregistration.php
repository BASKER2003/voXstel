<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title></title>
  <link rel="stylesheet" href="..\css\mhreg.css">
  <link rel="icon" href="..\images\logo.jpg" type="image/icon type">

  <script>

function trooms()
{
  window.location.href ="../thomas/pricing.php";
}

function arooms()
{
  window.location.href ="../annex/pricing.php";
}

</script>

  </head>
  <body>

<?php session_start(); ?>

<?php include '../studheader2.php';?>

<form class="">
    <section class="cards">
<article class="card card--1">
  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
  <span class="card__category"> Boys Hostel</span>
    <h3 class="card__title">ST.Thomas Hostel</h3>
    <!-- <span class="card__by"> <a href="#" class="card__author" title="author">select</a></span> -->
    <input type="button" name="St-Thomas" id="St-Thomas" class="card__by" value="submit" onclick="trooms()" >
    <!-- <button type="button" name="button" class="card__by" onclick="select('Qblock')">Select</button> -->
  </div>
</article>
<article class="card card--2">
  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> Boys Hostel</span>
    <h3 class="card__title">Annex Hostel</h3>
        <input type="button" name="Annex" id="Annex" class="card__by" value="submit" onclick="arooms()" >
  </div>
</article>
</section>
</form>

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
  else if (speechInput.includes("st thomas hostel")) 
  {
    console.log('Detected keyword: ' + speechInput.toLowerCase());
    var Btn = document.getElementById("St-Thomas");
    Btn.click();
  }
  else if (speechInput.includes("annex hostel")) 
  {
    console.log('Detected keyword: ' + speechInput.toLowerCase());
    var Btn = document.getElementById("Annex");
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

  </body>
</html>
