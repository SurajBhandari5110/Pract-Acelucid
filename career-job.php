   <?php 
					include "db.php"; 
	  $search=$_GET["alias"];
	  $result = mysqli_query($conn,"SELECT * FROM career where alias='$search'")or
die("Table Errors Contact admin support");
				$db_field = mysqli_fetch_assoc($result) ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta name="description" content=".NET Custom Development | Custom Software Development | Full stack Development">
  <meta name="keywords" content=".NET Custom Software Development">
  <meta name="author" content="elemis">
  <title><?php print $db_field['title']; ?> | Acelucid</title>
  <link rel="shortcut icon" href="assets/img/favicon.png">  <link rel="stylesheet" href="assets/css/plugins.css">
  <link rel="stylesheet" href="assets/css/style.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="index.html"> <img src="assets/img/logo.svg" srcset="./assets/img/logo.svg 2x" alt="" width="200" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Acelucid</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
            <ul class="navbar-nav">
              
              <li class="nav-item dropdown dropdown-mega">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Industries</a>
                <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                <li class="mega-menu-content">
                  <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled text-center">
           <li class="col"><a class="dropdown-item" href="https://acelucid.com/logistic-and-transpotation.html">
                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/industries/9.svg" width="64" height="64" alt=""></div>
                        <span>Logistics & Supply Chain</span>
                      </a>
                    </li>
         <li class="col"><a class="dropdown-item" href="https://acelucid.com/healthcare.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/industries/2.svg" width="64" height="64" alt=""></div>
                        <span>Healthcare</span>
                      </a>
                    </li>
            
                    <li class="col"><a class="dropdown-item" href="https://acelucid.com/education.html">
                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/industries/7.svg" width="64" height="64" alt=""></div>
                        <span>Education</span>
                      </a>
                    </li>
                    <li class="col"><a class="dropdown-item" href="https://acelucid.com/finance-and-banking.html">
                           <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/industries/3.svg" width="64" height="64" alt=""></div>
                        <span>Finance</span>
                      </a>
                    </li>
         <li class="col"><a class="dropdown-item" href="https://acelucid.com/ecommerce.html">
                             <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/industries/1.svg" width="64" height="64" alt=""></div>
                        <span>Retail & E-commerce</span>
                      </a>
                    </li>    
                           
                   
                  </ul>
                  <!--/.row -->
                 </li>
                <!--/.mega-menu-content-->
              </ul>
                  <!--/.dropdown-menu -->
                  </li>
				      <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Solutions</a>
                  <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                    <li class="mega-menu-content">
                      <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled  text-center">
                        <li class="col"><a class="dropdown-item" href="https://acelucid.com/artificial-Intelligence-and-machine-learning.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0 text-white" src="assets/img/demos/1.svg" width="64" height="64" alt=""></div>
                            <span>AI & ML</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="https://acelucid.com/cloud-computing.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/2.svg" width="64" height="64" alt=""></div>
                            <span>Cloud Computing</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="https://acelucid.com/blockchain.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/3.svg" width="64" height="64" alt=""></div>
                            <span>Blockchain</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="https://acelucid.com/internet-of-things.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/4.svg" width="64" height="64" alt=""></div>
                            <span>Internet of Things</span>
                          </a>
                        </li>
						   <li class="col"><a class="dropdown-item" href="https://acelucid.com/augmented-reality-and-virtual-reality.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/5.svg" width="64" height="64" alt=""></div>
                            <span>AR/VR</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="https://acelucid.com/cybersecurity.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/6.svg" width="64" height="64" alt=""></div>
                            <span>Cybersecurity</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="https://acelucid.com/devops.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/7.svg" width="64" height="64" alt=""></div>
                            <span>DevOps</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="https://acelucid.com/web-development.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/8.svg" width="64" height="64" alt=""></div>
                            <span>Web Development</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="https://acelucid.com/mobile-development.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/9.svg" width="64" height="64" alt=""></div>
                            <span>Mobile Development</span>
                          </a>
                        </li>
                     <li class="col"><a class="dropdown-item" href="https://acelucid.com/minimum-viable-product.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/10.svg" width="64" height="64" alt=""></div>
                            <span>MVP Development</span>
                          </a>
                        </li>
                     <li class="col"><a class="dropdown-item" href="https://acelucid.com/project-management-expertise.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/11.svg" width="64" height="64" alt=""></div>
                            <span>Project Management Expert</span>
                          </a>
                        </li>
                    
                     
                      </ul>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
               <li class="nav-item">
                  <a class="nav-link" href="https://acelucid.com/ourwork.html" >Our Work</a>               
                  <!--/.dropdown-menu -->
                </li>             
            
			
				    <li class="nav-item"> <a class="nav-link" href="https://acelucid.com/staff-augmentation.html" >Hire Devs</a>        </li>
            <li class="nav-item"> <a class="nav-link" href="https://acelucid.com/blogs.html" >Blogs</a> 
				  <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About us</a>
                  <ul class="dropdown-menu mega-menu">
                    <li class="mega-menu-content">
                      <div class="row gx-0 gx-lg-3">
                        <div class="col-lg-4">
                          <h6 class="dropdown-header"><a class="text-primary" href="https://acelucid.com/about.html">About Acelucid</a></h6>
                        <ul class="list-unstyled cc-2 pb-lg-1">
                            <li><a class="dropdown-item" href="https://acelucid.com/what-we-do.html">What We Do</a></li>
							<li><a class="dropdown-item" href="https://acelucid.com/about.html#core-value">Core Values</a></li>
                            <li><a class="dropdown-item" href="https://acelucid.com/about.html#our-mission">Our Mission</a></li>
                            <li><a class="dropdown-item" href="https://acelucid.com/about.html#our-team">Our Team</a></li>
                            <li><a class="dropdown-item" href="https://acelucid.com/index.html#testimonial">Testimonials</a></li>
                            <li><a class="dropdown-item" href="https://acelucid.com/contact.html">Contact Us</a></li>
                          </ul>
                           <h6 class="dropdown-header mt-lg-6"><a class="text-primary" href="about.html">Our Culture</a></h6>
                          <ul class="list-unstyled cc-2">
                            <li><a class="dropdown-item" href="https://acelucid.com/why-choose-us.html">Why Choose Us</a></li>
                            <li><a class="dropdown-item" href="https://acelucid.com/how-we-do-it.html">How We Do It</a></li><li><a class="dropdown-item" href="https://acelucid.com/life-acelucid.html">Life at Acelucid</a></li>
							<li><a class="dropdown-item" href="https://acelucid.com/career.php">Career</a></li>
							  
                          </ul>
                        </div>
                        <!--/column -->
                        <div class="col-lg-8">
                          <h6 class="dropdown-header"><a class="text-primary" href="https://acelucid.com/services.html">Services</a></h6>
                          <ul class="list-unstyled cc-3">
                            <li><a class="dropdown-item" href="https://acelucid.com/services.html#Custom">Custom Software Development</a></li>
                             <li><a class="dropdown-item" href="https://acelucid.com/services.html#Digital">Digital Transformation Consulting</a></li>
                            <li><a class="dropdown-item" href="https://acelucid.com/services.html#Quality">Quality Assurance & Testing</a></li>
                          <li><a class="dropdown-item" href="https://acelucid.com/services.html#Emerging">Emerging Technologies</a></li>
                        
                          </ul>
							
                        
                        </div>
                        <!--/column -->
                      </div>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
          
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="mailto:hello@acelucid.com" class="link-inverse"><span >hello@acelucid.com</span></a>
                  <br />+91 7338084881 <br /> <nav class="nav social social-white mt-4">
                    <a href="https://www.linkedin.com/company/acelucid/"><i class="uil uil-linkedin"></i></a>
                    <a href="mailto:hello@acelucid.com"><i class="uil uil-google"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
             
              <li class="nav-item d-none d-md-block">
                <a href="#" class="btn btn-sm btn-primary rounded" data-bs-toggle="modal" data-bs-target="#modal-signup">Let's Connect</a>
              </li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->

      <!--/.modal -->
      <div class="modal fade" id="modal-signup" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content text-center">
            <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <h2 class="mb-3 text-start text-primary">Let's Connect</h2>
              <p class="lead mb-6 text-start">It takes less than a minute.</p>    <form class="text-start mb-3" action="#" id="connect" method="post">
                <div class="form-floating mb-4">
                  <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Name">
                  <label for="loginName">Name</label>
                </div>
                <div class="form-floating mb-4">
                  <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                  <label for="loginEmail">Email</label>
                </div>
                <div class="form-floating mb-4">
                  <textarea style="height: 150px" class="form-control" placeholder="Send Message" name="message" rows="5" id="message"></textarea>
                 
                </div>
                <div class="g-recaptcha mb-1" data-sitekey="6LfKyIUpAAAAAJ77GPfWcDK4zRj_q4BhLkiQUhBq"></div>
                <input type="submit" name="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2" id="subbutt" value="Submit">
				</form>
              <!-- /form -->
              <div class="divider-icon my-4">or</div>
              <nav class="nav social justify-content-center text-center">
			
                <a href="mailto:hello@acelucid.com" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                <a href="https://www.linkedin.com/company/acelucid/" class="btn btn-circle btn-sm btn-linkedin"><i class="uil uil-linkedin"></i></a>
               
              </nav>
              <!--/.social -->
            </div>
            <!--/.modal-content -->
          </div>
          <!--/.modal-body -->
        </div>
        <!--/.modal-dialog -->
      </div>
      <!--/.modal -->
    </header>
    <!-- /header -->
	
    <section class="wrapper bg-soft-primary">
      <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
          <div class="col-md-10 col-xl-8 mx-auto">
            <div class="post-header">
              <h1 class="display-1 mb-5"><?php print $db_field['title']; ?></h1>
              <ul class="post-meta fs-17 mb-5">
                <li><i class="uil uil-clock"></i>&nbsp;<?php print $db_field['job_type']; ?></li>
                <li><i class="uil uil-location-arrow"></i>&nbsp;<?php print $db_field['place']; ?></li>
                <li><i class="uil uil-building"></i>&nbsp;<?php print $db_field['position']; ?></li>
              </ul>
              <!-- /.post-meta -->
            </div>
            <!-- /.post-header -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="blog single mt-n17">
              <div class="card shadow-lg">
                <div class="card-body">
                 <?php print $db_field['jd']; ?>
               
                  <!--/.row -->
                  <a href="#" class="btn btn-primary rounded-pill mt-4" data-bs-toggle="modal" data-bs-target="#modal-job">Apply Now</a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.blog -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16">
        <div class="row align-items-center mb-6">
          <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
            <h2 class="display-6 mb-0">More Job Openings</h2>
          </div>
          <!--/column -->
          <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
            <a href="career.php#open-position" class="btn btn-primary rounded-pill mb-0">Explore Positions</a>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
     
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
 <footer class="bg-dark text-inverse mt-5 mt-md-16">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <img class="mb-4" src="assets/img/logo-white.svg" srcset="./assets/img/logo-white.svg 2x" alt="" width="200"/>
			  <p>Go beyond conventional boundaries by pioneering value-driven business innovations rooted in our adaptable digital ecosystems, creative designs, and sustainable technological solutions.</p>
			  <p><i class="uil uil-envelope"></i>&nbsp;hello@acelucid.com</p>
			  <p><i class="uil uil-phone"></i>&nbsp;+91 7338084881</p>
			 
          
            <nav class="nav social social-white">
              <a href="https://www.linkedin.com/company/acelucid/" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
              <a href="mailto:hello@acelucid.com" target="_blank"><i class="uil uil-google"></i></a>
			  <a href="https://www.instagram.com/official_acelucid/" target="_blank"><i class="uil uil-instagram"></i></a>
               </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Solutions</h4>
            <ul class="list-unstyled  mb-0">
              <li><a href="https://acelucid.com/minimum-viable-product.html">MVP Development</a></li>
              <li><a href="https://acelucid.com/logistic-and-transpotation.html">Software Development</a></li>
              <li><a href="https://acelucid.com/web-development.html">Web App</a></li>
              <li><a href="https://acelucid.com/mobile-development.html">Mobile</a></li>
              <li><a href="https://acelucid.com/blockchain.html">Blockchain</a></li>
               <li><a href="https://acelucid.com/what-we-do.html">Ui & Ux</a></li>
               <li><a href="https://acelucid.com/devops.html">DevOps Engineering</a></li>
               <li><a href="https://acelucid.com/ecommerce.html">eCommerce</a></li>
               <li><a href="https://acelucid.com/staff-augmentation.html">Dedicated development team</a></li>
               <li><a href="https://acelucid.com/artificial-Intelligence-and-machine-learning.html">AI & ML</a></li>
              <li><a href="https://acelucid.com/cybersecurity.html">Cyber Security</a></li>
            </ul>
			</div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Technologies</h4>
            <ul class="list-unstyled  mb-0">
              <li><a href="https://acelucid.com/what-we-do.html">AngularJS</a></li>
              <li><a href="https://acelucid.com/what-we-do.html">React</a></li>
              <li><a href="https://acelucid.com/what-we-do.html">Vue.js</a></li>
              <li><a href="https://acelucid.com/what-we-do.html">Node.js</a></li>
              <li><a href="https://acelucid.com/what-we-do.html">Python</a></li>
              <li><a href="https://acelucid.com/what-we-do.html">Dot Net</a></li>
              <li><a href="https://acelucid.com/what-we-do.html">Laravel</a></li>
              <li><a href="https://acelucid.com/what-we-do.html">RoR</a></li>
              <li><a href="https://acelucid.com/what-we-do.html">Golang</a></li>
              <li><a href="https://acelucid.com/what-we-do.html">Java</a></li>
              <li><a href="https://acelucid.com/what-we-do.html">Android</a></li>
              <li><a href="https://acelucid.com/what-we-do.html">iOS</a></li>
              <li><a href="https://acelucid.com/what-we-do.html">Flutter</a></li>
              <li><a href="https://acelucid.com/what-we-do.html">React Native</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
		  	<div class="col-md-12 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Let's Connect Now</h4>
            <p class="mb-5">Trusted for upgrades & resilient software development. 98% tech leader approval. Long-term clients.</p>
            <div class="newsletter-wrapper">
              <!-- Begin Mailchimp Signup Form -->
           <a href="#" class="btn btn-sm btn-primary rounded" data-bs-toggle="modal" data-bs-target="#modal-signup">Let's Connect</a>
              <!--End mc_embed_signup-->
            </div>
            <!-- /.newsletter-wrapper -->
          </div>
          <!-- /.widget -->
				   <div class="widget">
            <h4 class="widget-title text-white mb-3">About Us</h4>
            <ul class="list-unstyled  mb-0">
              <li><a href="about.html">Company</a></li>
           
              <li><a href="https://acelucid.com/#testimonial">Testimonial</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="https://acelucid.com/privacy-policy.html">Privacy Policy</a></li>
              <li><a href="https://acelucid.com/contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
		    <!-- /column -->
        <div class="col-md-4 col-lg-3">
       
          <!-- /.widget -->
		
        </div>
        <!-- /column -->
    
        <!-- /column -->
      </div>
      <!--/.row -->
		  <p class="mb-4">Copyright © 2019-2024 Acelucid Technologies Private Limited. All rights reserved.</p>
    </div>
    <!-- /.container -->
  </footer>
	 <div class="modal fade" id="modal-job" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content text-center">
            <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <h2 class="mb-3 text-start text-primary">Apply Now</h2>
              <p class="lead mb-6 text-start">It takes less than a minute.</p>
              <form class="text-start mb-3" action="#" id="apply" method="post">
				  <input type="hidden" name="job" id="job" value="<?php print $db_field['uid']; ?>" />
                  <input type="hidden" name="jobtitle" id="jobtitle" value="<?php print $db_field['title']; ?>" />
                <div class="form-floating mb-4">
                  <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Name" requred>
                  <label for="loginName">Name</label>
                </div>
                <div class="form-floating mb-4">
                  <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                  <label for="loginEmail">Email</label>
                </div>
                 <div class="form-floating mb-4">
                  <input type="number" class="form-control" placeholder="Contact" name="phone" id="phone" required>
                  <label for="loginEmail">Phone</label>
                </div>
				 
                 <div class="form-floating mb-4">
					 <p id="errorMessage" style="color: red;"></p>
                  <input type="file" class="form-control"  name="fileToUpload" id="fileToUpload" accept="application/pdf" onchange="checkFileSize()">    
					 <small class="float-end">Pdf file and max size 2mb only. </small>
                </div>
              
              
                <input type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2 mt-2" id="applybutt" value="Apply">
				</form>
              <!-- /form -->
          
              <!--/.social -->
            </div>
            <!--/.modal-content -->
          </div>
          <!--/.modal-body -->
        </div>
        <!--/.modal-dialog -->
      </div>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/theme.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	</body>
<script>	
	$("form#connect").submit(function(e) {
	//	alert("hi");
	$('#subbutt').attr('disabled', true);
			let msgcheck =	$('#message').val();
		if(msgcheck == ''){
			alert("Enter message");
			return;
		}
	e.preventDefault(); var formData = new FormData(this);
		var furl = window.location.href;
		formData.append('url',furl);   
 $.ajax({
        url: 'service/email/mail.php',
        type: 'POST',
        data: formData,
	    success: function (data) {
			//alert(data);
			//if(data==="done"){
				
	alert("Thank You!! We will contact you.");
		window.location.reload();		

 return; //}		   
if(data==="already"){
alert("Application Already Submitted!");
return; 
}		
 },
        cache: false,
        contentType: false,
        processData: false
    });
});

	</script>
	<script>
	$("form#apply").submit(function(e) {
	//	alert("hi");
	$('#applybutt').attr('disabled', true);
	let filecheck =	$('#fileToUpload').val();
		if(filecheck == ''){
			alert("Upload your CV");
			return;
		}
	e.preventDefault();    
    var formData = new FormData(this);
//alert(formData);
   
 $.ajax({
        url: 'allogin/apply_post.php',
        type: 'POST',
        data: formData,
	    success: function (data) {
			alert(data);
			window.location.reload();
		
 },
        cache: false,
        contentType: false,
        processData: false
    });
		
});

	</script>
	<script>
        function checkFileSize() {
            var fileInput = document.getElementById('fileToUpload');
            var errorMessage = document.getElementById('errorMessage');
            
            if (fileInput.files.length > 0) {
                var fileSize = fileInput.files[0].size; // in bytes

                // Convert fileSize to megabytes
                var fileSizeInMB = fileSize / (1024 * 1024);

                // Set your maximum file size limit (2MB in this example)
                var maxSizeMB = 2;

                if (fileSizeInMB > maxSizeMB) {
                    // Display error message and clear the file input
                    errorMessage.textContent = 'File size exceeds the limit (max ' + maxSizeMB + 'MB).';
                    fileInput.value = ''; // Clear the file input
                } else {
                    // Clear any previous error messages
                    errorMessage.textContent = '';
                }
            }
        }
    </script>
</html>