<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
  <script src="https://kit.fontawesome.com/d05f53a601.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Hostel Management System</title>
    <link rel="icon" href="images/logo.jpg" type="image/icon type">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<style>
  .icon{
	width: 60px;
	height: 60px;
	border-radius: 15px;
	text-align: center;
	background-image: linear-gradient(155deg, #4C57A2 8%, #87439A 50%, #e02870 85%);
	position: relative;
	overflow: hidden;



	&:after{
		content: '';
		display: block;
		position: absolute;
		top: 30%;
    	left: -60%;
		width: 150%;
		height: 150%;
		background: radial-gradient(rgba(246, 221, 132,1) 15%, 
			rgba(255, 45, 45, 0.65) 50%, 
			rgba(0, 0, 0, 0) 70%);
    }


	i{
		color: #fff;
    	font-size: 50px;
		line-height: 60px;
		position: relative;
		z-index: 1;
	}
}

</style>
  </head>
  
  <body onscroll="changecolor()">
    <script type="text/javascript">
    function rtohome()
    {
      window.location.href ="index.php";
    }
    function change()
    {
      window.location.href ="registration.php";
    }
    function signin()
    {
      window.location.href ="signin.php";
    }
    window.onscroll=function()
    {
      var top=window.scrollY;
      if(top>=50)
      {
        document.getElementById("Nav1").style.backgroundColor = "white";
        document.getElementById("linkcolor1").style.color = "black";
        document.getElementById("linkcolor2").style.color = "black";
        document.getElementById("linkcolor4").style.color = "black";
        document.getElementById("linkcolor5").style.color = "black";
      }
      else
      {
        document.getElementById("Nav1").style.backgroundColor = "transparent";
        document.getElementById("linkcolor1").style.color = "white";
        document.getElementById("linkcolor2").style.color = "white";
        document.getElementById("linkcolor4").style.color = "white";
        document.getElementById("linkcolor5").style.color = "white";
      }
    }
     
    </script>


<div class="Nav" id="Nav1">
  <div class="NavbarContainer">
    <img src="images\kcglogo.png" alt="" class="NavLogo" id="img" onclick="rtohome()">
    <div class="MobileIcon">
    <i class="fa fa-bars"></i>
    </div>
    <ul class="NavMenu ">
      <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="pricing.php">Pricing</a></li>
      <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="contact.php">Contact Us</a></li>
      <li class="NavItem"><a id="linkcolor4" class="NavLinks" href="admin\adminlogin.php">Admin</a></li>
      <li class="NavItem"><a id="linkcolor5" class="NavLinks" href="warden\wardenlogin.php">Warden</a></li>
    </ul>
    <div class="NavBtn">
    <button type="button" name="button" class="NavBtnLink"  onclick="signin()">Sign in</button>
  </div>
  <div class="NavBtn">
      <button type="button" name="button" class="NavBtnLink"  onclick="change()">Sign up</button>
    </div>

    <div class="NavBtn">
       <?php include ('microphone.php'); ?>
    </div>

  </div>
</div>

<!-- Hero section -->
<div class="HeroContainer">
  <div class="HeroBg">
    <video muted autoplay="autoplay" loop class="VideoBg">
  <source src="videos\video2.mp4" type="video/mp4">
</video>
  </div>
<div class="HeroContent">
  <h1 class="HeroH1">Hostel Management System</h1>
  <p class="HeroP">KCG COLLEGE OF TECHNOLOGY</p>
  <div class="HeroBtnWrapper">
<button type="button" name="button" class="NavBtnLink"  onclick="change()">Get Started</button>
  </div>
</div>

</div>



<!-- infosection1 -->

<div class="InfoContainer" id="about">
<div class="InfoWrapper">

<div class="InfoRow">
<div class="Column1">
<div class="TextWrapper">
<p class="TopLine">World class facilities</p>
<h1 class="Heading">Best facilities with less prices</h1>
<p class="Subtitle">Cherish your hostel life with our hostels</p>
<div class="BtnWrap">
<button type="button" name="button" class="NavBtnLink" onclick="change()">Get Started</button>
</div>
</div>
</div>

<div class="Column2">
<div class="ImgWrap">
<img class="Img" src="images/infosectionpic1.svg" alt="">
</div>
</div>
</div>
</div>

</div>

<!-- infosection2 -->

<div class="InfoContainer">
<div class="InfoWrapper">

<div class="InfoRow" style="grid-template-areas:'col1 col2' ;">
<div class="Column1">
<div class="TextWrapper">
<p class="TopLine">Best food</p>
<h1 class="Heading">Unlimited variety of dishes</h1>
<p class="Subtitle">Taste dishes across the world </p>
<div class="BtnWrap">
<button type="button" name="button" class="NavBtnLink" onclick="change()">Get Started</button>
</div>
</div>
</div>

<div class="Column2">
<div class="ImgWrap">
<img class="Img" src="images/infosectionpic2.svg" alt="">
</div>
</div>


</div>
</div>

</div>

<!-- footer -->
<div class="FooterContainer" id="contact">
<div class="FooterWrap">
  <div class="FooterLinksContainer">
    <div class="FooterLinksWrapper">
        <div class="FooterLinkItems">
            <h1 class="FooterLinkTitle">About Us</h1>
            <a href="aboutme.php" class="FooterLink">Developers</a>
            <a href="pricing.php" class="FooterLink">Pricing</a>
            <a href="rules.php" class="FooterLink">Rules</a>
            
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
  else if (speechInput.includes('tell me a Joke')) 
  {
    console.log('Detected keyword: tell me a Joke');
    var speech = new SpeechSynthesisUtterance(`What’s the pirate’s favorite letter? The “C.”`);
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
  else if (speechInput.includes('contact us')) 
  {
    console.log('Detected keyword: contact us ');
    window.location.href = "contact.php";
  }
  else if (speechInput.includes('admin')) 
  {
    console.log('Detected keyword: admin ');
    window.location.href = "admin/adminlogin.php";
  }
  else if (speechInput.includes('warden')) 
  {
    console.log('Detected keyword: warden ');
    window.location.href = "warden/wardenlogin.php";
  }
  else if (speechInput.includes('sign up')) 
  {
    console.log('Detected keyword: sign up ');
    window.location.href = "registration.php";
  } 
  else if (speechInput.includes('get started')) 
  {
    console.log('Detected keyword: get started ');
    window.location.href = "registration.php";
  } 
  else if (speechInput.includes('developers')) 
  {
    console.log('Detected keyword: developers ');
    window.location.href = "aboutme.php";
  }
  else if (speechInput.includes('rules')) 
  {
    console.log('Detected keyword: developers ');
    window.location.href = "rules.php";
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
