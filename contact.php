<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <script src="https://kit.fontawesome.com/d05f53a601.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Contact us</title>
    <link rel="stylesheet" href="css\contact.css">
    <link rel="icon" href="images/logo.jpg" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="shortcut icon" type="image/jpg" href="/images/news2.png"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap');
    </style>
    <script type="text/javascript">
        function change()
        {
          window.location.href ="registration.php";
        }
        function rtohome()
        {
          window.location.href ="index.php";
        }
        </script>

</head>

<body>


<?php include 'headerh.php';?>



<?php
        $sucmsg="";
        $errmsg="";
        $fname="";
        $lname="";
        $email="";
        $phoneno="";
        $message="";

     if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit"]))
     {
     $conn= mysqli_connect('localhost','root','','hms') or die("Connection failed:" .mysqli_connect_error());
     if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['mobile_number']) && isset($_POST['message']))
     {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $phoneno = $_POST['mobile_number'];
    $message = $_POST['message'];
   $sql = "INSERT INTO messages (first_name, last_name, email, mobile_number, message) VALUES ('$fname', '$lname', '$email', '$phoneno', '$message')";
   $query=mysqli_query($conn,$sql);
   if($query)
   {
   $sucmsg= '*Your was Entry Successful';
   }
   else
   {
   $errmsg= "*Error occoured";
   }
   }
  else
  {
       $errmsg="*All fields are required";
  }
}
  ?>

          <section>
            <div class="container">
                <div class="contactInfo"> 
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span><img src="images/location.png"></span>
                                <span>
                                KCG College Rd,<br>
                                Karapakkam,<br>
                                Chennai,<br> Tamil Nadu 600097<br><br>

                                </span>
                                <br><br>
                            </li>
                            <li>
                                <span><img src="images/mail.png"></span>
                                
                                <span><a href = "mailto: info@kcgcollege.com">info@kcgcollege.com</a><br><br></span>
                            </li>
                            <li>
                                <span><img src="images/call.png"></span>
                                <span>73959 59825</span>
                            </li>

                        </ul>
                    </div>
                    <ul class="sci">
                        
                    </ul>
                </div>
    <div class="contactForm">
        <h2>Send a Message</h2>
        <form action="contact.php" method="POST">
            <div class="formBox">
                <div class="inputBox w50">
                    <input type="text" name="first_name" id="first_name" required>
                    <span>First Name</span>
                </div>
                <div class="inputBox w50">
                    <input type="text" name="last_name" id="last_name" required>
                    <span>Last Name</span>
                </div>
                <div class="inputBox w50">
                    <input type="email" name="email" id="email" required>
                    <span>Email Address</span>
                </div>
                <div class="inputBox w50">
                    <input type="text" name="mobile_number" id="mobile_number" required>
                    <span>Mobile Number</span>
                </div>
                <div class="inputBox w100">
                    <textarea name="message" id="message" required></textarea>
                    <span>Write your message here...</span>
                </div>
                <div class="inputBox w100">
                    <input type="submit" name="submit" id="send" value="Send">
                </div>
            </div>
        </form>

        <span style="color: red;"><?php echo $errmsg; ?></span>
        <span style="color: green;"><?php echo $sucmsg; ?></span>

    </div>
</section>





        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.7880928830696!2d80.23768051433373!3d12.92133701947645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525c8cd40b76e7%3A0x681487984b55f7bb!2sKCG%20College%20of%20Technology!5e0!3m2!1sen!2sin!4v1681200252224!5m2!1sen!2sin"
            width="100%" 
            height="450" 
            style="border: 1px solid #ccc;"
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>




<!-- footer -->
<div class="FooterContainer" id="contact">
    <div class="FooterWrap">
      <div class="FooterLinksContainer">
        <div class="FooterLinksWrapper">
            <div class="FooterLinkItems">
                <h1 class="FooterLinkTitle">About Us</h1>
                <a href="aboutme.php" class="FooterLink">Developers</a>
            </div>
        </div>
      </div>
    
      <div class="SocialMedia">
        <div class="SocialMediaWrap">
          <a href="#" class="SocialLogo">voXstel</a>
          <p class="WebsiteRights"> KCG COLLEGE OF TECHNOLOGY © 2023 </p>
          <div class="SocialIcons">
          <a href="https://www.facebook.com/kcg.college.tech?mibextid=ZbWKwL"target="_blank" rel="noopener noreferrer" class="SocialIconLink"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
            <a href="https://twitter.com/KCGtechnology?t=pDTRsPbAItwxKrsiMe0aJQ&s=09" target="_blank" rel="noopener noreferrer" class="SocialIconLink"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
            <a href="https://instagram.com/kcgtech?igshid=MDM4ZDc5MmU=" target="_blank" rel="noopener noreferrer" class="SocialIconLink"><i class= "fa-brands fa-instagram" aria-hidden="true"></i></a>
            <a href="https://youtube.com/@kcgcollegeoftechnology3906" target="_blank" rel="noopener noreferrer" class="SocialIconLink"><i class="fa-brands fa-youtube"></i></a>
            <a href="mailto: info@kcgcollege.com" target="_blank" rel="noopener noreferrer" class="SocialIconLink"><i class="fa fa-envelope" aria-hidden="true"></i></a>
        
          </div>
        </div>
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
  else if (speechInput.includes('pricing')) 
  {
    console.log('Detected keyword: pricing ');
    window.location.href = "pricing.php";
  }
  else if (speechInput.includes('sign in')) 
  {
    console.log('Detected keyword: sign in ');
    window.location.href = "signin.php";
  } 
  else if (speechInput.includes('sign up')) 
  {
    console.log('Detected keyword: sign up ');
    window.location.href = "registration.php";
  } 
  else if (speechInput.includes('developers')) 
  {
    console.log('Detected keyword: developers ');
    window.location.href = "aboutme.php";
  }
  else if (speechInput.includes('facebook')) 
  {
    console.log('Detected keyword: facebook ');
    window.open("https://www.facebook.com/kcg.college.tech?mibextid=ZbWKwL",'_blank');
  } 
  else if (speechInput.includes('instagram')) 
  {
    console.log('Detected keyword: instagram ');
    window.open("https://instagram.com/kcgtech?igshid=MDM4ZDc5MmU=",'_blank');
  }
  else if (speechInput.includes('youtube')) 
  {
    console.log('Detected keyword: youtube ');
    window.open("https://youtube.com/@kcgcollegeoftechnology3906",'_blank');
  }
  else if (speechInput.includes('twitter')) 
  {
    console.log('Detected keyword: twitter ');
    window.open("https://twitter.com/KCGtechnology?t=pDTRsPbAItwxKrsiMe0aJQ&s=09",'_blank');
  }
  else if (speechInput.includes('mail')) 
  {
    console.log('Detected keyword: mail ');
    window.open("mailto: info@kcgcollege.com",'_blank');
  }
  else if (speechInput.includes("send")) 
  {
    console.log('Detected keyword: ' + speechInput.toLowerCase());
    var Btn = document.getElementById("send");
    Btn.click();
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
