<?php
include "db_conn.php";
?>


<!DOCTYPE html>
<html>
<head>
<title>CYBER CREW | HOME </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/logo1.png" style="width:100%;" class="w3-round w3-center" ><br><br>
    <h4><b>CYBER CREW</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>HOME</a> 
	<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT OUR</a> 
	<a href="#committe" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
	<a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a>
    <a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a> 	
    <a href="#achievement" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENTS</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
	<a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ADMINISTRATOR</a> 
  </div>
</nav>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey w3-center" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container w3-center">
  <div class="w3-row-padding w3-padding-20 w3-center">
    <div class="w3-col m8 w3-center">   
    </div>

<!-- About of Club -->
 <header id="portfolio">
  <div class="w3-container w3-padding-large w3-center" id="about" style="margin-bottom:32px " >
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">CYBER CREW</h3>
	 <img src="photo/logo1.png" style="width:50%;" class="w3-round w3-center">
    <p>A cyber crew club is a community or organization dedicated to fostering interest, skills, and knowledge in the field of cybersecurity. Members collaborate to enhance their understanding of cyber threats, share best practices, and engage in activities such as workshops, competitions, and discussions to stay informed about the latest trends and advancements in the ever-evolving world of digital security. These clubs often provide a supportive environment for individuals to network, learn from experienced professionals, and contribute to the collective effort of promoting online safety and resilience.</p>
    <h3>WHY YOU MUST JOIN OUR CLUB COMMITTE ?</h3>
  <li>Joining a cyber crew club provides members with a valuable opportunity to enhance their cybersecurity skills through collaborative learning and shared experiences.</li>
  <li>The club fosters a sense of community among like-minded individuals, creating a supportive environment where members can exchange ideas, insights, and best practices in the ever-evolving field of cybersecurity.</li>
  <li>Cyber crew clubs often organize workshops, seminars, and guest lectures, offering members unique access to industry experts and cutting-edge information, thereby facilitating continuous professional development.</li>
  <li>Membership in a cyber crew club enables individuals to stay informed about the latest trends and threats in cybersecurity, empowering them to adapt and respond effectively to emerging challenges.</li>
  <li>Networking opportunities within the club can lead to valuable connections in the cybersecurity industry, potentially opening doors to internships, job opportunities, and collaborative projects.</li>
  <li>Engaging in hands-on activities, such as cybersecurity competitions and simulations organized by the club, allows members to apply theoretical knowledge in a practical setting, honing their skills and boosting their confidence.</li>
  <li>The club serves as a platform for members to showcase their expertise, share success stories, and contribute to the collective knowledge base, establishing themselves as active participants in the cybersecurity community.</li>
  <li>Through mentorship programs within the cyber crew club, members can benefit from guidance and advice from experienced professionals, accelerating their personal and career growth in the field.</li>
  <li>Participating in community outreach initiatives organized by the club provides members with the opportunity to contribute to raising awareness about cybersecurity issues and promoting digital literacy in the broader community.</li>
  <li>The camaraderie within a cyber crew club not only facilitates learning but also makes the journey in the field of cybersecurity more enjoyable, creating lasting friendships and a sense of belonging among members.</li>
  <hr>
<hr>
    
  <!--Committe--> 
	 <header id="committe">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">OUR COMMITTEE</h3>
	 <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="committe">
    <div class="w3-quarter">
      <img src="photo/wanie.jpg" alt="committe" style="width:100%">
      <h3>NUR SHAHWANIE BT MOHD YAACOB</h3>
      <p>PRESIDENT</p>
    </div>
    <div class="w3-quarter">
      <img src="photo/iqah.jpg" alt="committe" style="width:100%">
      <h3>NURUL HAZIQAH BINTI BAKRI</h3>
      <p>VICE PRESIDENT</p>
    </div>
    <div class="w3-quarter">
      <img src="photo/ika.jpg" alt="Cherries" style="width:100%">
      <h3>SITI NUR ZULAIKHA BINTI HASBULLAH</h3>
      <p>SECRETARY</p>
    </div>
    <div class="w3-quarter">
      <img src="photo/belle.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>SITI NUR NABILA BT MOHD RAZALI</h3>
      <p>ASSISTANT SECRETARY</p>
    </div>
  </div>
 <hr> 
	
 <!--Membership--> 
	  <header id="membership">
       <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">MEMBERSHIP</h3>
    <!-- Progress bars / Skills -->
     <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
	
	<p align="center"><h3>Registration form for Cyber Crew Club 2024</h3></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
         
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

    </p>
   <hr>
	
	<!--Activity--> 
	  <header id="activity">	
	      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">ACTIVITIES</h3>
    <h2 class="w3-text-light-grey">Activities</h2>
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM activity";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
            <td>
            
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

</body>
<hr>
		
  <!-- Achievement -->
  <div class="w3-container w3-padding-32" id="achievement">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">ACHIEVEMENTS</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">2021</div>
        <img src="photo/1.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">2021</div>
        <img src="photo/4.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">2022</div>
        <img src="photo/3.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">2022</div>
        <img src="photo/2.jpg"alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">2023</div>
        <img src="photo/5.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">2023</div>
        <img src = "photo/6.jpg"alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">2023</div>
        <img src="photo/7.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">2023</div>
        <img src="photo/8.jpg" alt="House" style="width:99%">
      </div>
    </div>
  </div>
 
<hr>

 <!-- Images of Club -->
  <div class="w3-row-padding w3-padding-20 w3-center">
    <div class="w3-col m8 w3-center">
      <p align="center"><img src="photo/logo2.png" alt="club" style="width:150%"></p>
    </div>
	
  <!-- Contact -->   

  <div class="w3-container" id="contact" style="margin-top:75px">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">CONTACT</h3>
    <p>Do you want to give a feedback ? Lets fill the form below !</p>
    <form action="admin/add_contact.php" target="_blank">
     <div class="w3-section">
     <label>User ID</label>
        <input class="w3-input w3-border" type="text" name="contact_id" required>
      </div>
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="contact_name" required>
      </div>
    <div class="w3-section">
     <label>Student ID</label>
        <input class="w3-input w3-border" type="text" name="contact_studid" required>
      </div>
   
      <button type="submit" class="w3-button w3-block w3-padding-large w3-black w3-margin-bottom">Send Feedback</button>
    </form>  
  </div>
  
  
  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h3>CYBER CREW</h3>
      <p>Empowering the digital realm with wisdom and wit. Unleash the power of cyber inspiration. #CodeWisely #DigitalRevolution</p>
      <p>Powered by Nur Shahwanie (2021652712) <a href="index.php" target="">Cyber Crew Page</a></p>
    </div>
  
    <div class="w3-second">
      <h3>CLUB POST</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="photo/f2.jpeg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">BRANDEN</span><br>
          <span>He brings his vision and creativity, as well as a ton business/management experience.</span>
        </li>
        <li class="w3-padding-32">
          <img src="photo/f2.jpeg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">ENGWIND</span><br>
          <span>Norway is his base of operations, but also where the majority of his inspiration comes from.</span>
        </li> 
      </ul>
    </div>



  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">SHAHWANIE</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
	