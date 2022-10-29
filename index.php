<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NLH &mdash; Application Form</title>
  <link rel="stylesheet" href="/assets/css/master.css" />
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


  <!-- Theme tag for safari 15-->
  <meta name="theme-color" content="#111827" />
  <meta content="#9d18ff" data-react-helmet="true" name="theme-color" />

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/images/favicon/site.webmanifest">

  <!-- Primary Meta Tags -->
  <title>NLH Staff Application</title>
  <meta name="title" content="NLH Staff Application">
  <meta name="description" content="Apply for the staff position at NoLifeHumans here!">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://apply.nlh.wtf/">
  <meta property="og:title" content="NLH Staff Application">
  <meta property="og:description" content="Apply for the staff position at NoLifeHumans here!">
  <meta property="og:image" content="/assets/images/NLH Logo.png">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://apply.nlh.wtf/">
  <meta property="twitter:title" content="NLH Staff Application">
  <meta property="twitter:description" content="Apply for the staff position at NoLifeHumans here!">
  <meta property="twitter:image" content="/assets/images/NLH Logo.png">
</head>
<?php
// 000webhost as database
$host = "localhost";
$user = "id19070378_nolifehumans";
$pass = "C@63UO86TqE*K!ckm@tg";
$db = "id19070378_nlh";
?>

<body class="bg-gray-900">
  <section class="body-font h-screen text-gray-200">
    <img src="/assets/images/Sky.svg" alt="Logo" class="drag-none select-none pointer-events-none absolute inset-0 h-full w-full object-cover object-center" />
    <div class="container relative mx-auto flex h-screen flex-col items-center px-5 py-24 md:flex-row">
      <div class="mb-16 flex flex-col items-center text-center md:mb-0 md:w-1/2 md:items-start md:pr-16 md:text-left lg:flex-grow lg:pr-24">
        <h1 class="title-font mb-4 text-3xl font-medium text-white sm:text-4xl">Welcome to the NLH Staff Application.</h1>
        <p class="mb-4 leading-relaxed">Please fill everything out truthfully and take your time, there is no rush!</p>
        <p class="mb-4 leading-relaxed">
          Be mature and professional as much as you can, a few jokes here and there are appreciated. <br />
          Rembember to keep an eye on your, vocabulary, spelling, grammar and punctuation.
        </p>
        <p class="mb-4 leading-relaxed">Questions with an <span class="text-red-400">*</span> are required!</p>
        <div class="flex justify-center gap-4">
          <button onclick="document.getElementById('form').scrollIntoView({ behavior: 'smooth', block: 'start' });" class="inline-flex rounded border-0 bg-purple-500 py-2 px-6 text-lg text-white hover:bg-purple-600 focus:outline-none">Apply Now!</button>
          <a href="/login/" class="inline-flex rounded border-0 bg-gray-500 py-2 px-6 text-lg text-white hover:bg-gray-600 focus:outline-none">Staff Login</a>
        </div>
      </div>
      <div class="w-5/6 md:w-1/2 lg:w-full lg:max-w-lg">
        <img class="hidden md:block drag-none select-none pointer-events-none rounded-lg object-cover object-center" alt="NLH Logo" src="/assets/images/NLH Logo Transparent.png" />
      </div>
    </div>
  </section>

  <?php
  try {
    $conn = new mysqli($host, $user, $pass, $db);
  } catch (Exception $e) {
    die('<div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"> <div class="sm:flex sm:items-start"> <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"> <svg class="h-6 w-6 text-red-600" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path> </svg> </div><div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> <h3 class="text-lg leading-6 font-medium text-gray-500" id="modal-title"> Oops... Something went wrong </h3> <div class="mt-2"> <p class="text-sm text-gray-400"> Something went wrong while trying to connect with the database. <br>Please try again or contact us directly. </p></div></div></div><div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"> <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open=false" onclick="window.location.href=window.location.href"> Refresh Page </button> <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-400 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:mt-0 sm:w-auto sm:text-sm" @click="open=false"> <a href="mailto:nolifehumans@nlh.wtf">Contact us</a> </button> </div></div></div></div>');
  }

  // Check connection
  if ($conn->connect_error) {
    die('<div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"> <div class="sm:flex sm:items-start"> <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"> <svg class="h-6 w-6 text-red-600" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path> </svg> </div><div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> <h3 class="text-lg leading-6 font-medium text-gray-500" id="modal-title"> Oops... Something went wrong </h3> <div class="mt-2"> <p class="text-sm text-gray-400"> Something went wrong while trying to connect with the database. <br>Please try again or contact us directly. </p></div></div></div><div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"> <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open=false" onclick="window.location.href=window.location.href"> Refresh Page </button> <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-400 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:mt-0 sm:w-auto sm:text-sm" @click="open=false"> <a href="mailto:nolifehumans@nlh.wtf">Contact us</a> </button> </div></div></div></div>');
  }
  ?>
  <?php
  if (isset($_POST['Submit'])) {
    $firstname = $_POST['first-name'];
    $lastname = $_POST['last-name'] ?? "Not Entered";
    $email = $_POST['email-address'];
    $age = $_POST['age'];
    $discordtag = $_POST['discord-tag'];
    $discordid = $_POST['discord-id'];
    $minecraftname = $_POST['minecraft-name'];
    $stafftype = $_POST['staff'];
    $timezone = $_POST['timezone'];
    $previousstaff = $_POST['prev-staff'];
    $minecraftstart = date('Y-m-d', strtotime($_POST['mc-play-start']));
    $contribute = $_POST['hours'];
    $whystaff = $_POST['why-staff'];
    $whyyou = $_POST['why-you'];
    $scen1 = $_POST['scen1'];
    $scen2 = $_POST['scen2'];
    $scen3 = $_POST['scen3'];
    $scen4 = $_POST['scen4'];
    $scen5 = $_POST['scen5'];
    $scen6 = $_POST['scen6'];
    $scen7 = $_POST['scen7'];
    $think = $_POST['think'] ?? "Not Entered";
    $rating = $_POST['rating'] ?? "-1";
    $whichwebsite = $_POST['which-website'] ?? "Not Entered";
    $change = $_POST['change'] ?? "Not Entered";

    // check if the user has already submitted a form via email and display error if they have
    $sql = "SELECT * FROM staff_applications WHERE `email` = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      echo ' <div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"> <div class="sm:flex sm:items-start"> <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"> <svg class="h-6 w-6 text-red-600" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path> </svg> </div><div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> <h3 class="text-lg leading-6 font-medium text-gray-500" id="modal-title"> Oops... Something went wrong </h3> <div class="mt-2"> <p class="text-sm text-gray-400"> You already have submitted an application with this email adress! <br>Please try again with a different one or if you think this is an error, please contact us directly. </p></div></div></div><div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"> <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open=false"> Click to close </button> <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-400 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:mt-0 sm:w-auto sm:text-sm" @click="open=false"> <a href="mailto:nolifehumans@nlh.wtf">Contact us</a> </button> </div></div></div></div>';
    } else {
      $query = "INSERT INTO staff_applications (first_name, last_name, email, age, discord_tag, discord_id, minecraft_username, position, timezone, previous_experience, minecraft_start_date, contribution_time, why_staff, why_choose, scenario_1, scenario_2, scenario_3, scenario_4, scenario_5, scenario_6, scenario_7, opinion, rating, prefer_website, change_anything, reviewed, accepted) VALUES ('$firstname', '$lastname', '$email', '$age', '$discordtag', '$discordid', '$minecraftname', '$stafftype', '$timezone', '$previousstaff', '$minecraftstart', '$contribute', '$whystaff', '$whyyou', '$scen1', '$scen2', '$scen3', '$scen4', '$scen5', '$scen6', '$scen7', '$think', '$rating', '$whichwebsite', '$change', '0', '0')";
      $result = mysqli_query($conn, $query);
      if ($result) {
        echo '<div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-gray-900 rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6"> <div> <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-200"> <svg class="h-6 w-6 text-green-600" x-description="Heroicon name: outline/check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path> </svg> </div><div class="mt-3 text-center sm:mt-5"> <h3 class="text-lg leading-6 font-medium text-gray-200" id="modal-title"> Application Sent Successfully </h3> <div class="mt-2"> <p class="text-sm text-gray-200"> Thank you for applying to NLH. <br>Your application has succesfully been sent to our database. <br> Once our team reviews it, you will automatically get an email from us. </p></div></div></div><div class="mt-5 sm:mt-6"> <button type="button" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-purple-600 text-base font-medium text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:text-sm" @click="open=false"> Click to close </button> </div></div></div></div>';
        // clear the form inputs when it has been successfully saved in the database
        $firstname = "";
        $lastname = "";
        $email = "";
        $age = "";
        $discordtag = "";
        $discordid = "";
        $minecraftname = "";
        $stafftype = "";
        $timezone = "";
        $previousstaff = "";
        $minecraftstart = "";
        $contribute = "";
        $whystaff = "";
        $whyyou = "";
        $scen1 = "";
        $scen2 = "";
        $scen3 = "";
        $scen4 = "";
        $scen5 = "";
        $scen6 = "";
        $scen7 = "";
        $think = "";
        $rating = "";
        $whichwebsite = "";
        $change = "";
        echo '<script defer>document.getElementById("form").reset();</script>';
        $_SESSION['last-post'] = time();
      } else {
        echo ' <div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"> <div class="sm:flex sm:items-start"> <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"> <svg class="h-6 w-6 text-red-600" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path> </svg> </div><div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> <h3 class="text-lg leading-6 font-medium text-gray-500" id="modal-title"> Oops... Something went wrong </h3> <div class="mt-2"> <p class="text-sm text-gray-400"> Something went wrong while sending your application. <br>Please try again or contact us directly. </p></div></div></div><div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"> <button onclick="window.history.back();" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open=false"> Click to close </button> <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-400 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:mt-0 sm:w-auto sm:text-sm" @click="open=false"> <a href="mailto:nolifehumans@nlh.wtf">Contact us</a> </button> </div></div></div></div>';
      }
    }
  }


  ?>
  <!-- Begin form -->
  <form action="" method="post" id="form">
    <div class="space-y-6 px-4 py-8 sm:px-8 md:px-16 lg:px-32 xl:px-48 2xl:px-72">
      <div class="rounded-lg bg-gray-800 px-4 py-5 shadow sm:p-6">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <h3 class="text-lg font-medium leading-6 text-gray-200">Personal Information</h3>
            <p class="mt-1 text-sm text-gray-400">A few questions about you</p>
          </div>
          <div class="mt-5 md:col-span-2 md:mt-0">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-200">First name<span class="text-red-500">*</span></label>
                <input type="text" placeholder="Craig" required name="first-name" id="first-name" autocomplete="given-name" class="peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 focus:placeholder-shown:invalid:border-pink-500 focus:placeholder-shown:invalid:ring-pink-500 sm:text-sm" />
                <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="name-error">This field is required!</p>
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-200">Last name</label>
                <input type="text" placeholder="Appleseed" name="last-name" id="last-name" autocomplete="family-name" class="peer mt-1 block w-full rounded-md border-gray-300 shadow-sm invalid:border-pink-500 invalid:ring-pink-500 focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 sm:text-sm" />
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="email-address" class="block text-sm font-medium text-gray-200">Email address<span class="text-red-500">*</span></label>
                <input required placeholder="craig@apple.com" type="email" name="email-address" id="email-address" autocomplete="email" class="peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 focus:placeholder-shown:invalid:border-pink-500 focus:placeholder-shown:invalid:ring-pink-500 sm:text-sm" />
                <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="email-error">You entered an incorrect email address</p>
                <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="email-error2">This field is required!</p>
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="age" class="block text-sm font-medium text-gray-200">Age<span class="text-red-500">*</span></label>
                <input required placeholder="53" type="number" name="age" min="13" max="100" class="peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 focus:placeholder-shown:invalid:border-pink-500 focus:placeholder-shown:invalid:ring-pink-500 sm:text-sm" />
                <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="age-error">Your age must be between 13 and 100</p>
                <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="age-error2">This field is required!</p>
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="discord-tag" class="block text-sm font-medium text-gray-200">Discord Tag<span class="text-red-500">*</span></label>
                <input required placeholder="Wumpus#0000" pattern=".*#[0-9]{4}" type="text" name="discord-tag" id="discord-tag" class="peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 focus:placeholder-shown:invalid:border-pink-500 focus:placeholder-shown:invalid:ring-pink-500 sm:text-sm" />
                <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="discord-tag-error">Your discord tag is not valid!</p>
                <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="discord-tag-error2">This field is required!</p>
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="discord-id" class="block text-sm font-medium text-gray-200">Discord ID<span class="text-red-500">*</span></label>
                <input type="number" required placeholder="123456789" name="discord-id" id="discord-id" class="peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 focus:placeholder-shown:invalid:border-pink-500 focus:placeholder-shown:invalid:ring-pink-500 sm:text-sm" />
                <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="discord-id-error">This field is required!</p>
              </div>

              <div class="col-span-6 sm:col-span-6">
                <label for="minecraft-name" class="block text-sm font-medium text-gray-200">Minecraft Name<span class="text-red-500">*</span></label>
                <input type="text" required placeholder="Mojang" name="minecraft-name" id="minecraft-name" class="peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 focus:placeholder-shown:invalid:border-pink-500 focus:placeholder-shown:invalid:ring-pink-500 sm:text-sm" />
                <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="minecraft-name-error">This field is required!</p>
              </div>
              <fieldset class="col-span-6 sm:col-span-4">
                <label for="staff-type" class="block text-sm font-medium text-gray-200">Position<span class="text-red-500">*</span></label>
                <input disabled type="hidden" name="staff-type" id="staff-type" />
                <div class="mt-1 space-y-5">

                  <div class="relative flex items-start">
                    <div class="flex h-5 items-center">
                      <input id="admin" value="Administrator" name="staff" required type="radio" class="h-4 w-4 border-gray-300 text-purple-600 focus:ring-purple-500" />
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="admin" class="font-medium text-gray-200">Administrator</label>
                      <p id="small-description" class="text-gray-400">An Administrator mostly helps with managing the server, bringing new ideas to the table, helping Co-Owners and Owner with daily tasks, etc.</p>
                    </div>
                  </div>

                  <div class="relative flex items-start">
                    <div class="flex h-5 items-center">
                      <input id="mod" value="Moderator" name="staff" type="radio" class="h-4 w-4 border-gray-300 text-purple-600 focus:ring-purple-500" />
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="mod" class="font-medium text-gray-200">Moderator</label>
                      <p id="mod-description" class="text-gray-400">A Moderator mostly helps with moderating the server, enforcing the rules, moderating the in-game chat, etc.</p>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>

      <div class="rounded-lg bg-gray-800 px-4 py-5 shadow sm:p-6">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <h3 class="text-lg font-medium leading-6 text-gray-200">General Questions</h3>
            <p class="mt-1 text-sm text-gray-400">A few general questions</p>
          </div>
          <div class="mt-5 md:col-span-2 md:mt-0">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-4">
                <label for="timezone" class="block text-sm font-medium text-gray-200">Timezone<span class="text-red-500">*</span></label>
                <input type="text" placeholder="PDT" required name="timezone" id="timezone" class="peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 focus:placeholder-shown:invalid:border-pink-500 focus:placeholder-shown:invalid:ring-pink-500 sm:text-sm" />
                <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="timezone-error">This field is required!</p>
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="prev-staff" class="block text-sm font-medium text-gray-200">Have you ever been a staff member before?<span class="text-red-500">*</span></label>
                <div class="mt-1">
                  <textarea required placeholder="If you have; What was your rank? What were your duties? And if applicable, Why are you no longer staff in the server?" rows="4" name="prev-staff" id="prev-staff" class="invalid:place-holder-shown:border-pink-500 invalid:place-holder-shown:ring-pink-500 peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 sm:text-sm"></textarea>
                  <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="prev-staff-error">This field is required!</p>
                </div>
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="mc-play-start" class="block text-sm font-medium text-gray-200">When did you start playing Minecraft?</label>
                <input type="date" name="mc-play-start" id="mc-play-start" class="peer mt-1 block w-full rounded-md border-gray-300 shadow-sm invalid:border-pink-500 invalid:ring-pink-500 focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 sm:text-sm" />
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="hours" class="block text-sm font-medium text-gray-200">On average, how many hours a week will you be able to contribute to the guild?<span class="text-red-500">*</span></label>
                <p for="hours" class="block text-xs font-medium text-gray-400">Both in Discord and in-game</p>
                <input type="number" name="hours" placeholder="169" required min="0" max="168" class="invalid:place-holder-shown:border-pink-500 invalid:place-holder-shown:ring-pink-500 peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 sm:text-sm" />
                <p class="mt-2 hidden text-sm text-red-600 peer-invalid:peer-out-of-range:block" id="max-hours-error">There are only 168 hours in a week &#128539;</p>
                <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:peer-in-range:block" id="hours-error">This field is required!</p>
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="why-staff" class="block text-sm font-medium text-gray-200">Why do you want to become a staff member?<span class="text-red-500">*</span></label>
                <div class="mt-1">
                  <textarea required rows="6" name="why-staff" id="why-staff" class="invalid:place-holder-shown:border-pink-500 invalid:place-holder-shown:ring-pink-500 peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 sm:text-sm"></textarea>
                  <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="why-saff-error">This field is required!</p>
                </div>
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="why-you" class="block text-sm font-medium text-gray-200">Why should we choose you?<span class="text-red-500">*</span></label>
                <div class="mt-1">
                  <textarea required rows="6" name="why-you" id="why-you" class="invalid:place-holder-shown:border-pink-500 invalid:place-holder-shown:ring-pink-500 peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 sm:text-sm"></textarea>
                  <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="why-you-error">This field is required!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="rounded-lg bg-gray-800 px-4 py-5 shadow sm:p-6">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <h3 class="text-lg font-medium leading-6 text-gray-200">Scenario Questions<span class="text-red-500">*</span></h3>
            <p class="mt-1 text-sm text-gray-400">All scenario questions are required <span class="text-red-500">*</span></p>
          </div>
          <div class="mt-5 md:col-span-2 md:mt-0">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-4">
                <label for="scen1" class="block text-sm font-medium text-gray-200">How would you handle this scenario?</label>
                <p class="text-sm text-gray-400">You have a friend in the server, someone you were quite close to and you see them breaking a rule.</p>
                <div class="mt-1">
                  <textarea required rows="4" name="scen1" id="scen1" class="invalid:place-holder-shown:border-pink-500 invalid:place-holder-shown:ring-pink-500 peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 sm:text-sm"></textarea>
                  <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="scen1-error">This field is required!</p>
                </div>
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="scen2" class="block text-sm font-medium text-gray-200">What would you do in this scenario?</label>
                <p class="text-sm text-gray-400">You spot another staff member abusing their powers.</p>
                <div class="mt-1">
                  <textarea required rows="4" name="scen2" id="scen2" class="invalid:place-holder-shown:border-pink-500 invalid:place-holder-shown:ring-pink-500 peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 sm:text-sm"></textarea>
                  <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="scen2-error">This field is required!</p>
                </div>
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="scen3" class="block text-sm font-medium text-gray-200">How would you handle this scenario?</label>
                <p class="text-sm text-gray-400">You have punished a member for breaking a rule, now that player is accusing you of abusing your powers.</p>
                <div class="mt-1">
                  <textarea required rows="4" name="scen3" id="scen3" class="invalid:place-holder-shown:border-pink-500 invalid:place-holder-shown:ring-pink-500 peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 sm:text-sm"></textarea>
                  <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="scen3-error">This field is required!</p>
                </div>
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="scen4" class="block text-sm font-medium text-gray-200">What would you do in this scenario?</label>
                <p class="text-sm text-gray-400">Someone asked you a question about the guild and you do not know the answer.</p>
                <div class="mt-1">
                  <textarea required rows="4" name="scen4" id="scen4" class="invalid:place-holder-shown:border-pink-500 invalid:place-holder-shown:ring-pink-500 peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 sm:text-sm"></textarea>
                  <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="scen4-error">This field is required!</p>
                </div>
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="scen5" class="block text-sm font-medium text-gray-200">What would you do in this scenario?</label>
                <p class="text-sm text-gray-400">The server is on fire, people are spamming, swearing and so forth.</p>
                <div class="mt-1">
                  <textarea required rows="4" name="scen5" id="scen5" class="invalid:place-holder-shown:border-pink-500 invalid:place-holder-shown:ring-pink-500 peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 sm:text-sm"></textarea>
                  <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="scen5-error">This field is required!</p>
                </div>
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="scen6" class="block text-sm font-medium text-gray-200">What would you do in this scenario?</label>
                <p class="text-sm text-gray-400">A member asked you to do something that you know would be classified as "abuse of power".</p>
                <div class="mt-1">
                  <textarea required rows="4" name="scen6" id="scen6" class="invalid:place-holder-shown:border-pink-500 invalid:place-holder-shown:ring-pink-500 peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 sm:text-sm"></textarea>
                  <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="scen6-error">This field is required!</p>
                </div>
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="scen7" class="block text-sm font-medium text-gray-200">How would you handle this scenario?</label>
                <p class="text-sm text-gray-400">Two members are having an argument in chat. It's disturbing other members and they are complaining about it to you.</p>
                <div class="mt-1">
                  <textarea required rows="4" name="scen7" id="scen7" class="invalid:place-holder-shown:border-pink-500 invalid:place-holder-shown:ring-pink-500 peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 sm:text-sm"></textarea>
                  <p class="mt-2 hidden text-sm text-red-600 peer-focus:peer-invalid:block" id="scen7-error">This field is required!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="rounded-lg bg-gray-800 px-4 py-5 shadow sm:p-6">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <h3 class="text-lg font-medium leading-6 text-gray-200">Form Questions</h3>
            <p class="mt-1 text-sm text-gray-400">All <span class="bg-gradient-to-b from-[#d979d9] to-[#9d18ff] bg-clip-text text-transparent">NoLifeHumans</span> websites are hand-crafted from scratch by <a href="https://discord.com/users/389759544776982528" target="_blank" class="rounded-[3px] bg-[#5865f24c] px-[2px] py-[1px] text-[#dee0fc] transition-colors duration-75 ease-out hover:bg-[#5865f2] hover:text-white hover:underline">@Gigi</a>.</p>
            <p class="mt-1 text-sm text-red-400">Please note that these questions are totally optional and they will not give any bonus points or advantages!</p>
          </div>
          <div class="mt-5 md:col-span-2 md:mt-0">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-4">
                <label for="think" class="block text-sm font-medium text-gray-200">What do you think of this application?</label>
                <div class="mt-1">
                  <textarea rows="4" name="think" id="think" class="peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm"></textarea>
                </div>
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="rating" class="block text-sm font-medium text-gray-200">What would you rate this application?</label>
                <div class="mt-1">
                  <select id="rating" name="rating" class="peer mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base shadow-sm focus:border-purple-500 focus:outline-none focus:ring-purple-500 sm:text-sm">
                    <option value="0" hidden disabled>&#128171;</option>
                    <option value="1">&#11088;</option>
                    <option value="2">&#11088;&#11088;</option>
                    <option value="3">&#11088;&#11088;&#11088;</option>
                    <option value="4">&#11088;&#11088;&#11088;&#11088;</option>
                    <option value="5">&#127775;&#127775;&#127775;&#127775;&#127775;</option>
                  </select>
                </div>
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="change" class="block text-sm font-medium text-gray-200">Would you change anything about this application/website?</label>
                <p class="text-sm text-gray-400">If so, what would that be?</p>
                <div class="mt-1">
                  <textarea rows="4" name="change" id="change" class="peer mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-end">
        <input type="submit" name="Submit" value="Submit" class="cursor-pointer ml-3 inline-flex justify-center rounded-md border border-transparent bg-purple-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2"></input>
      </div>
    </div>
  </form>
  <script defer>
  // Set max date and value to today for date with id "mc-play-start" with vanilla js
  var today = new Date()
  var dd = today.getDate()
  var mm = today.getMonth() + 1 //January is 0
  var yyyy = today.getFullYear()
  if (dd < 10) {
    dd = '0' + dd
  }
  if (mm < 10) {
    mm = '0' + mm
  }
  today = yyyy + '-' + mm + '-' + dd
  document.getElementById('mc-play-start').setAttribute('max', today)
  document.getElementById('mc-play-start').setAttribute('value', today)
  </script>
</body>

</html>