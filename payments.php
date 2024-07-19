<?php
include 'connection.php';
if(isset($_POST['submit'])){
$pymntid=$_POST['pymntid'];
$admno=$_POST['admno'];
$pmethod=$_POST['pmethod'];
$amount=$_POST['amount'];
$paidto=$_POST['paidto'];
$pdate=$_POST['pdate'];
$purpose=$_POST['purpose'];
$class=$_POST['class'];
$status=$_POST['status'];
//pymntid, admno, pmethod, amount, paidto, pdate, purpose
if( !empty($pymntid) && !empty($admno)  && !empty($pmethod)  && !empty($amount)	
&& !empty($paidto)&& !empty($pdate) && !empty($purpose)&& !empty($class) && !empty($status)){	
		$query="insert into payments values('$pymntid','$admno','$pmethod','$amount','$paidto','$pdate','$purpose',
		'$class','$status')";
		$result=mysqli_query($conn,$query);
		if($result){
			echo "<script>alert('Payment Added Successfully.')</script>";
		}
		else{
			echo "<script>alert('cannot Add Payment due to:".mysqli_error($conn).')</script>';
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
           <h2>Record Payments</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Record Payments</li>
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
            <h2>RECORD STUDENT PAYMENTS</h2>
            <p>fill in the following details to capture students Payments</p>
          </div>
          <!-- end title -->
          <!-- start gallery content -->
          <div class="mu-gallery-content">
            <!-- Start gallery menu -->
            <div class="mu-gallery-top"> 
              
                   <center><form  method='post' >
                 <table>
                <tr>
                <td >PAYMENT ID </td>
                <td><input type="text" name="pymntid" required /></td>
                </tr>
                <tr>
                <td >ADMISSION NUMBER</td>
                <td><input type="text" name="admno" required /></td>
                </tr>
				<tr>
                <td >METHOD OF PAYMENT</td>
                <td><input type="text" name="pmethod" required /></td>
                </tr>
                <tr>
                <td >AMOUNT</td>
                <td><input type="text" name="amount" required /></td>
                </tr>
				<tr>
                <td >PAID TO</td>
                <td><input type="text" name="paidto" required /></td>
                </tr>
                <tr>
                <td >DATE OF PAYMENT</td>
                <td><input type="date" name="pdate" required /></td>
                </tr>
				<tr>
                <td >PURPOSE OF PAYMENT</td>
                <td><input type="text" name="purpose" required /></td>
                </tr>
				<tr>
                <td >CLASS</td>
                <td><input type="text" name="class" required /></td>
                </tr>
				<tr>
                <td >STATUS</td>
                <td><input type="text" name="status" required /></td>
                </tr>
                <tr>
                <td></td>
                <td ><input type="submit" name="submit" value="REGISTER PAYMENTS" ></td>
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