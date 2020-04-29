<?php 
include("../config/config.php");
   
      function customError($errno, $errstr) {
		echo "<b>Error:</b> [$errno] $errstr";
	}
	set_error_handler("customError");
	$error="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
            
      $sql = "SELECT * FROM userdetails WHERE  name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row=mysqli_fetch_row($result);
      //echo $myusername;
      $count = mysqli_num_rows($result);
      //$role = $result['role'];
	  //database columns[username,pwd,email,role,mobile,location,profes]
      //database columns[Role,Name,Email,Phone,Password]
	  $role = $row[0];
	  //echo $role;
      // If result matched $myusername and $mypassword, table row must be 1 row
    //echo $role;
      if($count == 1) {
         if($role == 'admin'){
			 header("location: ../admin/index.php");
		 }
		 else if($role == 'requester'){
			 header("location: ../requester/index.html");
		 }
		 else if($role == 'provider'){
			header("location: ../provider/index.php"); 
		 }
         //$_SESSION['login_user'] = $myusername;
         
         //header("location: ../login/loginform-mysql-success.php");
		 
      }else {
         $error = "Invalid Username or Password";
      }
   }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Freelance Job Exchange</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body><!--<form id="form1" name="form1" method="post" action="http://amazon.com/">-->
 <!--form tag start-->
<div id="topheader">
    <div class="logo"></div>&nbsp <div class="menu_area"><a href="http://www.shine.com/" class="ideas">Ideas</a> <a href="http://www.accenture.com/" class="links">Links </a> <a href="http://www.ugam.com/" class="info">Info </a> <a href="http://www.altran.com/" class="works">Works </a></div>
  </div>
  <div id="search_strip">
    <div class="freeregistration">
      <div class="registration"><a href="http://google.com/" class="free">FREE</a> Registration </div>
    </div>
    <div class="search_area">
       <div class="search_box">
        <label>
        <input name="textfield" type="text" class="searchtextbox"/>
        </label>
      </div>
      <div class="search_go">
        <div align="center"><a href="http://google.com/" class="go">GO</a></div>
      </div>
      <div class="search_box">Search</div>
    </div>
  </div>
  <div id="body_area">
    <div class="left">
      <div class="left_menutop"></div>
      <div class="left_menu_area">
          <div align="right">
            <h2>Job Sites</h2>
            <a href="https://www.naukri.com/" class="left_menu">Naukri</a><br />
            <a href="https://www.timesjobs.com/" class="left_menu">Timesjob</a><br />
            <a href="https://www.monsterindia.com/" class="left_menu">Monster</a><br />
          <!--<a href="../admin/index.php"class="left_menu">Admin</a><br/>
          <a href="../requester/index.html" class="left_menu">Servive Requester</a><br />
          <a href="../provider/index.php" class="left_menu">Service Provider</a><br />
          <a href="../Contact/index.php"class="left_menu">Contact us</a><br/>-->
        </div>
      </div>
      <div class="comments_area">
        <div class="comment_head">
          <div align="right">Comments</div>
        </div>
        <div class="comments_text">
          <div align="right">*This site is very helpful to improve your skills <br />
            </div>
        </div>
        <div class="comments_text">
          <div align="right">*Customers can easily do that jobs and earn money<br />
            </div>
             </div>
      </div>
      <div class="comments_area">
        <div class="Services_head">
          <div align="right">Services</div>
        </div>
        <div class="comments_text">
          <div align="right">Utility Bill Payment<br />
            <a href="https://www.tnebnet.org/awp/login;jsessionid=8BFFED3304C932A03001C534C9543B9B" class="comments_link">click here</a></div>
        </div>
        <div class="comments_text">
          <div align="right">Commen Service<br/>
            <a href="https://www.tnesevai.tn.gov.in/EsevaiServiceList.html" class="comments_link">Click Here</a>
         </div>
        </div>
        <div class="comments_text">
          <div align="right">Man Power Service<br />
            <a href="https://www.projects2bid.com/search-a-freelancer.php" class="comments_link">Click Here</a></div>
        </div>
        <div class="comments_text">
          <div align="right">Insurance Consulting<br />
            <a href="http://www.licindia.in" class="comments_link">Click Here</a></div>
        </div>
        <div class="comments_text">
          <div align="right">Tamilnadu E-SEVA<br />
            <a href="https://uidai.gov.in/" class="comments_link">Click Here</a></div>
        </div>
        <div class="comments_text">
          <div align="right">Travelling Agencies<br />
            <a href="https://www.redbus.in/?gclid=CjwKCAiAyrXiBRAjEiwATI95mb5iJjpkybXa5w2pze9ORdrlhylXAHG9Avab2rGr6Fg4japAXU5xFRoCrJIQAvD_BwE" class="comments_link">Click Here</a></div>
        </div>
      </div>
    </div>
    <div class="midarea">
      <center><div class="head"> Welcome to Freelancer Job Exchange </div></center>
      <div class="body_textarea">
        <div align="justify">The Freelance Job Exchange is a website where any skilled professionals can find an abundance of projects throughout the world to bid on.  This project mainly focuses on connecting the dots. Enabling coordination between the Service Requesters and the Service Providers. Exchange admin will be the coordinator. This project proposes the concept of work from anywhere and work as like.  Focusing on Digital India. This encourages self employment and will reduce unemployment. This application increases the productivity. This eliminates HR responsibility, legal and regulatory risks.</div>
      </div>
      <div class="innerbanner"><span class="innerbanner_head"> </span><br />
        <span class="innerbanner_head"></span></div>
    </div>
    <div class="right">
      <div class="comments_area">
        <div class="events_head">Events</div>
        <div class="comments_text">
          <div align="left">Meetup Calender<br />
            <a href="https://www.meetup.com/find/events/?allMeetups=true&radius=25&userFreeform=Chennai%2C+India&mcId=c1018094&mcName=Chennai%2C+IN" class="comments_link">International job News</a></div>
        </div>
        <div class="comments_text">
          <div align="left">Gatner calender<br />
            <a href="https://www.gartner.com/events/calendar/sec.jsp" class="comments_link">Buisness News</a></div>
        </div>
        <div class="comments_text">
          <div align="left">Latest Events<br />
            <a href="https://www.eventshigh.com/chennai/technology" class="comments_link">Technology News</a></div>
        </div>
      </div>
       <div class="login_area">
        <div class="login_top"></div>
        <div class="login_bodyarea">
          <div class="right_head">
            <div align="center">LOGIN</div>
          </div>
          <div class="right_textbox">
            <select>
            <option value="Admin">Admin</option>
            <option value=" Requester">Requester</option>
            <option value="Provider">Provider</option>
            </select> 
          </div>
          <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "post">
            <div class="right_textbox">
              <input name="username" type="text" class="righttextbox" value="" />
            </div>
          <div class="right_textbox">
              <input name="password" type="password" class="righttextbox" value="" />
          </div>
		  <div style = "font-size:11px; color:#cc0000; margin-top:10px">
		  <?php echo $error; ?></div>
          <div class="right_text">
               <input type="checkbox" name="checkbox" value="checkbox" />
            Remember Me
          </div>
          <div class="right_text">
            <div align="center">
              <a href="../registration/form.html" class="login">Signup</a>
              <input type = "submit" value = "Login"/><br />
             </div>
          </div>
          </form>
        <div class="login_bottom"></div>
      </div>
      <div class="login_area">
        <div class="login_top"></div>
        <div class="login_bodyarea">
          <div class="right_head">
            <div align="center"><strong>Newsletter Signup </strong></div>
          </div>
          <div class="right_textbox">
            <label>
            <input name="textfield23" type="text" class="righttextbox" value="Email Id" />
            </label>
          </div>
          <div class="right_text">
            <div align="center">
              <a href="http://google.com" class="login">Signup</a></div>
          </div>
        </div>
        <div class="login_bottom"></div>
      </div>
      <div class="comments_area">
        <div class="newletter_head">Newslinks</div>
        <div class="comments_text">
          <div align="left"><a href="https://www.projects2bid.com/" class="news_link">Project Bitting</a></div>
        </div>
        <div class="comments_text">
          <div align="left"><a href="https://www.naukri.com/freelance-jobs-in-chennai" class="news_link">Naukri Jobs</a></div>
        </div>
        <div class="comments_text">
          <div align="left"><a href="https://in.linkedin.com/jobs/freelance-jobs-chennai-area-india" class="news_link">Linkedin Jobs</a></div>
        </div>
        </div>
    </div>
  </div>
<div id="fotter">
    <div class="fotter_links">
      <div align="center"><a href="http://google.com" class="fotterlink">Home</a> | <a href="http://google.com" class="fotterlink">About Us</a> | <a href="http://google.com" class="fotterlink">Companies Success</a> | <a href="http://google.com" class="fotterlink">Client Testimonials</a> | <a href="http://google.com" class="fotterlink">Methods of Development</a> | <a href="http://google.com" class="fotterlink">Newsletter</a> | <a href="http://google.com" class="fotterlink">Subscribe Info</a> | <a href="http://google.com" class="fotterlink">Oppotunities</a> | <a href="http://google.com" class="fotterlink">Current Events</a> | <a href="http://google.com" class="fotterlink">Contact Us</a></div>
    </div>
    <div class="fotter_copyrights">
      <div align="center">&copy; Copyright Information Goes Here. All Rights Reserved</div>
    </div>
    <div class="fotter_validation">
      <div align="center"><a href="http://validator.w3.org/check?uri=referer" class="xhtml">XHTML</a> <a href="http://jigsaw.w3.org/css-validator/check/referer" class="css">CSS</a><br />
      </div>
    </div>
    <div class="fotter_designed">
      <div align="center">Designed By:MTCS </div>
    </div>
  </div>
 <!--form tag end--></body>
</html>
