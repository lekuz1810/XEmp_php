<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Candidate Case Details</title>

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
    <section class="HeroSection container-fluid p-3 pb-7">
      <div class="BVGNewcase grid lg:grid-cols-12">
        <div class="col-span-12">
            <div class="p-5">
                <h1 class="color-secondary text-center sm:text-xl lg:text-3xl">New Case For BGV</h1>
            </div>
        </div>
        <div class="col-span-12">
            <form action="">
                <div class="formcard grid lg:grid-cols-12">
                    <div class="md:col-span-6">
                        <table class="table-auto md:w-5/6 md:m-auto">
                            <tr>
                                <td class="tablehead"><label for="tenure">Tenure</label></td>
                                <td>:</td>
                                <td><input type="text" id="tenure" name="tenure" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="certificateNumber">Certificate Number</label></td>
                                <td>:</td>
                                <td><input type="text" id="certificateNumber" name="certificateNumber" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="tanEmployer">TAN of the Employer</label></td>
                                <td>:</td>
                                <td><input type="text" id="tanEmployer" name="tanEmployer" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="panEmployee">PAN of the Employee:</label></td>
                                <td>:</td>
                                <td><input type="text" id="panEmployee" name="panEmployee" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="uan">UAN:</label></td>
                                <td>:</td>
                                <td><input type="text" id="uan" name="uan" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="assessmentYear">Assessment Year:</label></td>
                                <td>:</td>
                                <td><input type="text" id="assessmentYear" name="assessmentYear" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="additionalRemarks">Additional Remarks:</label></td>
                                <td>:</td>
                                <td><input type="text" id="additionalRemarks" name="additionalRemarks" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="exitFormalities">Exit Formalities:</label></td>
                                <td>:</td>
                                <td><input type="text" id="exitFormalities" name="exitFormalities" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="refereeDetails">Referee's Details:</label></td>
                                <td>:</td>
                                <td><input type="text" id="refereeDetails" name="refereeDetails" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="comments">Any other comments? (Please Specify):</label></td>
                                <td>:</td>
                                <td><input type="text" id="comments" name="comments" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="disciplinaryFeedback">Feedback on account of Disciplinary/ Ethical/ Integrity conduct on the job:</label></td>
                                <td>:</td>
                                <td><input type="text" id="disciplinaryFeedback" name="disciplinaryFeedback" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="designation">Designation:</label></td>
                                <td>:</td>
                                <td><input type="text" id="designation" name="designation" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="reasonForLeaving">Reason for Leaving:</label></td>
                                <td>:</td>
                                <td><input type="text" id="reasonForLeaving" name="reasonForLeaving" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="employmentType">Type of Employment:</label></td>
                                <td>:</td>
                                <td><input type="text" id="employmentType" name="employmentType" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="additionalVerification">Additional Verification:</label></td>
                                <td>:</td>
                                <td><input type="text" id="additionalVerification" name="additionalVerification" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="modeOfVerification">Mode of Verification:</label></td>
                                <td>:</td>
                                <td><input type="text" id="modeOfVerification" name="modeOfVerification" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="modeOfVerification">Something else:</label></td>
                                <td>:</td>
                                <td><input type="text" id="modeOfVerification" name="modeOfVerification" value=""></td>
                            </tr>
                        </table>
                    </div>
                    <div class="md:col-span-6">
                        <table class="table-auto md:w-5/6 md:m-auto">
                            <tr>
                                <td class="tablehead"><label for="dateOfJoining">Date of Joining:</label></td>
                                <td>:</td>
                                <td><input type="date" id="dateOfJoining" name="dateOfJoining" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="dateOfLeaving">Date of Leaving:</label></td>
                                <td>:</td>
                                <td><input type="date" id="dateOfLeaving" name="dateOfLeaving" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="reportingManagerContact">Reporting Manager Contact Number:</label></td>
                                <td>:</td>
                                <td><input type="text" id="reportingManagerContact" name="reportingManagerContact" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="reportingManagerOrganization">Reporting Manager Organization Name:</label></td>
                                <td>:</td>
                                <td><input type="text" id="reportingManagerOrganization" name="reportingManagerOrganization" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="reportingManagerDesignation">Reporting Manager Designation:</label></td>
                                <td>:</td>
                                <td><input type="text" id="reportingManagerDesignation" name="reportingManagerDesignation" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="reportingManagerName">Reporting Manager Name:</label></td>
                                <td>:</td>
                                <td><input type="text" id="reportingManagerName" name="reportingManagerName" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="companyName">Company Name:</label></td>
                                <td>:</td>
                                <td><input type="text" id="companyName" name="companyName" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="employerName">Employer Name:</label></td>
                                <td>:</td>
                                <td><input type="text" id="employerName" name="employerName" value=""></td>
                            </tr>
                            <tr>
                                <td class="tablehead"><label for="employeeCode">Employee Code:</label></td>
                                <td>:</td>
                                <td><input type="text" id="employeeCode" name="employeeCode" value=""></td>
                            </tr>
                            <tr>
                              <td class="tablehead"><label for="companyExistence">Is the physical existence of the company confirmed?</label></td>
                              <td>:</td>
                              <td><input type="checkbox" id="companyExistence" name="companyExistence" value=""></td>
                            </tr>
                            <tr>
                              <td class="tablehead"><label for="eligibleForRehire">Is the candidate/Applicant eligible for rehire?</label></td>
                              <td>:</td>
                              <td><input type="checkbox" id="eligibleForRehire" name="eligibleForRehire" value=""></td>
                            </tr>
                            <tr>
                              <td class="tablehead"><label for="documentAuthenticity">Is the document authentic?</label></td>
                              <td>:</td>
                              <td><input type="checkbox" id="documentAuthenticity" name="documentAuthenticity" value=""></td>
                            </tr>
                            <tr>
                              <td class="tablehead"><label for="wiproCautionList">Is the Company part of the Wipro Caution List?</label></td>
                              <td>:</td>
                              <td><input type="checkbox" id="wiproCautionList" name="wiproCautionList" value=""></td>
                            </tr>
                            <tr>
                              <td class="tablehead"><label for="bgvDnhList">Is the company part of BGV Agency DNH List?</label></td>
                              <td>:</td>
                              <td><input type="checkbox" id="bgvDnhList" name="bgvDnhList" value=""></td>
                            </tr>
                            <tr>
                              <td class="tablehead"><label for="uanVerified">Is UAN verified?</label></td>
                              <td>:</td>
                              <td><input type="checkbox" id="uanVerified" name="uanVerified" value=""></td>
                            </tr>
                            <tr>
                              <td class="tablehead"><label for="pfVerified">Is PF Verified?</label></td>
                              <td>:</td>
                              <td><input type="checkbox" id="pfVerified" name="pfVerified" value=""></td>
                            </tr>
                            <tr>
                              <td class="tablehead"><label for="form16Verified">Form 16 Verified:</label></td>
                              <td>:</td>
                              <td><input type="checkbox" id="form16Verified" name="form16Verified" value=""></td>
                            </tr>
                            <tr>
                              <td class="tablehead"><label for="companyRegistered">Is the company registered?</label></td>
                              <td>:</td>
                              <td><input type="checkbox" id="companyRegistered" name="companyRegistered" value=""></td>
                            </tr>
                        </table>
                    </div>
                    <div class="md:col-span-6 mt-3">
                        <hr><br>
                        <p class="color-secondary text-center">Attachments: <span class="text-red-500">please attach atleast one of the below</span></p>
                        <table class="table-auto md:w-5/6 md:m-auto">
                            <tr>
                                <td class="tablehead"><label for="dateVerified">PF:</label></td>
                                <td>:</td>
                                <td><input class="fileUpload" type="file" id="dateVerified" name="dateVerified" value=""></td>
                            </tr>
                            <tr>
                              <td class="tablehead"><label for="dateVerified">Experience Letter:</label></td>
                              <td>:</td>
                              <td><input class="fileUpload" type="file" id="dateVerified" name="dateVerified" value=""></td>
                          </tr>
                          <tr>
                            <td class="tablehead"><label for="dateVerified">Releaving Letter:</label></td>
                            <td>:</td>
                            <td><input class="fileUpload" type="file" id="dateVerified" name="dateVerified" value=""></td>
                        </tr>
                        <tr>
                          <td class="tablehead"><label for="dateVerified">Any Other:</label></td>
                          <td>:</td>
                          <td><input class="fileUpload" type="file" id="dateVerified" name="dateVerified" value=""></td>
                      </tr>
                        </table>
                    </div>
                    <div class="md:col-span-6 mt-3">
                        <hr><br>
                        <p class="color-secondary py-2 tablehead">Notes:</p>
                        <textarea id="" class="textarea" name="" rows="4" cols="50"></textarea>                    </div>
                </div>
            </form>
            <div class="text-center">
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