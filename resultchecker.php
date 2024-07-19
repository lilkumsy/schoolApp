<?php
include 'adminheader.php';
?>
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Result Checker</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Result Checker</li>
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
            <h2>RESULT CHECKER</h2>
            <p></p>
          </div>
          <!-- end title -->
          <!-- start gallery content -->
          <div class="mu-gallery-content">
            <!-- Start gallery menu -->
            <div class="mu-gallery-top"> 
            <?php 
			include 'connection.php';
				?>
                <center><form  method='post' ><table>
				<tr>
                <td>ADMISSION NUMBER</td>
                <td><input type="text"  name="admsno" required /></td>
                </tr>
				<tr>
                <td>PIN</td>
                <td><input type="text"  name="rid" required /></td>
                </tr>
				<tr>
                <td></td>
                <td ><input type="submit"  name="submit"  value="CHECK RESULT" ></td>
                </tr>
                </table>
                </form>
                </center>
				<center> 
					<table  border="">		
           <tr bgcolor="">
            <th>PIN</th>
            <th>CLASS</th>
            <th>SESSION</th>
			<th>ADMISSION NUMBER</th>
			<th>TERM</th>
			<th>RESULT</th>				
            </tr>
            <?php
			if(isset($_POST['submit'])){
			$admsno=$_POST['admsno'];
			$rid=$_POST['rid'];
			//rid, rslt, session, admsno, term, class
            $query="SELECT * FROM result where admsno='$admsno' AND rid='$rid'";
            $result=  mysqli_query($conn,$query) or die(mysqli_error($conn));
            while /*($row= mysqli_fetch_array($result)&&*/
			($row = mysqli_fetch_array($result)){  
            ?>
            <tr bgcolor="">      
                <td><?php echo $row["rid"];?></td>
				<td><?php echo $row["class"];?></td>
                <td><?php echo $row["session"];?></td>
                <td><?php echo $row["admsno"];  ?></td>
				<td><?php echo $row["term"]; ?></td> 
				<td><a href=''><?php echo $row["rslt"];?></a></td>				
				
            </tr>
			 <?php 
			}
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