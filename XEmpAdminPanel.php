<?php

    // MySql Connection
    include 'Xemp_components/Xemp_Mysql_conn.php';

    session_start();

    // Check if the user is logged in and is an employee
    if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'Admin') {
        header("Location: login.php");
        exit();
    }

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- home style -->
    <link rel="stylesheet" href="assets/css/home_style.css" />
  </head>
  <body class="home-st2">
    
    <!-- <div id="response"></div> -->

    <div id="scrollsmoother-container">

        <!--  Start navbar  -->
        <?php include 'Xemp_components/XEmpNavbar.php' ?>
        <!--  End navbar  -->

        <!--Contents-->
      <main>
        <div class="fluid-container AdminSection">
            <div class="fluid-container  p-5 pt-5">
                <div class="text-center text-primary2  mx-auto mb-5" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Admin Panel</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12 col-lg-7 p-2" data-wow-delay="0.3s">
                        <div class="bg-white p-5 rounded-3 shadow">
                            <h5 class="text-center">Heading of the chart 1</h5>
                            <div class="h-100 d-flex justify-content-center">
                                <img src="assets/img/barcharts.webp" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 p-2" data-wow-delay="0.3s">
                        <div class="bg-white h-100 p-5 rounded-3 shadow">
                            <h5 class="text-center">Heading of the chart 1</h5>
                            <div class="h-100 d-flex align-items-center">
                                <img src="assets/img/piechartwizardpreview.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 p-2" data-wow-delay="0.3s">
                        <div class="bg-white p-5 rounded-3 shadow">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="">Heading of the chart 2</h5>
                                <button class="border-2">FY - 2024</button>
                            </div>
                            <div class="h-100 d-flex justify-content-center">
                                <img src="assets/img/barcharts.webp" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 p-2" data-wow-delay="0.3s">
                        <div class="bg-white h-100 p-5 rounded-3 shadow">
                        <div class="d-flex align-items-center justify-content-between">
                                <h5 class="">Heading of the Table 1</h5>
                                <button class="border-2">FY - 2024</button>
                            </div>
                            <div class="h-100">
                                <p class="text-center color-secondary">Charges per case details</p>
                                <p class="text-center color-secondary">Net Amount as per Xamp</p>
                                <div class="smallcards grid gap-3 pt-3 p-2">
                                    <table class="table-auto lg:w-5/6  m-auto">
                                        <tbody>
                                        <tr>
                                            <td class="tablehead">Per case Rs</td>
                                            <td>:</td>
                                            <td>213434534</td>
                                        </tr>
                                        <tr>
                                            <td class="tablehead">Commision for XEmp Rs</td>
                                            <td>:</td>
                                            <td>213434534</td>
                                        </tr>
                                        <tr>
                                            <td class="tablehead">something else</td>
                                            <td>:</td>
                                            <td>213434534</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 p-2" data-wow-delay="0.3s">
                        <div class="bg-white p-5 rounded-3 shadow">
                            <h5 class="text-center">Heading of the chart 1</h5>
                            <div class="h-100 d-flex justify-content-center">
                                <img src="assets/img/barcharts.webp" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 p-2" data-wow-delay="0.3s">
                        <div class="bg-white h-100 p-5 rounded-3 shadow">
                            <h5 class="text-center">Heading of the chart 1</h5>
                            <div class="h-100 d-flex align-items-center">
                                <img src="assets/img/piechartwizardpreview.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="butn">Logout</button>
                    </div>
                </div>
            </div>
        </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- === Gsap === -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/SplitText.min.js"></script>

    <!-- === common === -->
    <script src="assets/js/common_js.js"></script>


  </body>
</html>
