<?php
include 'eoffheader.php';
?>
   <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>All Results</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">All Results</li>
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
            <h2>ALL RESULTS DASHBOARD</h2>
            <p></p>
          </div>
          <!-- end title -->
          <!-- start gallery content -->
          <div class="mu-gallery-content">
            <!-- Start gallery menu -->
            <div class="mu-gallery-top"> 
                <section class="login-form-wrap">
                   <center>
				   <?php 
include 'connection.php';
?>
        <center><table  border="">		
           <tr bgcolor="">
            <th>PIN CODE</th>
			<th>ADMISSION NUMBER</th>
			<th>NAME</th>
            <th>CLASS</th>
            <th>TERM</th>
			<th>SESSION</th>
			<th>RESULT IN PDF</th>
			 <th></th>
            </tr>
            <?php
	//resultid, result, session, admsno, term, class, name
            $query="SELECT * FROM result";
            $result=  mysqli_query($conn,$query);
            while /*($row= mysqli_fetch_array($result)&&*/
			($row = mysqli_fetch_array($result)){  
            ?>
            <tr bgcolor="">
				<td><?php echo $row["resultid"];?></td>			
                <td><?php echo $row["admsno"];?></td>
				<td><?php echo $row["name"];?></td>
                <td><?php echo $row["class"];?></td>
                <td><?php echo $row["term"];  ?></td>
				<td><?php echo $row["session"]; ?></td> 	
                <td><embed src="result_upload/<?php echo $row["result"];?>"></embed></td>			
            </tr>
			 <?php 
			}
			 ?>
		 </table>
				   
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