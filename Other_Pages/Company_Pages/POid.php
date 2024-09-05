<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PO id details</title>
    <!-- CDN of Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"  rel="stylesheet" />


    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

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
    <?php include 'Company_components\CompanyNavbar.php' ?>
    <!-- ========== END HEADER ========== -->
     <!-- Hero Start -->
    <section class="POidSection container-fluid lg:h-screen">
        <h1 class="text-center pt-5 heading color-secondary">PO id - 2324352435234</h1>
        <div class="ourtable sm:w-screen lg:w-full pt-4 px-5" style="overflow:auto;">
            <table class="table-auto lg:w-5/6  m-auto">
                <tbody>
                  <tr>
                    <td class="tablehead">PO id</td>
                    <td>:</td>
                    <td>213434534</td>
                    <td class="tablehead">Invoice id</td>
                    <td>:</td>
                    <td>213434534</td>
                  </tr>
                  <tr>
                    <td class="tablehead">Issued to</td>
                    <td>:</td>
                    <td>21-12-2024</td>
                  </tr>
                  <tr>
                    <td class="tablehead">Amount in INR</td>
                    <td>:</td>
                    <td>24000/-</td>
                  </tr>
                  <tr>
                    <td class="tablehead">No of cases</td>
                    <td>:</td>
                    <td>545</td>
                    <td class="tablehead">GSTIN No:</td>
                    <td>:</td>
                    <td>213434534AFAD21</td>
                  </tr>
                </tbody>
            </table>
            <div class="text-center pt-5">
                <button class="butn rounded-xl">Print</button>
                <button class="butn rounded-xl">Annexure</button>
            </div>
        </div>
        <div class="POidourtable sm:w-screen lg:w-full p-4">
            <div class="ourtable2 p-5 rounded rounded-2xl box-shadow lg:w-5/6 m-auto" style="overflow:auto;">
                <table class="table-auto w-full">
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
    </section>
    <!-- Hero Ends -->

    <!-- Footer Start -->
    <?php include 'Company_components\CompanyFootor.php' ?>
    <!-- Footer End -->

    <!-- User Details Modal -->
    <?php include 'Company_components\CompanyUserModal.php' ?>
    <!-- User Details Modal -->

    <script src="companyJS.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

  </body>
</html>