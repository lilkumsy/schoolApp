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
              <h2>view all results dashboard</h2>
        <center><table  border="" >		
           <tr bgcolor="">
            <th>PIN</th>
            <th>CLASS</th>
            <th>SESSION</th>
			<th>ADMISSION NUMBER</th>
			<th>TERM</th>
			<th>RESULT</th>				
            </tr>
			 <?php
			include 'connection.php';
            $query="SELECT * FROM result";
            $result=  mysqli_query($conn,$query);
            while /*($row= mysqli_fetch_array($result)&&*/
			($row = mysqli_fetch_array($result)){		  
            ?>      
            <tr bgcolor="">      
                <td><?php echo $row["rid"];?></td>
				<td><?php echo $row["class"];?></td>
                <td><?php echo $row["session"];?></td>
                <td><?php echo $row["admsno"];  ?></td>
				<td><?php echo $row["term"]; ?></td> 
				<td><a href='<?php echo $row["rslt"];?>'>Click to preview</a></td>								
            </tr>
			<?php 
			}
			 ?>
		 </table></center>
            </div>
            <!-- End gallery menu -->    
          </div>
          <!-- end gallery content -->
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