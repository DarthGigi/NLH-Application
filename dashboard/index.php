<?php
session_start();
// check if user is logged in
if (isset($_SESSION['username']) && isset($_SESSION['loggedin'])) {
  if ($_SESSION['loggedin'] == true) {
    // user is logged in
    // start connection with the database
    // 000webhost as database
    $host = "localhost";
    $user = "id19070378_nolifehumans";
    $pass = "C@63UO86TqE*K!ckm@tg";
    $db = "id19070378_nlh";
    try {
      $conn = new mysqli($host, $user, $pass, $db);
    } catch (Exception $e) {
      die('<div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"> <div class="sm:flex sm:items-start"> <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"> <svg class="h-6 w-6 text-red-600" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path> </svg> </div><div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> <h3 class="text-lg leading-6 font-medium text-gray-500" id="modal-title"> Oops... Something went wrong </h3> <div class="mt-2"> <p class="text-sm text-gray-400"> Something went wrong while trying to connect with the database. <br>Please try again and/or dm this error message to Gigi:<br><br>' . $e->getMessage() . '</p></div></div></div><div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"> <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open=false" onclick="window.location.href=window.location.href"> Refresh Page </button> <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-400 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:mt-0 sm:w-auto sm:text-sm" @click="open=false"> <a href="mailto:nolifehumans@nlh.wtf">Contact Gigi</a> </button> </div></div></div></div>');
    }

    // Check connection
    if ($conn->connect_error) {
      die('<div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"> <div class="sm:flex sm:items-start"> <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"> <svg class="h-6 w-6 text-red-600" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path> </svg> </div><div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> <h3 class="text-lg leading-6 font-medium text-gray-500" id="modal-title"> Oops... Something went wrong </h3> <div class="mt-2"> <p class="text-sm text-gray-400"> Something went wrong while trying to connect with the database. <br>Please try again and/or dm this error message to Gigi:<br><br>' . $conn->connect_error . '</p></div></div></div><div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"> <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open=false" onclick="window.location.href=window.location.href"> Refresh Page </button> <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-400 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:mt-0 sm:w-auto sm:text-sm" @click="open=false"> <a href="mailto:nolifehumans@nlh.wtf">Contact Gigi</a> </button> </div></div></div></div>');
    }
  } else {
    // user is not logged in
    // redirect to login page
    header('Location: /login');
  }
} else {
  // user is not logged in
  // redirect to login page
  header('Location: /login');
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth h-full">

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

<body class="bg-gray-900 h-full">

  <?php

  if (isset($_POST['mark'])) {
    $id = $_POST['id'];
    $sql = "UPDATE staff_applications SET reviewed = 1 WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo '<script>alert("Successfully marked the application as reviewed!");</script>';
    } else {
      echo '<script>alert("Something went wrong. Please try again.");</script>';
    }
  }

  if (isset($_POST['accept'])) {
    $id = $_POST['id'];
    // Set reviewed to 1 and accepted to 1
    $sql = "UPDATE staff_applications SET reviewed = 1, accepted = 1 WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo '<script>alert("Successfully accepted the application!");</script>';
      $sql = "SELECT * FROM staff_applications WHERE id = '$id'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      $email = $row['email'];
      $name = $row['first_name'];

      $mail = new PHPMailer;
      $mail->isSMTP();
      $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
      $mail->Host = "smtp.mail.me.com";
      $mail->Port = 587;
      $mail->SMTPSecure = 'tls';
      $mail->SMTPAuth = true;
      $mail->Username = 'mr_gigi@icloud.com';
      $mail->Password = 'pcdq-bzyn-mffn-ngwb';
      $mail->setFrom('noreply@nlh.wtf', 'NoLifeHumans'); // From email and name
      $mail->addAddress($email, $name); // to email and name
      $mail->Subject = 'NLH Staff Application Accepted!'; // Email subject
      $mail->msgHTML('<!DOCTYPE html>
  <html lang="en" xmlns:v="urn:schemas-microsoft-com:vml">
  <head>
    <meta charset="utf-8">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">
    <!--[if mso]>
    <noscript>
      <xml>
        <o:OfficeDocumentSettings xmlns:o="urn:schemas-microsoft-com:office:office">
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
      </xml>
    </noscript>
    <style>
      td,th,div,p,a,h1,h2,h3,h4,h5,h6 {font-family: "Segoe UI", sans-serif; mso-line-height-rule: exactly;}
    </style>
    <![endif]-->
    <title>Your staff application has been accepted!</title>
    <style>
      .hover-text-decoration-underline:hover {
        text-decoration: underline;
      }
      @media (max-width: 600px) {
        .sm-w-full {
          width: 100% !important;
        }
        .sm-px-6 {
          padding-left: 24px !important;
          padding-right: 24px !important;
        }
        .sm-pb-3 {
          padding-bottom: 12px !important;
        }
      }
    </style>
  </head>
  <body style="word-break: break-word; -webkit-font-smoothing: antialiased; margin: 0; width: 100%; background-color: #111827; padding: 0">
    <div role="article" aria-roledescription="email" aria-label="You have been accepted" lang="en">
      <table style="width: 100%; font-family: ui-sans-serif, system-ui, -apple-system, \'Segoe UI\', sans-serif" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
          <td align="center" style="background-color: #111827; padding-top: 24px; padding-bottom: 24px">
            <table class="sm-w-full" style="width: 600px" cellpadding="0" cellspacing="0" role="presentation">
              <tr>
                <td class="sm-pb-3" style="padding: 0 16px 24px; text-align: center">
                  <h1 style="font-size: 24px; font-weight: 600; color: #ffffff">
                    You have been accepted &#127881;
                  </h1>
                </td>
              </tr>
              <tr>
                <td align="center" class="sm-px-6">
                  <table class="sm-w-full" style="width: 75%" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <td class="sm-px-6" style="border-radius: 8px; background-color: #1f2937; padding: 48px; text-align: center">
                        <p style="margin: 0; font-size: 18px; font-weight: 600; color: #e5e7eb">Hey ' . $name . ',</p>
                        <p style="font-size: 16px; color: #e5e7eb">
                          Your staff application has been accepted! <br>
                          You will soon receive further information on discord.
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding: 32px; text-align: center; font-size: 12px; color: #9ca3af">
                        <p style="margin: 0">Made by Gigi</p>
                        <p style="margin: 0 0 16px; font-style: italic">Head of NoLifeHumans</p>
                        <p style="margin: 0">
                          <a href="https://nlh.wtf/" class="hover-text-decoration-underline" style="text-decoration: none; color: #a855f7">NLH</a>
                          &bull;
                          <a href="https://discord.gg/herHCGPcNW" class="hover-text-decoration-underline" style="text-decoration: none; color: #a855f7">Discord</a>
                          &bull;
                          <a href="https://twitter.com/NoLifeHumans" class="hover-text-decoration-underline" style="text-decoration: none; color: #a855f7">Twitter</a>
                        </p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </div>
  </body>
  </html>');
      $mail->AltBody = 'HTML messaging not supported by the receiver';
      $mail->SMTPOptions = array(
        'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
        )
      );
      if (!$mail->send()) {
        echo "<script>alert('Mailer Error: " . $mail->ErrorInfo . "');</script>";
      } else {
        echo "<script>alert('Message sent!');</script>";
      }
    }
  }


  if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM staff_applications WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];
    $name = $row['first_name'];

    $sql = "DELETE FROM staff_applications WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo '<script>alert("Successfully deleted the application!");</script>';
      $mail = new PHPMailer;
      $mail->isSMTP();
      $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
      $mail->Host = "smtp.mail.me.com";
      $mail->Port = 587;
      $mail->SMTPSecure = 'tls';
      $mail->SMTPAuth = true;
      $mail->Username = 'mr_gigi@icloud.com';
      $mail->Password = 'pcdq-bzyn-mffn-ngwb';
      $mail->setFrom('noreply@nlh.wtf', 'NoLifeHumans'); // From email and name
      $mail->addAddress($mail, $name); // to email and name
      $mail->Subject = 'NLH Staff Application Denied.'; // Email subject
      $mail->msgHTML('<!DOCTYPE html>
  <html lang="en" xmlns:v="urn:schemas-microsoft-com:vml">
  <head>
    <meta charset="utf-8">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">
    <!--[if mso]>
    <noscript>
      <xml>
        <o:OfficeDocumentSettings xmlns:o="urn:schemas-microsoft-com:office:office">
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
      </xml>
    </noscript>
    <style>
      td,th,div,p,a,h1,h2,h3,h4,h5,h6 {font-family: "Segoe UI", sans-serif; mso-line-height-rule: exactly;}
    </style>
    <![endif]-->
    <title>Your staff application has been denied.</title>
    <style>
      .hover-text-decoration-underline:hover {
        text-decoration: underline;
      }
      @media (max-width: 600px) {
        .sm-w-full {
          width: 100% !important;
        }
        .sm-px-6 {
          padding-left: 24px !important;
          padding-right: 24px !important;
        }
        .sm-pb-3 {
          padding-bottom: 12px !important;
        }
      }
    </style>
  </head>
  <body style="word-break: break-word; -webkit-font-smoothing: antialiased; margin: 0; width: 100%; background-color: #111827; padding: 0">
    <div role="article" aria-roledescription="email" aria-label="You have been accepted" lang="en">
      <table style="width: 100%; font-family: ui-sans-serif, system-ui, -apple-system, \'Segoe UI\', sans-serif" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
          <td align="center" style="background-color: #111827; padding-top: 24px; padding-bottom: 24px">
            <table class="sm-w-full" style="width: 600px" cellpadding="0" cellspacing="0" role="presentation">
              <tr>
                <td class="sm-pb-3" style="padding: 0 16px 24px; text-align: center">
                  <h1 style="font-size: 24px; font-weight: 600; color: #ffffff">
                    Your application has been denied &#128532;
                  </h1>
                </td>
              </tr>
              <tr>
                <td align="center" class="sm-px-6">
                  <table class="sm-w-full" style="width: 75%" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <td class="sm-px-6" style="border-radius: 8px; background-color: #1f2937; padding: 48px; text-align: center">
                        <p style="margin: 0; font-size: 18px; font-weight: 600; color: #e5e7eb">Hey ' . $name . ',</p>
                        <p style="font-size: 16px; color: #e5e7eb">
                          I\'m sorry to inform you that your staff application has been denied. <br>
                          I still want to thank you for your interest in NLH, and I hope you\'ll consider applying again in the future.
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding: 32px; text-align: center; font-size: 12px; color: #9ca3af">
                        <p style="margin: 0">Made by Gigi</p>
                        <p style="margin: 0 0 16px; font-style: italic">Head of NoLifeHumans</p>
                        <p style="margin: 0">
                          <a href="https://nlh.wtf/" class="hover-text-decoration-underline" style="text-decoration: none; color: #a855f7">NLH</a>
                          &bull;
                          <a href="https://discord.gg/herHCGPcNW" class="hover-text-decoration-underline" style="text-decoration: none; color: #a855f7">Discord</a>
                          &bull;
                          <a href="https://twitter.com/NoLifeHumans" class="hover-text-decoration-underline" style="text-decoration: none; color: #a855f7">Twitter</a>
                        </p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </div>
  </body>
  </html>');
      $mail->AltBody = 'HTML messaging not supported by the receiver';
      $mail->SMTPOptions = array(
        'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
        )
      );
      if (!$mail->send()) {
        echo "<script>alert('Mailer Error: " . $mail->ErrorInfo . "');</script>";
      } else {
        echo "<script>alert('Message sent!');</script>";
      }
    } else {
      echo '<script>alert("Something went wrong. Please try again.");</script>';
    }
  }
  ?>

  <?php
  if (isset($_POST['selectID'])) {
    $query = "SELECT id, first_name, last_name, email, reviewed, accepted FROM staff_applications WHERE id = " . $_POST['selectID'] . "";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'] ?? ' ';
        $email = $row['email'];

        if ($row['reviewed'] == 1 && $row['accepted'] == 0) {
          $color = 'bg-green-400';
        } else if ($row['reviewed'] == 1 && $row['accepted'] == 1) {
          $color = 'bg-purple-400';
        } else {
          $color = 'bg-gray-200';
        }
        $application = '<span class="' . $color . ' flex-shrink-0 inline-block h-2 w-2 rounded-full"></span><span class="ml-3 block truncate">' . $first_name . ' ' . $last_name . '</span><span class="text-gray-500 ml-2 truncate">' . $email . '</span>';
      }
    }
  }


  ?>
  <form id="selectApp" action="" method="POST" class="p-8 flex items-center justify-center">
    <div class="w-full max-w-sm mx-auto">
      <label id="listbox-label" class="block text-sm font-medium text-gray-500"> Choose an application </label>
      <div x-data="{ open: false }" class="mt-1 relative">
        <button @click="open = ! open" type="button" class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-purple-500 focus:border-purple-500 sm:text-sm" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
          <div class="flex items-center">
            <?php
            if (isset($application)) {
              echo $application;
            } else
              echo '<span class="block truncate"> Select an application </span>';
            ?>
          </div>
          <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </span>
        </button>

        <ul x-show="open" @click.away="open = false" @keydown.escape="open = false" x-transition class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-60 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
          <?php
          $query = "SELECT id, first_name, last_name, email, reviewed, accepted FROM staff_applications";
          $result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'] ?? ' ';
            $email = $row['email'];

            if ($row['reviewed'] == 1 && $row['accepted'] == 0) {
              $color = 'bg-green-400';
            } else if ($row['reviewed'] == 1 && $row['accepted'] == 1) {
              $color = 'bg-purple-400';
            } else {
              $color = 'bg-gray-200';
            }

            if (isset($_POST['selectID'])) {
              if ($_POST['selectID'] == $row['id']) {
                $checkmark = '<span class="text-purple-600 transition-all ease-in-out group-hover:text-purple-200 absolute inset-y-0 right-0 flex items-center pr-4"><svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" /></svg></span>';
              } else {
                $checkmark = '';
              }
            }

            echo '<li :id="' . $row['id'] . '" @click="selectApp.selectID.value=' . $row['id'] . '; selectApp.submit(); ;" class="text-gray-900 hover:text-purple-100 group rounded-lg my-2 mx-1 hover:bg-purple-600 cursor-default select-none relative py-2 pl-3 pr-9 transition-all ease-in-out" id="listbox-option-0" role="option">';
            echo '<div class="flex items-center">';
            echo '<span class="' . $color . ' flex-shrink-0 inline-block h-2 w-2 rounded-full" aria-hidden="true"></span>';
            echo '<span class="font-normal ml-3 block truncate">' . $row['first_name'] . ' ' . $row['last_name'] . '</span>';
            echo '<span class="text-gray-500 transition-all ease-in-out group-hover:text-purple-200 ml-2 truncate">' . $email . '</span>';
            echo '</div>';
            if (isset($checkmark)) {
              echo $checkmark;
            }
            echo '</li>';
          }
          ?>
        </ul>
      </div>
    </div>
    <input type="hidden" id="selectID" name="selectID" value="" />
  </form>




  <?php
  if (isset($_POST['selectID'])) {
    $query = "SELECT * FROM staff_applications WHERE id = " . $_POST['selectID'];
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'] ?? "Not Provided";
    $email = $row['email'];
    $age = $row['age'];
    $discord_tag = $row['discord_tag'];
    $discord_id = $row['discord_id'];
    $minecraft_username = $row['minecraft_username'];
    $position = $row['position'];
    $timezone = $row['timezone'];
    $prev_experience = $row['previous_experience'];
    $minecraft_start_date = $row['minecraft_start_date'];
    $contribution_time = $row['contribution_time'];
    $why_staff = $row['why_staff'];
    $why_choose = $row['why_choose'];
    $scen1 = $row['scenario_1'];
    $scen2 = $row['scenario_2'];
    $scen3 = $row['scenario_3'];
    $scen4 = $row['scenario_4'];
    $scen5 = $row['scenario_5'];
    $scen6 = $row['scenario_6'];
    $scen7 = $row['scenario_7'];
    $opinion = $row['opinion'] ?? "Not Provided";
    $rating = $row['rating'] ?? "Not Provided";
    $prefer_website = $row['prefer_website'] ?? "Not Provided";
    $change_anything = $row['change_anything'] ?? "Not Provided";
    $reviewed = $row['reviewed'];
    $accepted = $row['accepted'];
  }
  ?>
  <?php if (isset($_POST['selectID'])) {
    echo '
  <section class="m-8 p-4">
    <div class="bg-white shadow overflow-hidden sm:rounded-lg m-4">
      <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Applicant Information</h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details</p>
      </div>
      <div class="border-t border-gray-200">
        <dl>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">First name</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' . $first_name . '</dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Email</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $email  . '</dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Age</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $age  . '</dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Discord Tag</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $discord_tag  . '</dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Discord ID</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $discord_id  . '</dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Minecraft Name</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $minecraft_username  . '</dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Position</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $position  . '</dd>
          </div>
        </dl>
      </div>
    </div>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg m-4">
      <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">General Questions</h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">A few general questions</p>
      </div>
      <div class="border-t border-gray-200">
        <dl>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Timezone</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $timezone  . '</dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Have you ever been a staff member before?</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $prev_experience  . '</dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">When did you start playing Minecraft?</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $minecraft_start_date  . '</dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">On average, how many hours a week will you be able to contribute to the guild?</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $contribution_time  . '</dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Why do you want to become a staff member?</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $why_staff  . '</dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Why should we choose you?</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $why_choose  . '</dd>
          </div>
        </dl>
      </div>
    </div>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg m-4">
      <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Scenario Questions</h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">All of the scenario questions are required</p>
      </div>
      <div class="border-t border-gray-200">
        <dl>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">You have a friend in the server, someone you were quite close to and you see them breaking a rule.</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $scen1  . '</dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">You spot another staff member abusing their powers.</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $scen2  . '</dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">You have punished a member for breaking a rule, now that player is accusing you of abusing your powers.</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $scen3  . '</dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Someone asked you a question about the guild and you do not know the answer.</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $scen4  . '</dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">The server is on fire, people are spamming, swearing and so forth.</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $scen5  . '</dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">A member asked you to do something that you know would be classified as "abuse of power".</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $scen6  . '</dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Two members are having an argument in chat. It\'s disturbing other members and they are complaining about it to you.</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $scen7  . '</dd>
          </div>
        </dl>
      </div>
    </div>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg m-4">
      <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Form Questions</h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">Please note that these questions are totally optional and they will not give any bonus points or advantages!</p>
      </div>
      <div class="border-t border-gray-200">
        <dl>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">What do you think of this application?</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $opinion  . '</dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">What would you rate this application?</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $rating  . '</dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Do you prefer using our own website (this website) for applications or Google Forms?</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $prefer_website  . '</dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Would you change anything about this application/website?</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">' .  $change_anything  . '</dd>
          </div>
        </dl>
      </div>
    </div>
    <form action="" method="post">
      <input type="hidden" name="id" value="' .  $id  . '">
      <button type="submit" value="mark" name="mark" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">Mark this application as reviewed</button>
    </form>
    <form action="" method="post">
      <input type="hidden" name="id" value="' .  $id  . '">
      <input type="hidden" name="email" value="' .  $email  . '">
      <button type="submit" value="accept" name="accept" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-purple-400 hover:bg-purple-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-300">Accept this application</button>
    </form>
    <form action="" method="post">
      <input type="hidden" name="id" value="' .  $id  . '">
      <button type="submit" value="delete" name="delete" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Delete this application</button>
    </form>
  </section>';
  }
  ?>

  <script src="/assets/scripts/javascript.js" defer></script>
</body>

</html>