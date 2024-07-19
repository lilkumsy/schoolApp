<?php
include 'eoffheader.php';
?>
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>View Student By Class</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">View Student By Class</li>
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
            <h2>VIEW STUDENT RECORD BY CLASS</h2>
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
                <center><form  method='post' ><table><tr>
                <td>CLASS </td>
                <td><input type="text" id='class' name="class" required /></td>
                </tr>
				<tr>
                <td></td>
                <td ><input type="submit"  name="submit"  value="Make Query" ></td>
                </tr>
                </table>
                </form>
                </center>
       <center><table  border="">		
           <tr bgcolor="">
            <th>ADMISSION NUMBER</th>
			<th>SURNAME</th>
            <th>FIRST NAME</th>
            <th>MIDDLENAME</th>
			<th>GENDER</th>
			<th>DATE OF BIRTH</th>
			<th>RELIGION</th>
			<th>TRIBE</th>	
			<th>STATE OFRIGIN</th>
			<th>STATE OF RESIDENT</th>
			<th>NATIONALITY</th>
			<th>ACADEMIC YEAR</th>         
            <th>CLASS ADMITTED</th>
			<th>PASSPORT</th>
            </tr>
            <?php
			include 'connection.php';
			if(isset($_POST['submit'])){
			$class=$_POST['class'];
            $query="SELECT * FROM studreg where classseknadm='$class'";
            $result=  mysqli_query($conn,$query);
            while /*($row= mysqli_fetch_array($result)&&*/
			($row = mysqli_fetch_array($result)){  
            ?>
            <tr bgcolor="">
				<td><?php echo $row["admsno"];?></td>			
                <td><?php echo $row["sname"];?></td>
				<td><?php echo $row["fname"];?></td>
                <td><?php echo $row["mname"];?></td>
                <td><?php echo $row["gender"];  ?></td>
				<td><?php echo $row["dob"]; ?></td> 
				<td><?php echo $row["rel"];?></td>
				<td><?php echo $row["tribe"];?></td>
                <td><?php echo $row["state"];?></td>
                <td><?php echo $row["resstate"];  ?></td>
				<td><?php echo $row["nationality"]; ?></td>
				<td><?php echo $row["acyear"];?></td>
                <td><?php echo $row["classseknadm"];  ?></td>	
				 <td><img class="profilepic" src="profile_upload/<?php echo $row["pic"];?>" height="110px" width="110px" /></td>	
            </tr>
			 <?php 
			}
			}
			
			 ?>
		 </table>
				   
                    </center>
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