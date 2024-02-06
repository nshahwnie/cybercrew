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
    <img src="photo/logo1.png" style="width:100%;" class="w3-round w3-center" class="w3-card-4 w3-margin w3-white" ><br><br>
    <h4><b>CYBER CREW</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="http://localhost/cybercrew/index.php?msg=New%20record%20created%20successfully" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>HOME</a> 
	<a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT OUR</a> 
	<a href="#committe" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
	<a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a>
    <a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a> 	
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
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
   

  <!-- Images of Club -->
  <div class="w3-row-padding w3-padding-20 w3-center" id="about">
    <div class="w3-col m8 w3-center">
     <p align="center"><img src="photo/logo2.png" style="width:150%"></p>
    </div>
    

  <div class="w3-container w3-padding-large w3-center" style="margin-bottom:32px">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">CYBER CREW</h3>
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
     <h4><b>CLUB COMMITTEE</b></h4>
	 <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="committe">
    <div class="w3-quarter">
      <img src="photo/wanie.jpg" alt="committe" style="width:100%">
      <h3>NUR SHAHWANIE BINTI MOHAMAD YAACOB</h3>
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
    <h4><b>Cyber Crew Club Membership</b></h4>
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
	<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];

   $sql = "INSERT INTO `members`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES (NULL,'$first_name','$last_name','$email','$gender')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: membership.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>


 <!--ACTIVITY--> 
  <header id="activity">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </nav>
   
</nav>
  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
	<p align="center"><h3>Activities form for Cyber Crew</h3></p>
    <a href="add_activity.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
            <td>
              <a href="edit_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


	  
 
  <!-- Contact Section -->
  <header id="contact">
   <div class="container">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Cyber Crew</title>
</head>
<hr>
  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
	<p align="center"><h3>Contact Us for Feedback</h3></p>
    <a href="add_contact.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Contact Student ID</th>
          <th scope="col">Email</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Comment</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `contact`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_phone"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>

            <td>
              <a href="edit_Contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_Contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

 
   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- Warning -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="photo/warning.jpg" alt="warning" style="width:20%">
    <div class="w3-container">
      <h3><b>WARNING</b></h3>
      <h5>JUST ADMIN CAN UPDATE IN THIS PAGE <span class="w3-opacity">JAN ,23 </span></h5>
    </div>

    <div class="w3-container">
      <p>Please note that only administrators have the authority to change information on the website; this is to uphold data accuracy and security standards.</p>
      <div class="w3-row">
    
          <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="https://selayangpandang.net/5-status-di-media-sosial-yang-boleh-buat-anda-masuk-penjara/"<b>READ MORE »</b></button></p>
        </div>
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
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
	