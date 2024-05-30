<!DOCTYPE html>
<html>
  <head>
    <title>Update User Information</title>
    <link rel="stylesheet" href="../css/upstud.css">
    <link rel="icon" href="../images/logo.jpg" type="image/icon type">
    
  </head>
  <body>
  <?php include '../studheader.php';?>
    <div class="container">
      <h1>Update User Information</h1>
      <form method="POST" action="update.php" onsubmit="return validate()">
        <div class="form-group">
          <label for="option">Update:</label>
          <select id="option" name="option" onchange="handleOptionChange()">
		        <option value="all">All</option>
            <option value="password">Password</option>
            <option value="email">Email</option>
            <option value="phone">Phone Number</option>
            <option value="passwordemail">Password and Email</option>
            <option value="passwordphone">Password and Phone Number</option>
            <option value="emailphone">Email and Phone Number</option>
          </select>
        </div>
        <div class="form-group" id="password-group">
          <label for="password">New Password:</label>
          <input type="password" id="password" name="password" minlength="8" maxlength="16" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$">
        </div>
        <div class="form-group" id="email-group">
          <label for="email">New Email:</label>
          <input type="email" id="email" name="email">
        </div>
        <div class="form-group" id="phone-group">
          <label for="phone">New Phone Number:</label>
          <input type="tel" id="phone" name="phone" minlength="10" maxlength="10" pattern="\d{10}">
        </div>
        <button type="submit" id="submit">Update</button>
      </form>
    </div>

    <script type=text/javascript>

      function handleOptionChange() 
      {
        var option = document.getElementById("option").value;
        var passwordGroup = document.getElementById("password-group");
        var emailGroup = document.getElementById("email-group");
        var phoneGroup = document.getElementById("phone-group");
        passwordGroup.style.display = "none";
        emailGroup.style.display = "none";
        phoneGroup.style.display = "none";

        if (option === "password") 
		    {
          passwordGroup.style.display = "block";
        }
        else if (option === "email") 
		    {
          emailGroup.style.display = "block";
        }
        else if (option === "phone") 
		    {
          phoneGroup.style.display = "block";
        }
        else if(option === "passwordemail")
        {
          passwordGroup.style.display = "block";
          emailGroup.style.display = "block";
        }
        else if(option === "passwordphone")
        {
          passwordGroup.style.display = "block";
          phoneGroup.style.display = "block";
        }
        else if(option === "emailphone")
        {
          emailGroup.style.display = "block";
          phoneGroup.style.display = "block";
        }
        else if (option === "all") 
		    {
          passwordGroup.style.display = "block";
          emailGroup.style.display = "block";
          phoneGroup.style.display = "block";
        }

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
  else if (speechInput.includes("password and email")) 
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    var option = "passwordemail";
    document.getElementById("option").value = option;
    handleOptionChange();
  }    
  else if (speechInput.includes("password and phone number")) 
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    var option = "passwordphone";
    document.getElementById("option").value = option;
    handleOptionChange();
  } 
  else if (speechInput.includes("email and phone number")) 
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    var option = "emailphone";
    document.getElementById("option").value = option;
    handleOptionChange();
  } 
  else if (speechInput.includes("password")) 
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    var option = "password";
    document.getElementById("option").value = option;
    handleOptionChange();
  } 
  else if (speechInput.includes("email")) 
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    var option = "email";
    document.getElementById("option").value = option;
    handleOptionChange();
  } 
  else if (speechInput.includes("phone number")) 
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    var option = "phone";
    document.getElementById("option").value = option;
    handleOptionChange();
  } 
  else if (speechInput.includes("all")) 
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    var option = "all";
    document.getElementById("option").value = option;
    handleOptionChange();
  } 
  else if (speechInput.includes("update")) 
  {
    console.log('Detected keyword: ' + speechInput.toLowerCase());
    var Btn = document.getElementById("submit");
    Btn.click();
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

function validate() 
{
  // get the selected option
  var option = document.getElementById("option").value;
  
  // get the input fields
  var password = document.getElementById("password");
  var email = document.getElementById("email");
  var phone = document.getElementById("phone");

  // check if any field is empty based on the selected option

        if (option === "password" && password.value === "") 
		    {
          alert("password field is null");
          return false;
        }
        else if (option === "email" && email.value === "") 
		    {
          alert("email field is null");
          return false;
        }
        else if (option === "phone"  && phone.value === "") 
		    {
          alert("phone number field is null");
          return false;      
        }
        else if(option === "passwordemail" && (password.value === "" || email.value === "") )
        {
          alert("one or more fields is null");
          return false;
        }
        else if(option === "passwordphone" && (password.value === "" || phone.value === ""))
        {
          alert("one or more fields is null");
          return false;
        }
        else if(option === "emailphone" && (email.value === "" || phone.value === ""))
        {
          alert("one or more fields is null");
          return false;
        }
        else if (option === "all" && (password.value === "" || email.value === "" || phone.value === "")) 
		    {
          alert("one or more fields is null");
          return false;
        }

    // all fields are valid
    return true;
    
}




    </script>

  </body>
</html>
