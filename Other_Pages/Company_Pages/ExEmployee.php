<?php

    // MySql Connection
    include 'Company_components/Company_MySql_Conn.php';

    session_start();

    // Check if the user is logged in and is an employee
    // if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'ExEmployee') {
    //     header("Location: index.php");
    //     exit();
    // }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ex-Employee</title>
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
    <section class="MainCommonSection container-fluid h-auto p-5">
        <h1 class="text-center Commonheading pt-5 color-secondary">Ex-Employee login</h1>
        <div class="lg:w-5/6 m-auto">
            <p class="text-center color-secondary  pt-5">Welocome to #XEmp Services</p>
            <p class="text-center color-secondary  pt-5">Please fill the form in the given below</p>
            <div class="ExEmployeeFormCard">
                <form action="">
                    <table class="table-auto md:w-5/6 md:m-auto">
                        <tr>
                            <td class="tablehead"><label for="Employee Name">Employee Name</label></td>
                            <td>:</td>
                            <td><input type="text" id="Employee Name" name="Employee Name" value=""></td>
                        </tr>
                        <tr>
                            <td class="tablehead"><label for="EmployeeId">Employee Id</label></td>
                            <td>:</td>
                            <td><input type="text" id="EmployeeId" name="EmployeeId" value=""></td>
                        </tr>
                        <tr>
                            <td class="tablehead"><label for="tanEmployer">TAN of the Employer</label></td>
                            <td>:</td>
                            <td><input type="text" id="tanEmployer" name="tanEmployer" value=""></td>
                        </tr>
                        <tr>
                            <td class="tablehead"><label for="assessmentYear">Assessment Year:</label></td>
                            <td>:</td>
                            <td><input type="text" id="assessmentYear" name="assessmentYear" value=""></td>
                        </tr>
                        <tr>
                            <td class="tablehead"><label for="designation">Designation:</label></td>
                            <td>:</td>
                            <td><input type="text" id="designation" name="designation" value=""></td>
                        </tr>
                        <tr>
                            <td class="tablehead"><label for="designation">Select Your requirment:</label></td>
                            <td>:</td>
                            <td><select name="ExEmployeeRequirement" id="cars">
                                <option value="" disabled selected>Your Requirement</option>
                                <hr>
                                <option value="PF">PF</option>
                                <option value="Experience Certificate">Experience Certificate</option>
                                <option value="Cover Letter">Cover Letter</option>
                                <option value="PaySlips">Pay Slips</option>
                                <option value="Legal">Legal</option>
                                <option value="Others">Others</option>
                              </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="tablehead">Notes</td>
                            <td>:</td>
                            <td><textarea class="textarea" name="" id=""></textarea></td>
                        </tr>
                    </table>
                </form>
                <div class="text-center my-2">
                    <a href="PaymentLink.php"><button class="butn rounded-xl">Submit</button></a>
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