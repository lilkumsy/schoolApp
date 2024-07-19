<?php  
 include 'header.php';
?>
<!-- Start Slider -->
  <section >
    <!-- Start single slider item -->
	
<div class="w3-content w3-section" align='center'>
 <img class="mySlides" src="assets/img/slider/2.jpg" width='1490' height='580'>
 <img class="mySlides" src="assets/img/slider/3.jpg" width='1490' height='580'>
 <img class="mySlides" src="assets/img/slider/4.jpg" width='1490' height='580'>
 <img class="mySlides" src="assets/img/slider/5.jpg" width='1490' height='580'>
 <img class="mySlides" src="assets/img/slider/school.jpg" width='1490' height='580'>
</div>
<script>
var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
    
    <!-- Start single slider item --> 
  </section>
  <!-- End Slider -->
  <!-- Start about us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2>About Us</h2>              
                  </div>
                  <!-- End Title -->
                  <p>RIS Jalingo is a member of the Association of International Schools in Nigeria,
					a member of international schools services an approved educational institution in Nigeria and worldwide. 
					The School is inspected and accredited by the Ministry of Education,The Council of International Schools and 
					licensed by Cooperate Affairs Commission CAC in Nigeria.</p>
					<p>Our name Redstars is derived from the acronym RED+stars where RED means Read Every Day. So we are Red Every
					 Day stars. We study to shine.</p>
					<p>We are unique in our ways,we are loving, we are passionate, we are society builders,we are future leader,
					 we will bring the change our society needs in tolerance.</p>
                  
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
                <img  src="assets/img/ABOUT-US.jpg" width=700 hieght=700>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->
<!-- Start features section -->

  <!-- End features section -->
  <!-- Start our teacher -->
  <section id="mu-our-teacher">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-our-teacher-area">
            <!-- begain title -->
            <div class="mu-title">
              <h2>Management  Team</h2>
              <p></p>
            </div>
            <!-- end title -->
            <!-- begain our teacher content -->
            <div class="mu-our-teacher-content">
              <div class="row">
                <div class="col-lg-3 col-md-3  col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="assets/img/teachers/CHIKA%20OBIDIUKWU-EXECUTIVE%20-DIRECTOR1.jpg"
					  alt="teacher img" width=200 height=250>
                     
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4><center>CHIKA OBIDIUKWU</center></h4>
                      <span><center>EXECUTIVE DIRECTOR</center></span>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="assets/img/teachers/REV.B.B UTSENUBEN-PRINCIPAL.jpg" width=200 height=250>
                      
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4><center>REV. B.B UTSENUBEN</center></h4>
                      <span><center>PRINCIPAL</center></span>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="assets/img/teachers/IDIDORE%20DANFULANI-ADMIN-OFFICER.jpg" 
					  alt="teacher img" width=200 height=250>
                      
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4><center>IDIDORE DANFULANI</center></h4>
                      <span><center>ADMIN-OFFICER</center></span>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="assets/img/teachers/TANZE-MESHACH-EXAMS-OFFICER%20(2).jpg" 
					  alt="teacher img" width=200 height=250>
                      
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4><center>TANZE MESHACH</center></h4>
                      <span><center>EXAM OFFICER</center></span>
                      <p></p>
                    </div>
                  </div>
                </div>
                  <div class="mu-our-teacher-content">
              <div class="row">
               
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                                       
                    <div class="mu-ourteacher-single-content">
                      <h4></h4>
                      <span></span>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="assets/img/teachers/AKPEKONG%20EBENEZER-ICT%20COORDINATOR.jpg" 
					  alt="teacher img" width=200 height=250>  
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4><center>AKPEKONG EBENEZER</center></h4>
                      <span><center>ICT COORDINATOR</center></span>
                      <p></p>
                    </div>
                  </div>
                </div>
				<div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="assets/img/teachers/petience-caleb.png"  width=200 height=250>    
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4><center>PATIENCE CALEB</center></h4>
                      <span><center>RESOURCE PERSONNEL</center></span>
                      <p></p>
                    </div>
                  </div>
                </div>
				<div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                                       
                    <div class="mu-ourteacher-single-content">
                      <h4></h4>
                      <span></span>
                      <p></p>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <!-- End our teacher content -->           
          </div>
        </div>
      </div>
          </div></div></div>
  </section>
  <!-- End our teacher -->
<?php 
include 'footer.php';
?>