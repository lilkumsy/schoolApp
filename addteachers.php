<?php
include 'connection.php';
if(isset($_POST['submit'])){
$staffidd=$_POST['staffid'];
$fnamed=$_POST['fname'];
$mnamed=$_POST['mname'];
$snamed=$_POST['sname'];
$dobd=$_POST['dob'];
$genderd=$_POST['gender'];
$maritstatd=$_POST['maritstat'];
$reld=$_POST['rel'];
$stoforignd=$_POST['stoforign'];
$tribed=$_POST['tribe'];
$phnenumberd=$_POST['phnenumber'];
$emaild=$_POST['email'];
$addressd=$_POST['address'];
$skillsd=$_POST['skills'];
$hobbiesd=$_POST['hobbies'];
$wexperienced=$_POST['wexperience'];
$qualid=$_POST['quali'];
$stuaghtd=$_POST['stuaght'];
/* PROFILE UPLOAD   */
$pic=$_FILES['profile']['name'];
$target = "staffprofile_upload/".$pic;
move_uploaded_file($_FILES['profile']['tmp_name'], $target);
//staffid, fname, mname, sname, dob, gender, maritstat, rel 
//stoforign, tribe, phnenumber, email, address, skills, hobbies, wexperience, quali, stuaght
if( !empty($staffidd) && !empty($fnamed)  && !empty($mnamed)  && !empty($snamed)	
&& !empty($dobd)&& !empty($genderd) && !empty($maritstatd)&& !empty($reld) && !empty($stoforignd)
&& !empty($tribed) && !empty($phnenumberd)  && !empty($emaild)  && !empty($addressd)	
&& !empty($skillsd)&& !empty($hobbiesd) && !empty($wexperienced)&& !empty($qualid) && !empty($stuaghtd)&& !empty($pic)){	
		$query="insert into staffreg values('$staffidd','$fnamed','$mnamed','$snamed','$dobd','$genderd','$maritstatd',
		'$reld','$stoforignd','$tribed','$phnenumberd','$emaild','$addressd','$skillsd','$hobbiesd','$wexperienced',
		'$qualid','$stuaghtd','$pic')";
		$result=mysqli_query($conn,$query);
		if($result){
			echo "<script>alert('Staff Added Successfully.')</script>";
		}
		else{
			echo "<script>alert('Cannot Add Staff due to:".mysqli_error($conn).')</script>';
	}
}
else{
	echo "enter required fields";
	}
}
?>
<?php 
include 'adminheader.php';
?>
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Add Staff Record</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Add Staff Record</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <!-- Start gallery  -->
 <section id="mu-gallery">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-gallery-area">
          <!-- start title -->
          <div class="mu-title">
            <h2>ADD STAFF RECORD</h2>
            <p>Fill in the following details to capture teacher Details</p>
          </div>
          <!-- end title -->
          <!-- start gallery content -->
          <div class="mu-gallery-content">
            <!-- Start gallery menu -->
            <div class="mu-gallery-top"> 
                   <center>
				   <form  method='post' method="post" enctype="multipart/form-data">
                   <table>
                <tr>
                <td >STAFF ID</td>
                <td><input type="text" name="staffid" required /></td>
                </tr>
                <tr>
                <td >FIRST NAME</td>
                <td><input type="text" name="fname" required /></td>
                </tr>
				<tr>
                <td >MIDDLE NAME<td>
                <td><input type="text" name="mname" required /></td>
                </tr>
                <tr>
                <td >SURNAME</td>
                <td><input type="text" name="sname" required /></td>
                </tr>
				<tr>
                <td >DATE OF BIRTH</td>
                <td><input type="date" name="dob" required /></td>
                </tr>
                <tr>
                <td >GENDER</td>
                <td><input type="text" name="gender" required /></td>
                </tr>
				<tr>
                <td >MARITAL STATUS</td>
                <td><input type="text" name="maritstat" required /></td>
                </tr>
				<tr>
                <td >RELIGION</td>
                <td><input type="text" name="rel" required /></td>
                </tr>
				<tr>
                <td >STATE OF ORIGIN</td>
                <td><input type="text" name="stoforign" required /></td>
                </tr>
				<tr>
                <td >TRIBE</td>
                <td><input type="text" name="tribe" required /></td>
                </tr>
                <tr>
                <td >PHONE NUMBER</td>
                <td><input type="number" name="phnenumber" required /></td>
                </tr>
				<tr>
                <td >EMAIL<td>
                <td><input type="email" name="email" required /></td>
                </tr>
                <tr>
                <td >ADDRESS</td>
                <td><input type="textarea" name="address" required /></td>
                </tr>
				<tr>
                <td >OTHER SKILLS</td>
                <td><input type="textarea" name="skills" required /></td>
                </tr>
                <tr>
                <td >HOBBIES</td>
                <td><input type="textarea" name="hobbies" required /></td>
                </tr>
				<tr>
                <td >WORK EXPERIENCE</td>
                <td><input type="textarea" name="wexperience" required /></td>
                </tr>
				<tr>
                <td >QUALIFICATIONS</td>
                <td><input type="textarea" name="quali" required /></td>
                </tr>
				<tr>
                <td >SUBJECT TAUGHT</td>
                <td><input type="textarea" name="stuaght" required /></td>
                </tr>
				<tr>
                <td >PASSPORT</td>
                <td><input type="file" name="profile" required /></td>
                </tr>
                <tr>
                <td></td>
                <td ><input type="submit" name="submit" value="ADD STAFF" ></td>
                </tr>
                </table>
                </form>
                </center>
                </section>
            </div>
            <!-- End gallery menu -->
            
          </div>
          <!-- end gallery content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End gallery  -->
 <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; All Right Reserved. Designed by <a href="" rel="nofollow">Mfedoo Nigeria Limited</a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 
  </body>
</html>