<?php
session_start();
include 'connection.php';
$roleA="admin";$roleB="nuser";
if(isset($_POST['submit'])){
$user=$_POST['user'];
$pass=$_POST['pass'];
$query="select * from userlogin where user='".$user."' and pass='".$pass."' limit 6";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)==1){
$_SESSION['role']=$row['role'];
$_SESSION['admsno']=$row['admsno'];
$role=$row['role'];
   if($role=='admin'){
    $_SESSION['role']=$role;
	$_SESSION['loggedin']='yes';
	$_SESSION['user']=$username;
	$_SESSION['admsno']=$row['admsno'];
    header('Location:adminhome.php');
	exit;      
}
    else{
	if($role=='principal'){
    $_SESSION['role']=$role;
	$_SESSION['loggedin']='yes';
	$_SESSION['user']=$username;
	$_SESSION['admsno']=$row['admsno'];
    header('Location:principalhome.php');
	exit;
}
    else{
	if($role=='examofficer'){
    $_SESSION['role']=$role;
	$_SESSION['loggedin']='yes';
	$_SESSION['user']=$username;
	$_SESSION['admsno']=$row['admsno'];
    header('Location:examofficerhome.php');
	exit;
}
     else{
	if($role=='cashier'){
    $_SESSION['role']=$role;
	$_SESSION['loggedin']='yes';
	$_SESSION['user']=$username;
	$_SESSION['admsno']=$row['admsno'];
    header('Location:cashierhome.php');
	exit;
}
     else{
	if($role=='student'){
    $_SESSION['role']=$role;
	$_SESSION['loggedin']='yes';
	$_SESSION['user']=$username;
	$_SESSION['admsno']=$row['admsno'];
    header('Location:studenthome.php');
	exit;
}  
 else{
	if($role=='formmaster'){
    $_SESSION['role']=$role;
	$_SESSION['loggedin']='yes';
	$_SESSION['user']=$username;
	$_SESSION['admsno']=$row['admsno'];
    header('Location:formmasterhome.php');
	exit;
}                   
}
}
}
}
}
}
}
?>
<?php  
 include 'header.php';
?>
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Portal Login</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Portal Login</li>
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
            <h2>Portal Login</h2>
            <p>Fill in the following details to login either as a Parent,Student,Cashier,Principal,Exam Officer or Administrator</p>
          </div>
          <!-- end title -->
          <!-- start gallery content -->
          <div class="mu-gallery-content">
            <!-- Start gallery menu -->
            <div class="mu-gallery-top"> 
                <section class="login-form-wrap">
                   <center><form class="login-form" action="" method="post">
                 <table>
                <tr>
                <td ><label class="lab">USERNAME</td>
                <td><input type="text" name="user" required /></td>
                </tr>
                <tr>
                <td ><label class="lab">PASSWORD</td>
                <td><input type="password" name="pass" required /></td>
                </tr>
                <tr>
                <td></td>
                <td ><input type="submit" name="submit" value="LOGIN" ></td>
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
 <?php 
include 'footer.php';
?>