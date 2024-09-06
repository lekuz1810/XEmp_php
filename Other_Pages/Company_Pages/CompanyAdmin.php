<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Company Main Admin Panel</title>

    <!-- CDN of Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"  rel="stylesheet" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

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
    <section class="AdminSection container-fluid lg:h-auto">
        <h1 class="text-center heading pt-5 color-secondary">Admin login</h1>
      <div class="grid lg:grid-cols-12 gap-5 p-5">
        <div class="lg:col-span-7 bg-white p-5 rounded rounded-2xl  box-shadow">
            <h1 class="text-center heading color-secondary">heading of the graph</h1>
            <div class="h-full flex items-center">
                <img src="assets/img/barcharts.webp" alt="image">
            </div>
        </div>
        <div class="lg:col-span-5 bg-white p-5 rounded rounded-2xl box-shadow">
            <h1 class="text-center heading color-secondary">heading of the graph</h1>
            <div class="h-full flex items-center">
                <img src="assets/img/piechartwizardpreview.png" alt="image">
            </div>
        </div>
        <div class="lg:col-span-7">
          <div class="grid grid-rows-2 grid-flow-col gap-4 h-full" >
              <div class="bg-white h-full p-5 rounded rounded-2xl box-shadow">
                  <div class="flex items-center justify-between px-4">
                      <h1 class="text-center fa-2x heading color-secondary">heading of the graph</h1>
                      <button class="border-2">FY - 2024</button>
                  </div>
                  <div class="flex items-center">
                      <img src="assets/img/barcharts.webp" alt="image">
                  </div>
              </div>
              <div class="h-full bg-white p-5 rounded rounded-2xl box-shadow " style="overflow:hidden;">
                  <div class="flex items-center justify-between px-4">
                      <h1 class="text-center fa-2x heading color-secondary">heading of the Table</h1>
                      <button class="border-2">FY - 2024</button>
                  </div>
                  <div class="ourtable sm:w-screen lg:w-full pt-4">
                      <table class="table-auto w-full ">
                          <thead>
                            <tr>
                              <th>Month</th>
                              <th>PO Id</th>
                              <th>Amount in INR</th>
                              <th>Invoice Id</th>
                              <th>Payment Date</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>September</td>
                              <td><a href="POid.php">213434534</a></td>
                              <td>24500/-</td>
                              <td>1324462342</td>
                              <td>12-10-2024</td>
                            </tr>
                            <tr>
                              <td>October</td>
                              <td><a href="POid.php">213434534</a></td>
                              <td>21500/-</td>
                              <td>1324462342</td>
                              <td>12-11-2024</td>
                            </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </div>
        <div class="lg:col-span-5 rounded rounded-2xl ">
            <div class="grid grid-rows-3 grid-flow-col gap-5 h-full">
                <div class="bg-white h-full p-5 rounded rounded-2xl box-shadow">
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
                <div class="bg-white h-full p-5 rounded rounded-2xl box-shadow">
                    <p class="text-center color-secondary">Registration details in collobearation with XEMp</p>
                    <div class="smallcards grid gap-3 pt-3 p-2">
                        <table class="table-auto lg:w-5/6  m-auto">
                            <tbody>
                              <tr>
                                <td class="tablehead">Date of Joining</td>
                                <td>:</td>
                                <td>12-12-2024</td>
                              </tr>
                              <tr>
                                <td class="tablehead">license valid upto</td>
                                <td>:</td>
                                <td>12-12-2025</td>
                              </tr>
                              <tr>
                                <td class="tablehead">Set Up Cost in INR</td>
                                <td>:</td>
                                <td>500</td>
                              </tr>
                              <tr>
                                <td class="tablehead">Something in INR</td>
                                <td>:</td>
                                <td>500</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="bg-white h-full p-5 rounded rounded-2xl box-shadow">
                    <p class="text-center color-secondary">BGV and Ex-Employee Response User</p>
                    <div class="smallcards grid gap-3 p-2">
                        <table class="table-auto lg:w-5/6  m-auto">
                            <tbody>
                              <tr>
                                <td class="tablehead">Name of the User</td>
                                <td>:</td>
                                <td>hkafhdkahsdkjf</td>
                              </tr>
                              <tr>
                                <td class="tablehead">Email ID</td>
                                <td>:</td>
                                <td>fdsfkadsfkj@asdfkjasdf.com</td>
                              </tr>
                              <tr>
                                <td class="tablehead">Contact No</td>
                                <td>:</td>
                                <td>4523452345</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="smallcards grid gap-3 p-2">
                        <table class="table-auto lg:w-5/6  m-auto">
                            <tbody>
                              <tr>
                                <td class="tablehead">Name of the User</td>
                                <td>:</td>
                                <td>adksjfkjdasf</td>
                              </tr>
                              <tr>
                                <td class="tablehead">Email ID</td>
                                <td>:</td>
                                <td>afkhsdfkasdkj@jsdfkja.com</td>
                              </tr>
                              <tr>
                                <td class="tablehead">Contact No</td>
                                <td>:</td>
                                <td>5676456456</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:col-span-12">
          <div class="text-center mt-3">
              <a href="index.php"><button class="butn rounded-xl">Logout</button></a>
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