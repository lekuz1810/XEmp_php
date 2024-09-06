<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Company Login</title>
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

    <!-- Spinner Start Here -->
     <div id="spinner" class="show bg-white w-screen h-screen flex flex-row items-center justify-center overflow-hidden">
        <div  class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
     </div>
  <!-- Spinner End Here -->

    <!-- ========== HEADER ========== -->
    <?php include 'Company_components/CompanyNavbar.php' ?>

    <!-- ========== END HEADER ========== -->

    <!-- Hero -->
    <div class="login relative overflow-hidden">
      <div
        class="subcontainer mx-auto max-w-screen-md py-12 px-4 sm:px-6 md:max-w-screen-xl md:py-20 lg:py-20 md:px-8"
      >
        <div class="md:pe-8 md:w-1/2 xl:pe-0 xl:w-5/12">
          <div class="flex justify-center mb-2">
            <img class="w-1/4" src="/assets/img/Infosys_logo.svg.png" alt="">
          </div>
          <!-- Title -->
          <h1
            class="color-secondary text-2xl font-bold md:text-2xl md:leading-tight lg:text-3xl lg:leading-tight"
          >
          Leadership Begins with
            <span>Accountability.</span>
          </h1>
          <p class="mt-3 text-base color-secondary">
            Empower Your Team by Managing Records, Verifications, and Platform Operations.
          </p>
          <p class="color-secondary mt-3 text-xl text-center text-gray-800 font-bold md:leading-tight lg:leading-tight">Login</p>
          <!-- End Title -->
          <!-- Form starts here  -->
          <form class="mt-5">
            <div class="mb-4">
              <label for="hs-hero-email-2" class="block text-sm font-medium"
                ><span class="sr-only"
                  >Enter Username or Employee Id</span
                ></label
              >
              <input
                type="email"
                id="hs-hero-email-2"
                class="py-3 px-4 block w-full border border-gray-500 rounded-lg text-sm focus:border-gray-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none"
                placeholder="Enter Username or Employee Id*"
              />
            </div>

            <div class="mb-2">
              <label for="hs-hero-password-2" class="block text-sm font-medium"
                ><span class="sr-only">Password</span></label
              >

              <input
                type="password"
                id="hs-hero-password-2"
                class="py-3 px-4 block w-full border border-gray-500 rounded-lg text-sm focus:border-gray-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none"
                placeholder="Password*"
              />
            </div>

            <div class="flex justify-end items-center mb-4">
              <a
                class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                href="../examples/html/recover-account.html"
                >Forgot password?</a
              >
            </div>

            <div class="grid">
              <button
                type="submit"
                class="butn py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg disabled:opacity-50 disabled:pointer-events-none"
              >
                Sign up
              </button>
            </div>
          </form>
          <!-- End Form -->
        </div>
      </div>

      <div
        class="hidden md:block md:absolute md:top-0 md:start-1/2 md:end-0 h-full bg-blue-100 bg-no-repeat bg-center bg-cover"
      >
      <img class="sideimage" src="/assets/img/onsite.jpeg" alt="">
      </div>
      <!-- End Col -->
    </div>
    <!-- End Hero -->

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
