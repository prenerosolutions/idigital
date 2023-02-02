<?php
include('header.php');
?>

    <!--===== PROJECT BANNER SECTION =====-->
    <section class="blog-banner wow fadeInUp" data-wow-delay="0.2s">
                <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 blog-banner-heading wow fadeInUp" data-wow-delay="0.4s">
                <h2>Get a Quote</h2>
                <hr>
                <nav class="bradcaump-wrapper">
                 <a href="index.php" class="breadcrumb-single-item">HOME</a>
                 <span class="bradcaump-devide">/</span>
                <span class="breadcrumb-single-item active">Get a Quote</span>
                
               </nav>					
                </div>
                <!--col-md-12-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </section>
    <!--============== END PROJECT BANNER SECTION ===============-->
    
    <!--===== CONTACT SECTION =====-->
    <section class="contact-section">
        <div class="container">
            <div class="row">
			<div class="col-md-12 col-lg-8 offset-2 contact-wrapper">
            <h2>Get a Quote</h2>
                 <form action="contact_process.php" enctype="multipart/form-data" method="post">
                <div class="row contact-form">
                  <div class="col-6">
                    <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                  </div>
                  <div class="col-6">
                    <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                  </div>
                  <div class="col-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                  </div>
                  <div class="col-12">
                  <textarea class="form-control" name="message" placeholder="Message(optional)"></textarea>
                  </div>
                  <div class="col-12 contact-btn">
                   <button type="submit" name="submit" class="btn-sm">Submit</button>
                  </div>
                </div>
                <!--row-->
                  </form>
                 </div>
                 <!--col-md-8-->        
            </div>
        </div>
        <!--container-fluid-->
    </section>
    <!--============== END CONTACT SECTION ===============-->



<?php
include('footer.php');
?>