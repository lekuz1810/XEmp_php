<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HR - Admin</title>

    <!-- CDN of Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"  rel="stylesheet" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    
    <!-- google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <!-- CSS styles -->
    <link rel="stylesheet" href="companyAllCSS.css">
  </head>
  <body>
    <div id="spinner" class="show bg-white w-screen h-screen flex flex-row items-center justify-center overflow-hidden">
      <div  class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
   </div>
    <!-- ========== HEADER ========== -->
    <?php include 'Company_components/CompanyNavbar2.php' ?>
    <!-- ========== END HEADER ========== -->
     <!-- Hero Start -->
    <section class="HeroSection container-fluid p-5">
      <div class="HRAdmin grid lg:grid-cols-12">
        <div class="col-span-12">
            <div class="p-5">
                <h1 class="color-secondary text-center sm:text-xl lg:text-3xl">Welcome to HR Admin</h1>
            </div>
        </div>
        <div class="col-span-12">
            <div class="lg:w-5/6 full md:flex md:items-center md:justify-between m-auto">
                <div class="">
                    <a href="index.php"><button class="butn rounded-xl flex items-center">Logout<span class="material-symbols-outlined ml-2">logout</span></button></a>
                </div>
            </div>
        </div>
        <div class="col-span-12 p-2" style="overflow: hidden;">
            <div class="ourtable2 sm:w-screen lg:w-5/6 my-3 m-auto p-5 rounded-xl" style="overflow:auto;">
                <table class="table-auto w-full">
                    <thead>
                      <tr>
                        <th>S.NO</th>
                        <th>Date</th>
                        <th>Candidate Name</th>
                        <th>C Emp</th>
                        <th>BGV Vendor</th>
                        <th>Current Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>234</td>
                        <td>12-12-2024</td>
                        <td><a href="Candidate.php">asdfjlk adsfjds</a></td>
                        <td>shfkjadsfh pvt ltd</td>
                        <td>ahfkhdasjfh</td>
                        <td>confirm</td>
                        <td class="actions">
                            <div class="flex items-center justify-between ">
                                <a href=""><span class="material-symbols-outlined" title="Reminder">notifications</span></a>
                                <a href=""><span class="material-symbols-outlined" title="Delete">delete</span></a>
                                <a href=""><span class="material-symbols-outlined" title="Edit">edit</span></a>
                            </div>
                        </td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </section>
    <!-- Hero Ends -->

    <!-- Footer Start -->
    <?php include 'Company_components/CompanyFootor.php' ?>
    <!-- Footer End -->
     
    <!-- User Details Modal -->
    <?php include 'Company_components/CompanyUserModal.php' ?>
    <!-- User Details Modal -->

    <script src="companyJS.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
  </body>
</html>