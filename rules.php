<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Rules and Regulation</title>
    <link rel="stylesheet" href="css/home.css">
    <script src="https://kit.fontawesome.com/d05f53a601.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <link rel="icon" href="images/logo.jpg" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
   
    <style>

.NavMenu {
  display: flex;
  align-items: center;
  list-style: none;
  text-align: center;
  margin: 0;
  padding: 0;
}

@media screen and (max-width: 768px) {
  .NavMenu {
    display: none;
  }
}

.NavItem {
  margin-right: 10px;
}

      
  body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  background: linear-gradient(120deg, #00467F, #A5CC82);
  background-image: url('images/Rules.jpeg'); 
  background-repeat: no-repeat;
  background-size:cover;
  min-height: 100vh;
}

#content {
  background-color: rgba(255,255,255,0.13);
  backdrop-filter: blur(5px);
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
  max-width: 90%;
  margin: 0 auto;
  padding: 20px;
  position: relative;
  border: 1px solid #ddd;
  box-shadow: 0px 0px 5px 0px #ddd;
  overflow: hidden; 
}



h1 {
  font-size: 28px;
  font-weight: bold;
  margin-top: 0;
}

h2 {
  font-size: 24px;
  font-weight: bold;
}

p {
  line-height: 1.5;
  margin-top: 0;
}

.note {
  font-style: italic;
  margin-top: 10px;
}

</style>  

</head>

<body onscroll="changecolor()">
    <script type="text/javascript">
    
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
      <li class="NavItem"><a id="linkcolor4" class="NavLinks" href="index.php">Home</a></li>
    </ul>
    <div class="NavBtn">
    <button type="button" name="button" class="NavBtnLink"  onclick="signin()">Sign in</button>
  </div>
    <div class="NavBtn">
      <button type="button" name="button" class="NavBtnLink"  onclick="change()">Sign up</button>
    </div>

  </div>
</div><br><br><br><br><br><br>
<div id="content">
      <!-- Default content in English -->
      <p lang="en">
        1. Room will be allotted based on the availability by the wardens.<br>  <br>
        2. All inmates should be in their respective rooms for taking attendance by wardens on
        <ul><br>
          <li>a. Weekdays by 6:30 PM for Women's Hostel and 7:00 PM for Men's Hostel</li><br>
          <li>b. Weekends by 7:00 PM for Women's & Men's Hostel</li><br>
        </ul>
        <strong>Note:</strong> If any student is found absent without proper intimation, appropriate disciplinary action will be taken.<br>
        <br><br>
        3. Strict silence should be observed in the Hostel especially during study hours.
        <strong>Study Hour:</strong> 9:00 PM - 10:30 PM
        <br><br>
        4. No men can be entertained in the women's Hostel and vice versa.
        <br><br>
        5. Men are not allowed to loiter of Women's Hostel and Vice versa.
        <br><br>
        6. The inmates are not permitted to go out of the campus without the permission of the Warden. They have to get the Gate Pass and submit to the Security of the main gate.
        <br><br>
        7. Students are not allowed to stay in the Hostel during the college hours without any valid reason/permission from their respective department HoDs, warden and the Chief Warden. Students must leave the hostel at 8:40 AM for attending classes in their respective departments.
        <br><br>
        8. Hostel inmates are not allowed to leave the campus during class hours. In case of emergency permission must be taken from the respective HoDs, warden and the Chief Warden.
        <br><br>
        9. Ragging in any form is not permitted within the campus. If any student is found engaged in any kind of ragging activities, he/she will be expelled from the Hostel immediately.
        <br><br>
        10. No day scholars or guests are permitted to enter into the hostel without availing permission from the respective wardens and
        <br><br>
        11. Smoking and consumption of alcohol is strictly prohibited within the hostel premises. Any student found violating this rule will be subject to disciplinary action.
        <br><br>
        12. Hostel inmates are expected to maintain cleanliness and hygiene within the hostel premises. Any student found violating this rule will be subject to disciplinary action.
        <br><br>
        13. In case of any emergency or medical requirement, the hostel authorities should be informed immediately.
        <br><br>
        14. Hostel inmates are not allowed to use any electrical appliances other than those provided by the hostel authorities. Any student found using unauthorized electrical appliances will be subject to disciplinary action.
        <br><br>
        15. Hostel inmates are expected to be responsible for the safety and security of their personal belongings. The hostel authorities will not be responsible for any loss or damage to personal belongings.
        <br><br>
        16. Hostel inmates are expected to strictly adhere to the timings and schedules provided by the hostel authorities.
        <br>
        <br>
        17. Any breach of rules and regulations may result in disciplinary action including expulsion from the hostel.
        </p>


  </div><br><br>
  

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
</body>
</html>