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
    <header class="flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full">
      <nav class="navbar relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center gap-x-1">
          <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80" href="#" aria-label="Brand">
            <img
              class="w-28 h-auto"
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Infosys_logo.svg/2560px-Infosys_logo.svg.png"
            />
          </a>

          <!-- Collapse Button -->
          <button
            type="button"
            class="hs-collapse-toggle md:hidden relative size-9 flex justify-center items-center font-medium text-[12px] rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
            id="hs-header-base-collapse"
            aria-expanded="false"
            aria-controls="hs-header-base"
            aria-label="Toggle navigation"
            data-hs-collapse="#hs-header-base"
          >
            <svg
              class="hs-collapse-open:hidden size-4"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <line x1="3" x2="21" y1="6" y2="6" />
              <line x1="3" x2="21" y1="12" y2="12" />
              <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg
              class="hs-collapse-open:block shrink-0 hidden size-4"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
            <span class="sr-only">Toggle navigation</span>
          </button>
          <!-- End Collapse Button -->
        </div>

        <!-- Collapse -->
        <div
          id="hs-header-base"
          class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block"
          aria-labelledby="hs-header-base-collapse"
        >
          <div
            class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300"
          >
            <div
              class="py-2 md:py-0 flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1"
            >
              <div class="grow">
                <div
                  class="flex flex-col md:flex-row md:justify-end md:items-center gap-0.5 md:gap-1"
                >
                  <a
                    class="nav-link fontStyle-secondary p-2 flex items-center font-semibold text-sm text-gray-800 rounded-lg"
                    href="./index.html"
                    aria-current="page"
                  >
                    Home
                  </a>

                  <a
                    class="nav-link fontStyle-secondary p-2 flex items-center font-semibold text-sm text-gray-800 rounded-lg "
                    href="contact.html"
                  >
                    Contact Us
                  </a>
                </div>
              </div>

              <div class="my-2 md:my-0 md:mx-2">
                <div
                  class="w-full h-px md:w-px md:h-4 bg-gray-100 md:bg-gray-300"
                ></div>
              </div>

              <!-- Button Group -->
              <div class="flex flex-wrap items-center gap-x-1.5">
                <button data-modal-target="top-right-modal" data-modal-toggle="top-right-modal" class="nav-link py-2 px-2.5 inline-flex items-center font-semibold text-sm rounded-lg text-white focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                  <span class="material-symbols-outlined">account_circle</span>
                </button>
              </div>
              <!-- End Button Group -->
            </div>
          </div>
        </div>
        <!-- End Collapse -->
      </nav>
    </header>
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
    <?php include 'Company_components\CompanyFootor.php' ?>
    <!-- Footer End -->
     
    <!-- User Details Modal -->
    <?php include 'Company_components\CompanyUserModal.php' ?>
    <!-- User Details Modal -->

    <script src="companyJS.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
  </body>
</html>