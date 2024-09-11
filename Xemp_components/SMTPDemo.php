<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';
    require 'phpmailer/src/Exception.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $Admin_Email="lekuzkumar1234@gmail.com";
        $Admin_Name="Lekuz";

        // Get form data
        $full_Name = isset($_POST['fullName']) ? $_POST['fullName'] : '';
        $Org_Name = isset($_POST['OrgName']) ? $_POST['OrgName'] : '';
        $Org_off_Email = isset($_POST['OrgOffEmail']) ? $_POST['OrgOffEmail'] : '';
        $Org_phone_Number = isset($_POST['OrgPhonenumber']) ? $_POST['OrgPhonenumber'] : '';

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  // Replace with your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'lekuzkumar1234@gmail.com';  // Replace with your SMTP username
            $mail->Password = 'xexrhnstwzdzyjav';  // Replace with your SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;  // Adjust the port if necessary

            $mail->setFrom($Admin_Email, $Admin_Name);
            $mail->addAddress('247shope.help@gmail.com');  // Replace with your email address
            $mail->isHTML(false);
            $mail->Subject = 'Got a New demo booking from ' . $Org_Name;
            $mail->Body = "Name: $full_Name\nOrganisation-Name: $Org_Name\nOfficial-Email: $Org_off_Email\nPhone-Number: $Org_phone_Number";
            
            include 'Xemp_Mysql_conn.php';

            $stmt = $conn->prepare("insert into demo_booking(full_Name, Org_Name, Org_off_Email, Org_phone_Number) VALUES(?,?,?,?)");
            $stmt->bind_param("ssss",$full_Name,$Org_Name,$Org_off_Email,$Org_phone_Number);
            $stmt->execute();
            $stmt->close();

            $mail->send();
            
        } catch (Exception $e) {
            echo "Message delivery failed. Error: " . $mail->ErrorInfo;
        }
        
    } else {
        echo "Invalid request.";
    }



?>