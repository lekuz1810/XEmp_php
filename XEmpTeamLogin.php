<?php
// Start session to manage user login state
session_start();

// Database connection
include 'Xemp_components/Xemp_Mysql_conn.php';

$error_message = ""; // Initialize an empty error message

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL statement to avoid SQL injection
    $stmt = $conn->prepare("SELECT * FROM xemp_login WHERE username = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the username exists in the database
    if ($result->num_rows === 1) {
        // Fetch the user data
        $user = $result->fetch_assoc();

        // Directly compare plain text passwords
        if ($password === $user['password']) {
            // Password is correct, set session and redirect based on role
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] === 'Admin') {
                // Redirect to Admin Panel
                header("Location: XEmpAdminPanel.php");
                exit();
            } else {
                // Redirect to Employee Panel
                header("Location: XEmpEmployeePanel.php");
                exit();
            }
        } else {
            // Password is incorrect
            $error_message = "Incorrect password!";
        }
    } else {
        // Username not found
        $error_message = "Username not found!";
    }

    // Close statement and connection
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&amp;display=swap"
      rel="stylesheet"
    />
    <!-- home style -->
    <link rel="stylesheet" href="assets/css/home_style.css" />
  </head>
  <body>
    <div
      class="tc-header-st3 mx-auto flex h-screen max-w-lg flex-col md:max-w-none lg:flex-row"
    >
      <div
        class="Subcontainer px-5 w-full lg:max-w-md rounded-3xl py-10 sm:px-10 lg:m-6 lg:mr-8 z-10"
      >
        <a href="index.html" class="color-primary mb-2 flex items-center">
          《 Back
        </a>
        <p class="color-primary mt-5 text-xl font-bold md:text-4xl md:leading-snug ">
          In Trustworthy
          <span class="flex items-center">
            Workforce Insights.
          </span>
        </p>
        <p class="color-primary mb-7 leading-relaxed">
          Unlock resources designed to elevate our performance and success.
        </p>
        <div class="rounded-2xl p-0">
          <img class="rounded-2xl" src="assets/img/Iogin_page1.jpg" alt="">
        </div>
      </div>
      <div class="w-full py-5 px-5 lg:py-20 z-30">
        <h2 class="color-secondary mb-2 text-3xl font-bold text-center"># XEmployee Team </h2>
        <h2 class="color-secondary mb-2 text-2xl font-bold text-center">Sign In</h2>
        <a href="#" class="color-secondary mb-10 block font-bold text-gray-600 text-center">
          Unlock resources designed to elevate our performance and success.
        </a>
        <div class="w-full md:w-6/12 text-center m-auto"><br>
          <!-- Form Start -->
          <form id="loginForm" method="POST" action="" >
            <!-- error message -->
            <p id="incorrect" class="mb-1 text-red-500"><?php echo $error_message; ?></p>
            <div class="mb-4 flex flex-col m-auto">
              <div class="focus-within:border-gray-400 relativeflex overflow-hidden rounded-xl border-gray-500 border transition sm:w-80 lg:w-full">
                <input type="email" id="username" name="username" class="w-full bg-white px-4 py-3 text-base text-gray-700 placeholder-gray-400 focus:outline-none" placeholder="Email or Username*" required/>
              </div>
            </div>
            <div class=" mb-4 flex flex-col m-auto">
              <div class="focus-within:border-gray-400 relative flex overflow-hidden rounded-xl border-gray-500 border transition sm:w-80 lg:w-full">
                <input type="password" id="password" name="password" class="w-full bg-white px-4 py-3 text-base text-gray-700 placeholder-gray-400 focus:outline-none" placeholder="Password*" required/>
              </div>
            </div>
            <div class=" text-end mb-3 font-medium text-blue-700 m-auto">
              <a href="#">Forgot Password?</a>
            </div>
            <button class="butn  rounded-xl px-8 py-3 font-bold" type="Submit" name="Submit" title="Sign In">Sign In</button>
          </form>
          <!-- Form End -->
        </div>
      </div>
      <img src="assets/img/header_circle.png" alt="" class="circle" />
    </div>

    <?php
      // if(isset($_POST['Submit'])){

      //     include "Xemp_components/Xemp_Mysql_conn.php";

      //     $username = $_POST['username'];
      //     $password = $_POST['password'];
      //     $role = "Employee";

      //     $stmt = $conn->prepare("insert into xemp_login(username, password,role) VALUES(?,?,?)");
      //     $stmt->bind_param("sss",$username,$password,$role);
      //     $stmt->execute();
      //     $stmt->close();
      //     $conn->close();
      //     echo "Hello, World!";
      // }
    ?>

  </body>
</html>
