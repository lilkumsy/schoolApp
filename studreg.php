<?php
include 'connection.php';
if(isset($_POST['submit'])){
$admsno=$_POST['admsno'];
$sname=$_POST['sname'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$rel=$_POST['rel'];
$tribe=$_POST['tribe'];
$town=$_POST['town'];
$lga=$_POST['lga'];
$state=$_POST['state'];
$resstate=$_POST['resstate'];
$nationality=$_POST['nationality'];
$acyear=$_POST['acyear'];
$dapp=$_POST['dapp'];
$fomerschool=$_POST['fomerschool'];
$classseknadm=$_POST['classseknadm'];
$htissues=$_POST['htissues'];
$pname=$_POST['pname'];
$prel=$_POST['prel'];
$poccupations=$_POST['poccupations'];
$pdob=$_POST['pdob'];
$plga=$_POST['plga'];
$pstate=$_POST['pstate'];
$pnat=$_POST['pnat'];
$pphone1=$_POST['pphone1'];
$pphne2=$_POST['pphne2'];
$pemail=$_POST['pemail'];
$poffaddress=$_POST['poffaddress'];
$presadress=$_POST['presadress'];
$role='student';
 /* PROFILE UPLOAD   */
$pic=$_FILES['profile']['name'];
$target = "profile_upload/".$pic;
move_uploaded_file($_FILES['profile']['tmp_name'], $target);
//sname, fname, mname, gender, dob, rel, tribe, town, lga, state, 
//resstate, nationality, acyear, dapp, fomerschool, classseknadm, htissues,
// pname, prel, poccupations, pdob, plga, pstate, pnat, pphone1,
// pphne2, pemail, poffaddress, presadress, pasprt, admsno
if( !empty($admsno) &&!empty($sname) && !empty($fname)  && !empty($mname)  && !empty($gender)  && !empty($dob)
	&& !empty($rel) && !empty($tribe) && !empty($town) && !empty($lga) && !empty($state)
	&& !empty($resstate) && !empty($nationality) && !empty($acyear) && !empty($dapp) 
	&& !empty($fomerschool) && !empty($classseknadm)  && !empty($htissues)
	&& !empty($pname) && !empty($prel) && !empty($poccupations) && !empty($pdob) && !empty($plga)
	&& !empty($pstate) && !empty($pnat)&& !empty($pphone1) && !empty($pphne2) && !empty($pemail) && !empty($poffaddress)
	&& !empty($presadress) && !empty($pic)){	
		$query="insert into studreg values('$admsno','$sname','$fname','$mname','$gender','$dob',
		'$rel','$tribe','$town','$lga','$state','$resstate',
		'$nationality','$acyear','$dapp','$fomerschool','$classseknadm','$htissues',
		'$pname','$prel','$poccupations','$pdob','$plga','$pstate','$pnat',
		'$pphone1','$pphne2','$pemail','$poffaddress','$presadress','$role','$pic')";
		$result1=mysqli_query($conn,$query);
		if($result1){
			echo "<center ><script>alert('student registration done successfully')</script></center>";
		}else{
			echo "cannot add student".mysqli_error($conn);
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
           <h2>Student Registration</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Student Registration</li>
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
            <h2>STUDENT REGISTRATION</h2>
            <p>fill in the following details to Register Student</p>
          </div>
          <!-- end title -->
          <!-- start gallery content -->
          <div class="mu-gallery-content">
            <!-- Start gallery menu -->
            <div class="mu-gallery-top"> 
                <section class="login-form-wrap">
                   <center><form  method="post" enctype="multipart/form-data">
                 <table>
				 <tr>
                <td >ADMISSION NUMBER</td>
                <td><input type="text" name="admsno" ></td>
                </tr>
                <tr>
                <td >SURNAME</td>
                <td><input type="text" name="sname" ></td>
                </tr>
                <tr>
                <td >FIRST NAME</td>
                <td><input type="text" name="fname" ></td>
                </tr>
				<tr>
                <td >MIDDLE NAME</td>
                <td><input type="text" name="mname" ></td>
                </tr>
                <tr>
                <td >GENDER</td>
                <td><input type="text" name="gender" ></td>
                </tr>
				<tr>
                <td >DATE OF BIRTH</td>
                <td><input type="date" name="dob" ></td>
                </tr>
                <tr>
                <td >RELIGION</td>
                <td><input type="text" name="rel" ></td>
                </tr>
				<tr>
                <td >TRIBE</td>
                <td><input type="text" name="tribe" ></td>
                </tr>
                <tr>
                <td >TOWN/VILLAGE</td>
                <td><input type="text" name="town" ></td>
                </tr>
				<tr>
                <td >LOCAL GOVERNMENT AREA</td>
                <td><input type="text" name="lga" ></td>
                </tr>
                <tr>
                <td >STATE OF ORIGIN</td>
                <td><input type="text" name="state" ></td>
                </tr>
				<tr>
                <td >STATE OF RESIDENCE</td>
                <td><input type="text" name="resstate" ></td>
                </tr>
                <tr>
                <td >NATIONALITY</td>
                <td><input type="text" name="nationality" ></td>
                </tr>
				<tr>
                <td >ACADEMIC YEAR</td>
                <td><input type="text" name="acyear" ></td>
                </tr>
                <tr>
                <td >DATE OF APPLICATION</td>
                <td><input type="date" name="dapp" ></td>
                </tr>
				<tr>
                <td >FORMER SCHOOL</td>
                <td><input type="text" name="fomerschool" ></td>
                </tr>
                <tr>
                <td >CLASS SEEKING ADMISSION</td>
                <td><input type="text" name="classseknadm" ></td>
                </tr>
				<tr>
                <td >HEALTH ISSUES IF ANY</td>
                <td><input type="text" name="htissues" ></td>
                </tr>
                <tr>
                <td >PARENT/GUARDIAN NAME</td>
                <td><input type="text" name="pname" ></td>
                </tr>
				<tr>
                <td >PARENT/GUARDIAN RELIGION</td>
                <td><input type="text" name="prel" ></td>
                </tr>
                <tr>
                <td >OCCUPATION</td>
                <td><input type="text" name="poccupations" ></td>
                </tr>
				<tr>
                <td >DATE OF BIRTH</td>
                <td><input type="date" name="pdob" ></td>
                </tr>
                <tr>
                <td >LOCAL GOVERNMENT AREA</td>
                <td><input type="text" name="plga" ></td>
                </tr>
				<tr>
                <td >STATE</td>
                <td><input type="text" name="pstate" ></td>
                </tr>
                <tr>
                <td >NATIONALITY</td>
                <td><input type="text" name="pnat" ></td>
                </tr>
				<tr>
                <td >PHONE NUMBER 1</td>
                <td><input type="phone number" name="pphone1" ></td>
                </tr>
                <tr>
                <td >PHONE NUMBER 2</td>
                <td><input type="phone number" name="pphne2" ></td>
                </tr>
				<tr>
                <td >EMAIL</td>
                <td><input type="email" name="pemail" ></td>
                </tr>
                <tr>
                <td >OFFICE ADDRESS</td>
                <td><input type="text" name="poffaddress" ></td>
                </tr>
				<tr>
                <td >RESIDENTIAL ADDRESS</td>
                <td><input type="text" name="presadress" ></td>
                </tr>
				<tr>
                <td >UPLOAD PASSPORT</td>
                <td><input type="file" name="profile" ></td>
                </tr>
                <tr>
                <td></td>
                <td ><input type="submit" name="submit" value="REGISTER STUDENT" ></td>
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