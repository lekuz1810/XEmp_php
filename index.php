<?php

    // MySql Connection
    include 'Xemp_components/Xemp_Mysql_conn.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="XEmp Services for BV Agency and Ex-Employees"/>
    <meta name="description" content="funnelio - Multi-Purpose HTML5 Template"/>
    <meta name="author" content=""/>

    <!-- Favicon -->
    <link href="assets/img/XEmp-logo9.png" rel="icon">

    <!-- Title  -->
    <title>XEmp Services</title>

    <!-- Google Fonts and Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    
    <!-- Icon Font CDNs -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        
    <!-- Animate CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- animate css  -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!-- home style -->
    <link rel="stylesheet" href="assets/css/home_style.css" />
  </head>
  <body class="home-st2">

    <!-- <div id="response"></div> -->
    <!-- ====== Start Loading ====== -->
    <div class="loader-wrap">
      <svg
        viewBox="0 0 1000 1000"
        preserveAspectRatio="none"
        width="100%"
        height="100%"
      >
        <!-- <defs>
          <linearGradient id="path-gradient" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color: #f3f0d7" />
            <stop offset="100%" style="stop-color: #ceefed" />
          </linearGradient>
        </defs> -->
        <path
          id="svg"
          d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"
          fill="url(#path-gradient)"
        ></path>
      </svg>

      <div class="loader-wrap-heading">
        <div class="load-logo cont mb-50">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="60"
            height="60"
            fill="currentColor"
            class="bi bi-shield-check svg"
            viewBox="0 0 16 16"
            style="color: #27374D"
          >
            <path
              d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"
            />
            <path
              d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0"
            />
          </svg>
        </div>
        <div class="load-text">
          <span>
            <b>X</b>
          </span>
          <span>
            <b>E</b>
          </span>
          <span>
            <b>m</b>
          </span>
          <span>
            <b>p</b>
          </span>
          <!-- <span>
            <b>O</b>
          </span>
          <span>
            <b>Y</b>
          </span>
          <span>
            <b>M</b>
          </span>
          <span>
            <b>E</b>
          </span>
          <span>
            <b>T</b>
          </span>
          <span></span>
          <span>
            <b>C</b>
          </span>
          <span>
            <b>H</b>
          </span>
          <span>
            <b>E</b>
          </span>
          <span>
            <b>C</b>
          </span>
          <span>
            <b>K</b>
          </span> -->
        </div>
      </div>
    </div>
    <!-- ====== End Loading ====== -->

    <div id="scrollsmoother-container">
      <!--  Start navbar  -->
      <?php include 'Xemp_components/XEmpNavbar.php' ?>
      <!--  End navbar  -->


      <!--  Start header  -->
      <header class="tc-header-st2 px-2">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
              <div class="info">
                <h1 class="shaps-title">
                  Welcome to
                  <span class="Xemp-heading"> XEmp </span>
                </h1>
                <h5 class="title mb-20 mt-3 font-bold">
                  Your Trusted Partner on Ex-Employee Services
                </h5>
                <div class="text cr-666 mb-50">
                XEmp is dedicated to providing comprehensive services for former employees.
                 We specialize in resolving critical employment-related, legal, and background verification issues,
                  ensuring a smooth and efficient process for accessing the essential documents and services to Ex-Employee.
                </div>
                <div class=" mt-20">
                  <a href="#" class="butn radius-5" >
                    <span>
                      Get Stared Now
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="subconatiner mt-1 mb-5">
                <div class="info wow fadeInUp slow">
                  <div
                    class="speed-test pt-30"
                    data-wow-delay="0.2s"
                  >
                    <div class="d-flex fs-2 mb-1 align-items-center">
                      <h6 class="fsz">Book a demo!</h6>
                      <span
                        class="ms-2 d-inline-block rounded bg-primary bg-opacity-10 px-2 py-1"
                        style="font-size: 0.5em"
                      >
                        Quick Response
                      </span>
                    </div>

                    <p>Contact us for demo!</p>

                    <form id="demoForm" action="" class="form">
                      <div class="form-group">
                        <div class="item">
                          <input type="text" placeholder="Full Name*" name="fullName" required/>
                        </div>
                        <div class="item">
                          <input type="text" placeholder="Organisation name*" name="OrgName" required/>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="item">
                          <input type="text" placeholder="Official Email ID*" name="OrgOffEmail" required/>
                        </div>
                        <div class="item">
                          <input type="text" placeholder="Phone Number*" name="OrgPhonenumber" required/>
                        </div>
                      </div>
                      <button id="demobutton" type="submit" value="Submit" class="butn radius-5 w-100 mt-15">
                        <span id="button-text">Send</span>
                        <div id="loader" style="display:none;">
                          <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                          <span role="status">Sending...</span>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img src="assets/img/header_circle.png" alt="" class="circle" />
      </header>
      <!--  End header  -->

      <!--Contents-->
      <main>
        <!--  Our BV Services Start  -->
        <section id="BVAgency" class="tc-services-st2">
          <div class="container-xxl OurService_section py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp slow" data-wow-delay="0.1s">
                    <h1 class="position-relative d-inline color-primary">BV Agency Servies</h1>
                    <h6 class="mt-2 color-primary">Services help provide a comprehensive view of a candidate’s background</h6>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp slow" data-wow-delay="0.1s">
                        <div class="OurServies-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <h5 class="service_heading"><i class="bi bi-envelope-at-fill"></i></h5>
                                </div>
                                <div class="OurServies_paraCard">
                                    <p class="OurServies_para text-secondary2">Verification requests with Form via email to confirm the accuracy
                                        of information provided by the candidate. This includes employment history, educational credentials,
                                        and other relevant details.</p>
                                    <img class="img-fluid rounded w-100" src="assets/img/email.jpg" alt="">
                                </div>
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Email Verification</h5>
                                <small>Email with BVF</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp slow" data-wow-delay="0.3s">
                        <div class="OurServies-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <h5 class="service_heading"><i class="bi bi-telephone-fill"></i></h5>
                                </div>
                                <div class="OurServies_paraCard">
                                    <p class="OurServies_para text-secondary2">Conducts thorough phone interviews to validate 
                                        information with previous employers, educational institutions, or references, ensuring accuracy and reliability.</p>
                                    <img class="img-fluid rounded w-100" src="assets/img/phone-call.jpg" alt="">
                                </div>
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Phone Call Verification</h5>
                                <small>Phone Call to Employeer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp slow" data-wow-delay="0.6s">
                        <div class="OurServies-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <h5 class="service_heading"><i class="bi bi-person-rolodex"></i></h5>
                                </div>
                                <div class="OurServies_paraCard">
                                    <p class="OurServies_para text-secondary2">For a more in-depth check, offering onsite verification services. 
                                        This includes visiting locations to verify details personally, such as employment history or educational 
                                        qualifications, providing an extra layer of authenticity and trust.</p>
                                    <img class="img-fluid rounded w-100" src="assets/img/onsite.jpeg" alt="">
                                </div>
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Onsite Verification</h5>
                                <small>Visiting locations to verify</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </section>
        <!--  Our BV Services End  -->

        <!--  How it works Start  -->
        <section class="tc-hiw-st2">
          <div class="container">
            <h6 class="fsz-24 color-secondary text-center pt-40">How it works with BV Agency Services</h6>
            <div class="row align-items-center justify-content-between">
              <div class="col-lg-5">
                <div class="info">
                  <div class="speed-test pt-10 mt-10 wow fadeInUp slow" data-wow-delay="0.2s" >
                    <h6 class="fsz-24 color-secondary mb-10">What is Background Verification?</h6>
                    <p class="color-secondary mb-30">process of validating the accuracy of a candidate’s or employee's history and credentials before hiring or as part of ongoing employment checks.</p>
                    <h6 class="color-secondary mb-10">Background Verification Components:</h6>
                    <p class="color-secondary mb-30">Employment History Verification, Education Verification, Reference Checks, Criminal Record Check, Credit Check, Address Verification, Identity Verification</p>
                  </div>
                  <div class="section-head js-splittext-lines wow fadeInUp slow">
                    <h4 class="color-secondary mb-30">So what our platform do exactly?</h4>
                  </div>
                  <div
                    class="cr-666 wow fadeInUp slow"
                    data-wow-delay="0.2s"
                  >
                  <p class="color-secondary">At XEmp, we are committed to delivering high-quality,
                    efficient, and professional services that support the
                    employment lifecycle from start to finish.</p>
                  </div>
                  
                </div>
              </div>
              <div class="col-lg-6">
                <div class="cards mb-5 mb-lg-0">
                  <div class="row">
                    <div class="col-lg-6">
                      <div
                        class="feat-card wow fadeInUp slow"
                        data-wow-delay="0.2s"
                      >
                        <div class="info">
                          <h5><i class="color-secondary bi bi-1-square-fill mb-2"></i></h5>
                          <h5 class="color-secondary mb-10">Submit Request</h5>
                          <div class="color-secondary cr-666 mb-10">
                            <p class="color-secondary ">Initiate the BV request online to company and Enter the candidate's information and select the verification process type.</p>
                          </div>
                        </div>
                      </div>
                      <div
                        class="feat-card wow fadeInUp slow"
                        data-wow-delay="0.3s"
                      >
                        <div class="info">
                          <h5><i class="color-secondary bi bi-3-square-fill mb-2"></i></h5>
                          <h5 class="color-secondary mb-10">
                            Analysis &<br>Review
                          </h5>
                          <div class="text cr-666 mb-10">
                            <h6 class="color-secondary">Data Collection:</h6> 
                            <p class="color-secondary">Gather all responses and data from email, phone, and onsite verifications. Checks all the info is collected or not.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 pt-lg-5">
                      <div
                        class="feat-card wow fadeInUp slow"
                        data-wow-delay="0.4s"
                      >
                        <div class="info">
                          <h5><i class="color-secondary bi bi-2-square-fill mb-2"></i></h5>
                          <h5 class="color-secondary mb-10">Verification Process</h5>
                          <div class="color-secondary cr-666 mb-10">
                            <h6 class="color-secondary">Email or Phone Call or Onsite</h6>
                            <p class="color-secondary"> BV Form link through email or verifing details with phone calls or visiting locations to verify the accuracy of provided information.</p>
                          </div>
                        </div>
                      </div>
                      <div
                        class="feat-card wow fadeInUp slow"
                        data-wow-delay="0.2s"
                      >
                        <div class="info">
                          <h5 class="color-secondary" ><i class="bi bi-4-square-fill mb-2"></i></h5>
                          <h5 class="color-secondary mb-10">Generate Report</h5>
                          <div class="color-secondary cr-666 mb-10">
                            <p class="color-secondary">Create a detailed BV report based on findings and deliver the comprehensive report for review and decision-making.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--  How it works End  -->

        <!-- start Ex-Employee Services -->
         <div id="ExEmpolyee" class="ExEmpolyeeSection">
            <div class="container mx-auto px-4 py-6">
              <div class="container text-center p-4">
                <h4 class="color-secondary font-weight-bold">Ex-Employee Document Access</h4>
                <p class="color-secondary">Solving Your Precious and valuable document problems Now!</p>
              </div>
              <div class="row">
                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp slow text-center p-4" data-wow-delay="0.3s">
                  <h5 class="color-secondary font-weight-semibold my-3">Payslips</h5>
                  <p class="color-secondary">Access and download your previous payslips, providing proof of earnings when required.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp slow text-center p-4" data-wow-delay="0.6s">
                  <h5 class="color-secondary font-weight-semibold my-3">Provident Fund (PF)</h5>
                  <p class="color-secondary">Access your PF from our Ex-Employer, aiding in retirement savings and financial planning.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp slow text-center p-4" data-wow-delay="0.9s">
                  <h5 class="color-secondary font-weight-semibold my-3">Experience Certificates</h5>
                  <p class="color-secondary">Access digital copies of your experience certificates.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp slow text-center p-4" data-wow-delay="0.3s">
                  <h5 class="color-secondary font-weight-semibold my-3">Legal and Financial Purposes</h5>
                  <p class="color-secondary">Retrieve documents for legal or financial purposes such as loans or settling disputes.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp slow text-center p-4" data-wow-delay="0.6s">
                  <h5 class="color-secondary font-weight-semibold my-3">Bureaucratic</h5>
                  <p class="color-secondary">Retrieve your documents anytime, anywhere, ensuring you have what you need.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp slow text-center p-4" data-wow-delay="0.9s">
                  <h5 class="font-weight-semibold my-3">Offer or Relieving Letters</h5>
                  <p class="text-muted">Access crucial documents for job applications and proving employment status.</p>
                </div>
              </div>
            </div>
         </div>
        <!-- End Ex-Employee Services -->

        <!--  Start About us  -->
        <section class="tc-aboutus-st2 pt-5 pb-5">
          <div class="container">
            <div class="content-card wow zoomIn slow" data-wow-delay="0.2s">
              <div class="row justify-content-start align-items-center">
                <div class="col-lg-12">
                  <div class="number-card">
                    <h4 class="text-center color-primary">Why Choose XEmp?</h4>
                    <ul
                      class="contact-list text-start mt-5 fsz-16 container px-5"
                    >
                      <li class="mt-3 color-secondaryshade">
                        <b class="color-primary fsz-17 p-1 me-1">Our Mission:</b>
                        Our mission is to empower accurate, reliable, and efficient background verification platform with trust, enhance security, and support informed hiring decisions.
                      </li>
                      <li class="mt-3 color-secondaryshade">
                        <b class="color-primary fsz-18 p-1 me-1">Our Vision</b>
                        Our vision is to become the leading provider a background verification platform globally, setting the standard for excellence in accuracy, confidentiality, and customer satisfaction.
                      </li>
                      <li class="mt-3 color-secondaryshade">
                        <b class="color-primary fsz-18 p-1 me-1">our Vision:</b>
                        We uphold the highest ethical standards, ensuring honesty and trust in all our services.We maintain open and clear communication, fostering trust and understanding with our clients and users.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <img src="assets/img/num_lines.png" alt="" class="lines" />
            </div>
          </div>
        </section>
        <!--  End About us  -->

        <!-- our clients start-->
         <hr class="m-0">
          <div class="our-clients">
            <div class="scroll-content">
              <img class="client_logo" src="assets/img/XEmp-logo9.png" alt="">
              <img class="client_logo" src="assets/img/XEmp-logo9.png" alt="">
              <img class="client_logo" src="assets/img/XEmp-logo9.png" alt="">
              <img class="client_logo" src="assets/img/XEmp-logo9.png" alt="">
              <img class="client_logo" src="assets/img/XEmp-logo9.png" alt="">
              <img class="client_logo" src="assets/img/XEmp-logo9.png" alt="">
              <img class="client_logo" src="assets/img/XEmp-logo9.png" alt="">
              <img class="client_logo" src="assets/img/XEmp-logo9.png" alt="">
              <img class="client_logo" src="assets/img/XEmp-logo9.png" alt="">
              <img class="client_logo" src="assets/img/XEmp-logo9.png" alt="">
              <img class="client_logo" src="assets/img/XEmp-logo9.png" alt="">
              <img class="client_logo" src="assets/img/XEmp-logo9.png" alt="">
              <img class="client_logo" src="assets/img/XEmp-logo9.png" alt="">
              <img class="client_logo" src="assets/img/XEmp-logo9.png" alt="">
            </div>
          </div>
        <hr class="m-0">
        <!-- our clients end -->
      </main>
      <!--End-Contents-->

      
      <!-- Footer Start -->
      <?php include 'Xemp_components/Footer.php' ?>
      <!-- Footer End -->

    </div>

    <!--  Start to top button  -->
    <a href="#" class="to_top" id="to_top">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"  class="color-secondary bi bi-caret-up-fill" viewBox="0 0 16 16">
        <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
      </svg>
    </a>
    
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <!-- === Gsap === -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/SplitText.min.js"></script>

    <!-- === common === -->
    <script src="assets/js/common_js.js"></script>

    <script>
        $(document).ready(function(){
            $('#demoForm').on('submit', function(event){
                event.preventDefault(); // Prevent default form submission
                
                // Gather form data
                var formData = $(this).serialize(); // Serialize the form data

                $('#demobutton').prop('disabled', true);
                $('#button-text').hide(); // Hide the "Send" text
                $('#loader').show(); // Show the loader

                // AJAX request
                $.ajax({
                    url: 'Xemp_components/SMTPDemo.php', // Replace with your actual PHP file to process the form
                    type: 'POST',
                    data: formData,
                    success: function(response){
                        $('#response').html(response); // Display the PHP response in the #response div
                        $('#loader').hide(); // Hide the loader
                        $('#demobutton').text('Done'); // Change button text to "Done"
                        $('#demoForm')[0].reset(); // Reset the form after successful submission
                    },
                    error: function(xhr, status, error){
                    $('#response').html('An error occurred: ' + error); // Display error message
                    $('#loader').hide(); // Hide the loader
                    $('#button-text').show(); // Show the "Send" text again
                    $('#demobutton').prop('disabled', false); // Re-enable the button
                }
                });
            });
        });
    </script>

    <!-- <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
    </script> -->
  </body>
</html>
