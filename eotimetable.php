<?php
include 'connection.php';
if(isset($_POST['submit'])){
$tid=$_POST['tid'];
$ttable=$_FILES['ttable']['name'];
$status=$_POST['status'];
$class=$_POST['class'];
/* FILE UPLOAD   */
$target = "timetable_upload/".$ttable;
move_uploaded_file($_FILES['ttable']['tmp_name'], $target);
if( !empty($tid) && !empty($ttable) && !empty($status)&& !empty($class)){
		$query="insert into timetable values('$tid','$ttable','$status','$class')";
		$result=mysqli_query($conn,$query);
		if($result){
			echo "<script>alert('Time Table Uploaded Successfully.')</script>";
		}else{
			echo "<script>alert('Cannot Upload Time Table due to:".mysqli_error($conn).')</script>';
	}
}
else{
	echo "enter required fields";
	}
}
?>
<?php
include 'eoffheader.php';
?>
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Time Table Uploader</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Time Table Uploader</li>
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
            <h2>TIME TABLE Uploader</h2>
            <p>Fill in the following fields to upload time table. Enter status 1. for exam time table. 2. for test time table 3. for school time table.</p>				
          </div>
          <!-- end title -->
          <!-- start gallery content -->
          <div class="mu-gallery-content">
            <!-- Start gallery menu -->
            <div class="mu-gallery-top"> 
              <center><form  method='post' enctype='multipart/form-data'>
                <table>
                <tr>
                <td >TIME TABLE ID </td>
                <td><input type="text" name="tid" required /></td>
                </tr>
                <tr>
                <td>TIME TABLE FILE IN IMAGE FORMAT</td>
                <td><input type="file" name="ttable" required /></td>
                </tr>
				<tr>
                <td >STATUS</td>
                <td><input type="text" name="status" required /></td>
                </tr>
				<tr>
                <td >CLASS</td>
                <td><input type="text" name="class" required /></td>
                </tr>
                <tr>
                <td></td>
                <td ><input type="submit" name="submit" value="Upload Time Table" ></td>
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