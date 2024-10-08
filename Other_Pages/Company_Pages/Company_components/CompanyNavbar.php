<header class="flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full">
      <nav class="navbar relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center gap-x-1">
          <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80" href="index.php" aria-label="Brand">
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
                    href="./index.php"
                    aria-current="page"
                  >
                    Home
                  </a>

                  <a
                    class="nav-link fontStyle-secondary p-2 flex items-center font-semibold text-sm text-gray-800 rounded-lg "
                    href="contact.php"
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
                <a
                  class="nav-link py-2 px-2.5 inline-flex items-center font-semibold text-sm rounded-lg text-white focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                  href="./CompanyLogin.php"
                >
                  <span class="material-symbols-outlined">
                  login
                  </span>
                </a>
              </div>
              <!-- End Button Group -->
            </div>
          </div>
        </div>
        <!-- End Collapse -->
    </nav>
</header>