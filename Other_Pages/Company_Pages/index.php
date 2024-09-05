<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Company Name</title>

    <!-- CDN of Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"  rel="stylesheet" />


    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- google Icons -->
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
    <?php include 'Company_components\CompanyNavbar.php' ?>
    <!-- ========== END HEADER ========== -->
     <!-- Hero Start -->
    <section class="HeroSection container-fluid lg:h-screen">
      <div class="grid lg:grid-cols-12">
        <div id="mainHeroContent_1" style="display: block;" class="mainHeroContent lg:col-span-8 w-full mx-auto px-4 py-6 lg:px-8 lg:pt-20 lg:pb-20">
          <div class="flex justify-center">
            <a class="XEmpbranding fontStyle-secondary color-secondary inline-flex items-center gap-x-2 border border-gray-200 text-sm p-2 px-3 rounded-full transition hover:border-gray-300 focus:outline-none focus:border-gray-300">
              #XEmp Services
            </a>
          </div>
          <!-- Title -->
          <div class="mt-5 max-w-2xl text-center mx-auto">
            <h1 id="HeroHeading" class="color-secondary block font-bold text-3xl md:text-3xl lg:text-3xl">
            Confidential BV checks on potential hiring <br> & Ex-Employee Services
            </h1>
          </div>
          <!-- End Title -->

          <div class="mt-3 max-w-3xl text-center mx-auto">
            <p class="text-md color-secondary">
            Ensure peace of mind with every new hire and get your missing Docs as an EX-Empolyee.
            </p>
          </div>
        </div>
        <div id="mainHeroContent_2" style="display: none;" class="mainHeroContent lg:col-span-8 mx-auto px-4 py-6 lg:px-8 lg:pt-20 lg:pb-20">
          <div class="md:p-8">
            <!-- Title -->
            <h1
              class="color-secondary text-2xl font-bold md:text-2xl md:leading-tight lg:text-3xl lg:leading-tight"
            >
              Seamless BV Agency with Trust, Verify, Hire with
              <span class="">Confidence</span>
            </h1>
            <p class="mt-3 text-base color-secondary">
              Enhance your hiring process with our reliable background
              verification platform. Ensure peace of mind with every new hire
              through thorough and confidential checks.
            </p>
            <!-- End Title -->
            <div>
              <h2 class="mb-2 mt-2 text-sm font-semibold text-gray-900 uppercase dark:text-white">BV operations:</h2>
                      <ul class="color-secondary dark:text-gray-400 font-medium ml-2">
                          <li class="mb-1">
                              <a href="#" class="hover:underline">★ Email Verification</a>
                          </li>
                          <li class="mb-1">
                              <a href="#" class="hover:underline">★ Phone Call Verification</a>
                          </li>
                          <li class="mb-1">
                            <a href="#" class="hover:underline">★ Onsite Verification</a>
                          </li>
                      </ul>
            </div>
          </div>  
        </div>
        <div id="mainHeroContent_3" style="display: none;" class="mainHeroContent lg:col-span-8 mx-auto px-4 py-6 lg:px-8 lg:pt-5 lg:pb-10">
          <div class="container mx-auto p-4 space-y-2 text-center">
            <h2 class="text-3xl font-bold color-secondary">Ex-Employee Document Access</h2>
            <p class="color-secondary">Solving Your Precious and valuable document problems Now!</p>
          </div>
          <div class="container mx-auto grid justify-center gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <div class="flex flex-col items-center p-4 text-center">
              <h3 class="my-3 text-2xl font-semibold color-secondary">Payslips</h3>
              <div class="space-y-1 leading-tight">
                <p class="text-center color-dark">Access and download your previous payslips. Which providing proof of earnings when required.</p>
              </div>
            </div>
            <div class="flex flex-col items-center p-4 text-center">
              <h3 class="my-3 text-2xl font-semibold color-secondary">Provident Fund (PF)</h3>
              <div class="space-y-1 leading-tight">
                <p class="text-center color-dark">Solving and access your PF from our Ex-Employer with retirement savings and financial planning.</p>
              </div>
            </div>
            <div class="flex flex-col items-center p-4 text-center">
              <h3 class="my-3 text-2xl font-semibold color-secondary">Experience Certificates</h3>
              <div class="space-y-1 leading-tight">
                <p class="text-center color-dark">Solving and access to digital copies of your experience certificates</p>
              </div>
            </div>
            <div class="flex flex-col items-center p-4 text-center">
              <h3 class="my-3 text-2xl font-semibold color-secondary">Legal and Financial Purposes</h3>
              <div class="space-y-1 leading-tight">
                <p class="text-center color-dark">Solving issues in documents for legal or financial reasons such as loans or settling disputes</p>
              </div>
            </div>
            <div class="flex flex-col items-center p-4 text-center">
              <h3 class="my-3 text-2xl font-semibold color-secondary">Bureaucratic</h3>
              <div class="space-y-1 leading-tight">
                <p class="text-center color-dark">Ex-employees can retrieve their documents anytime, anywhere, ensuring what they need.</p>
              </div>
            </div>
            <div class="flex flex-col items-center p-4 text-center">
              <h3 class="my-3 text-2xl font-semibold color-secondary">Offer or Relieving Letters</h3>
              <div class="space-y-1 leading-tight">
                <p class="text-center color-dark">Solving and access to are crucial documents for job applications and proving employment status.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="SubHeroContent lg:h-screen lg:col-span-4 w-full mx-auto px-4 py-6 sm:px-6 sm:pt-0 lg:px-8 lg:pt-20 lg:pb-20">
          <div class="formCard rounded-lg">
            <form class="w-full mt-5 mx-auto p-5 ">
              <div class="mb-4">
                <div class="text-center mx-auto mb-3">
                  <div class="w-full flex justify-center">
                    <div class="m-2">
                      <input type="radio" name="option" value="BvAgency" onclick="changeText(event)">
                      <label class="fontStyle-secondary font-semibold">Bv Agency</label>
                    </div>
                    <div class="m-2">
                      <input type="radio" name="option" value="ExEmployee" onclick="changeText(event)">
                      <label class="fontStyle-secondary font-semibold">Ex Employee</label>
                    </div>
                  </div>
                </div>
                <label for="hs-hero-email-2" class="block text-sm font-medium"
                  ><span class="sr-only"
                    >Enter Username or Employee Id</span
                  ></label
                >
                <input required
                  type="email"
                  id="hs-hero-email-2"
                  class="fontStyle-secondary py-3 px-4 block w-full rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none focus:outline-none"
                  placeholder="Enter Username or Employee Id*"
                />
              </div>
    
              <div class="mb-2">
                <label for="hs-hero-password-2" class="block text-sm font-medium"
                  ><span class="sr-only">Password</span></label
                >
                <input required
                  type="password"
                  id="hs-hero-password-2"
                  class="fontStyle-secondary py-3 px-4 block w-full rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none focus:outline-none"
                  placeholder="Password*"
                />
              </div>
    
              <div class="flex justify-end items-center mb-4">
                <a class="fontStyle-secondary font-semibold inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                  href="../examples/html/recover-account.html" >
                  Forgot password?
                </a>
              </div>
    
              <div class="grid">
                <button
                  type="submit"
                  class="butn fontStyle-secondary py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg border border-transparent focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                >
                  Sign up
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Ends -->

    <!-- Footer Start -->
    <?php include 'Company_components\CompanyFootor.php' ?>
    <!-- Footer End -->

    
    <script src="companyJS.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

  </body>
</html>