<?php 
include 'cashierheader.php';
?>
  <!-- Start our teacher -->
  <section id="mu-our-teacher">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-our-teacher-area">
            <!-- begain title -->
            <div class="mu-title">
              <h2>REMOVE PAYMENT RECORD</h2>
              <?php 
				include 'connection.php';
				if(isset($_POST['submit'])){
				$paymntid=$_POST['paymntid'];
				//paymntid, admsno, pmthod, amount, pto, pdat, ppurpose, pclass, status
				$del=mysqli_query($conn,"DELETE FROM payments WHERE paymntid='$paymntid'");
				if($del){
				echo "<script>alert('Payment Records Removed Successful')</script>";	
				}
				else{
					echo "<script>alert(Unsucessful Removal of Payment Records, try again".mysqli_error($conn).')</script>';
				}
				}
				?>
				<center><form method="post">
				<table>
				<tr>
				<td>Payment Id</td>
				<td><input type="text" name="paymntid"  ></td>
				</tr>
				<tr>
				<td></td>
				<td><input type="submit" name="submit"  value="REMOVE RECORD"></td>
				</tr>
				</table>
				</center></form>
            </div>
            <!-- end title -->
            <!-- begain our teacher content -->
          
      </div>
    </div>
    </div>
    </div>
  </section>
  <!-- End our teacher -->
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