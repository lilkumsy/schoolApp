<?php 
include 'adminheader.php';
?>
  <!-- Start our teacher -->
  <section id="mu-our-teacher">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-our-teacher-area">
            <!-- begain title -->
            <div class="mu-title">
              <h2>EDIT USER RECORD</h2>
              <?php
				include 'connection.php';
				if(isset($_POST['submit'])){
				$user=$_POST['user'];
				$pass=$_POST['pass'];
				$role=$_POST['role'];
				$by=$_POST['by'];
				$date=$_POST['date'];
				$name=$_POST['name'];
				if(!empty($user)  && !empty($pass)  && !empty($role)
				&& !empty($role)&& !empty($by) && !empty($date) && !empty($name) ){
					//user, pass, role, by, date, name
						 $updat = mysqli_query($conn, "UPDATE userlogin SET  user='$user',pass='$pass',
						 role='$role',by='$by',cdate='$date',name='$name' where user='$user'");						   
					if($updat){
				echo "update successful";	
				}
				else{
					echo "unsucessful update, try again".mysqli_error($conn);
				}
				}
				}
				?>
				<form method="post">
<center><table>
<tr>
<td>Full Name </td>
<td><input type="text" name="name"  required /></td>
</tr><tr>
<td>Username</td>
<td><input type="text" name="user" required /></td>
</tr><tr>
<td>Password</td>
<td><input type='password' name="pass" required /></td>
</tr><tr>
<td>Role</td>
<td><input type="text" name="role" required /></td>
</tr><tr>
<td>Date Created</td>
<td><input type='date' name="date" required /></td>
</tr><tr>
<td>By</td>
<td><input type="text" name="by" required /></td>
</tr><tr>
<tr>
<td></td>
<td><input type="submit" name="submit"  value="Edit User"  /></td>
</tr>
</table></center>
    </form>
            </div>
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