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
              <h2>view all users dashboard</h2>
               
              <?php 
                
include 'connection.php';
?>
        <center><table  border="" >		
           <tr bgcolor="">
            <th>Name</th>
            <th>Username</th>
            <th>Date Created</th>
            <th>Created By</th>
			<th>Password</th>
			<th>Role</th>
            <th>Action</th>
            <th>Action</th>
            </tr>
            <?php
			
            $query="SELECT * FROM userlogin";
            $result=  mysqli_query($conn,$query);
            while /*($row= mysqli_fetch_array($result)&&*/
			($row = mysqli_fetch_array($result)){  
            ?>
            <tr bgcolor="">      
                <td><?php echo $row["name"];?></td>
				<td><?php echo $row["user"];?></td>
                <td><?php echo $row["cdate"];?></td>
                <td><?php echo $row["by"];?></td>
                <td><?php echo $row["pass"];  ?></td>
				<td><?php echo $row["role"]; ?></td> 
				<td><a href="edit.php">Edit</a></td>
				<td><a href="delete.php">Delete</a></td>
            </tr>
			 <?php 
			}
			 ?>
		 </table></center>
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