<?php
include 'connection.php';
if(isset($_POST['submit'])){
$rid=$_POST['rid'];
$rslt=$_FILES['rslt']['name'];
$session=$_POST['session'];
$admsno=$_POST['admsno'];
$term=$_POST['term'];
$class=$_POST['class'];
$name=$_POST['name'];
/* FILE UPLOAD   */
$target = "result_upload/".$rslt;
move_uploaded_file($_FILES['rslt']['tmp_name'], $target);
//rid, rslt, session, admsno, term, class
if( !empty($rid) && !empty($rslt)  && !empty($session)  && !empty($admsno)
	&& !empty($term)&& !empty($class)&& !empty($name)){	
		$query="insert into result values('$rid','$rslt','$session','$admsno','$term','$class','$name')";
		$result=mysqli_query($conn,$query);
		if($result){
			echo "<script>alert('Result Successfully Uploaded.')</script>";
		}else{
			echo "<script>alert('cannot Upload Result due to:".mysqli_error($conn).')</script>';
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
           <h2>Result Uploader</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Result Uploader</li>
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
            <h2>RESULT UPLOADER</h2>
            <p>fill in the following details to capture students Result</p>
          </div>
          <!-- end title -->
          <!-- start gallery content -->
          <div class="mu-gallery-content">
            <!-- Start gallery menu -->
            <div class="mu-gallery-top"> 
                <center><form  method='post' enctype='multipart/form-data'>
                <table>
                <tr>
                <td >EXAM ID </td>
                <td><input type="text" name="rid" required /></td>
                </tr>
                <tr>
                <td >RESULT(pdf)</td>
                <td><input type="file" name="rslt" required /></td>
                </tr>
				<tr>
                <td >SESSION</td>
                <td><input type="text" name="session" required /></td>
                </tr>
                
				<tr>
                <td >STUDENT ADMISSION NUMBER</td>
                <td><input type="text" name="admsno" required /></td>
                </tr>
                <tr>
                <td >TERM</td>
                <td><input type="text" name="term" required /></td>
                </tr>
				<tr>
                <td >CLASS</td>
                <td><input type="text" name="class" required /></td>
                </tr>
				<tr>
                <td >NAME</td>
                <td><input type="text" name="name" required /></td>
                </tr>
                <tr>
                <td></td>
                <td ><input type="submit" name="submit" value=" RESULT UPLOADER" ></td>
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