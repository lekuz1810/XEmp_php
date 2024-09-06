<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment Link</title>

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
    <section class="MainCommonSection container-fluid h-screen p-5">
      <div class="lg:w-5/6 m-auto">
        <h1 class="text-center Commonheading pt-5 color-secondary">Payment Options</h1>
        <div class="paymentCard ">
          <p class="text-center color-secondary  pt-5">The payment of the BGV is given in the link below. Please proceed if you want to payment for the given below prices</p>
          <p class="text-center text-red-600 pt-5 underline "><a href="">www.paymentgateway.com</a></p>
          <p class="text-center color-secondary pt-5">Thank you for your application</p>
          <div id="PrePaymentTable" class="paymenttable" style="display: block;">
            <p class="text-center text-xl color-secondary pt-5">Please confirm your Payment</p>
            <table class="table-auto lg:w-5/6  m-auto">
              <tbody>
                <tr>
                  <td class="tablehead">PO id</td>
                  <td>:</td>
                  <td>213434534</td>
                </tr>
                <tr>
                  <td class="tablehead">Case Amount in INR</td>
                  <td>:</td>
                  <td>205/-</td>
                </tr>
                <tr>
                  <td class="tablehead">GST Amount in INR</td>
                  <td>:</td>
                  <td>240/-</td>
                </tr>
                <tr>
                  <td class="tablehead">Total Amount in INR</td>
                  <td>:</td>
                  <td>545/-</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="PostPaymentTable" class="paymenttable" style="display: none;">
            <p class="text-center text-xl text-green-700 pt-5">Your payment is success !!!</p>
            <table class="table-auto lg:w-5/6  m-auto">
              <tbody>
                <tr>
                  <td class="tablehead">PO id</td>
                  <td>:</td>
                  <td>213434534</td>
                </tr>
                <tr>
                  <td class="tablehead">Case Amount in INR</td>
                  <td>:</td>
                  <td>205/-</td>
                </tr>
                <tr>
                  <td class="tablehead">GST Amount in INR</td>
                  <td>:</td>
                  <td>240/-</td>
                </tr>
                <tr>
                  <td class="tablehead">Total Amount in INR</td>
                  <td>:</td>
                  <td>545/-</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="text-center pt-5 flex items-center justify-center">
            <button id="ConfirmButton" class="butn mx-4" onclick="confirm()">Confirm</button>
            <button id="PrintButton" class="butn mx-4" style="display: none;" onclick="window.print()">Print</button>
            <button class="butn mx-4">Deny</button>
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