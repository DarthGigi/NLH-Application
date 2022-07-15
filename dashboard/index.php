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
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="/assets/images/favicon/site.webmanifest">

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

  if (isset($_POST['Action'])) {
    $action = $_POST['Action'];
    $id = $_POST['id'];
    if ($action == "Mark") {
      $sql = "UPDATE staff_applications SET reviewed = 1 WHERE id = '$id'";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo '<script>alert("Successfully marked the application as reviewed!");</script>';
      } else {
        echo '<script>alert("Something went wrong. Please try again.");</script>';
      }
    }

    if ($action == "Accept") {
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
                                You will soon receive further information on Discord.
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

    if ($action == "Delete") {
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
                                I\'m sorry to inform you that your staff application has been denied. <br><br>
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
  }
  ?>
  <div x-data="{ open: true }" @keydown.window.escape="open = false">
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div x-show="open" class="fixed inset-0 flex z-40" role="dialog" aria-modal="true"">
    <div x-show=" open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-600 bg-opacity-75" @click="open = false" aria-hidden="true">
    </div>

    <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="relative flex-1 flex flex-col max-w-xs w-full bg-gray-800">

      <div x-show="open" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute top-0 right-0 -mr-12 pt-2">
        <button @click="open = false" type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
        <div class="flex-shrink-0 flex items-center px-4">
          <img class="h-16 w-auto" src="/assets/images/NLH Text.png" alt="NLH">
        </div>
        <nav class="mt-5 px-2 space-y-1">
          <form id="selectAppMobile" action="" method="POST" class="py-4 flex items-center justify-center">
            <div class="w-full max-w-sm mx-auto">
              <label id="listbox-label" class="block text-sm font-medium text-gray-500"> Choose an application </label>
              <div x-data="{ open: false }" class="mt-1 relative">
                <button @click="open = ! open" type="button" class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-purple-500 focus:border-purple-500 sm:text-sm" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                  <div class="flex items-center">
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
                    echo '<li :id="' . $row['id'] . '" @click="selectAppMobile.selectIDMobile.value=' . $row['id'] . '; selectAppMobile.submit();" class="text-gray-900 hover:text-purple-100 group rounded-lg my-2 mx-1 hover:bg-purple-600 cursor-default select-none relative py-2 pl-3 pr-9 transition-all ease-in-out" id="listbox-option-0" role="option">';
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
            <input type="hidden" id="selectIDMobile" name="selectID" value="" />
          </form>
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="#" class="bg-gray-900 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!--
              Heroicon name: outline/home

              Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
            -->
            <svg class="text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Dashboard
          </a>

          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: user-group -->
            <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Team
          </a>

          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/user-circle -->
            <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            Profile
          </a>

          <a href="/logout/" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/logout -->
            <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
            Logout
          </a>
        </nav>
      </div>
      <div class="flex-shrink-0 flex bg-gray-700 p-4">
        <a href="#" class="flex-shrink-0 group block">
          <div class="flex items-center">
            <div class="ml-3">
              <p class="text-base font-medium text-white"><?= $_SESSION['username'] ?></p>
              <p class="text-sm font-medium text-gray-400 group-hover:text-gray-300">View profile</p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="flex-shrink-0 w-14">
      <!-- Force sidebar to shrink to fit close icon -->
    </div>
  </div>
  <div class="flex flex-col flex-1">
    <div class="sticky top-0 z-10 pl-1 pt-1 sm:pl-3 sm:pt-3">
      <button @click="open = true" type="button" class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-200 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500">
        <!-- Heroicon name: outline/menu -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
    <main class="flex-1">
      <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
          <!-- Replace with your content -->
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

            // checked based on the position
            if ($row['position'] == "Administrator") {
              $administrator = '<input checked disabled id="admin" value="Administrator" name="staff" type="radio" class="h-4 w-4 border-gray-300 text-purple-600" />';
              $moderator = '<input disabled id="mod" value="Moderator" name="staff" type="radio" class="h-4 w-4 border-gray-300 text-purple-600" />';
            } else if ($row['position'] == "Moderator") {
              $administrator = '<input disabled id="admin" value="Administrator" name="staff" type="radio" class="h-4 w-4 border-gray-300 text-purple-600" />';
              $moderator = '<input checked disabled id="mod" value="Moderator" name="staff" type="radio" class="h-4 w-4 border-gray-300 text-purple-600" />';
            } else {
              $administrator = '<input disabled id="admin" value="Administrator" name="staff" type="radio" class="h-4 w-4 border-gray-300 text-purple-600" />';
              $moderator = '<input disabled id="mod" value="Moderator" name="staff" type="radio" class="h-4 w-4 border-gray-300 text-purple-600" />';
            }

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
            $rating = $row['rating'] ?? "0";
            $rating = intval($rating);
            if ($rating == 0) {
              $rating = '<option value="0" selected>&#128171;</option>
              <option value="1">&#11088;</option>
              <option value="2">&#11088;&#11088;</option>
              <option value="3">&#11088;&#11088;&#11088;</option>
              <option value="4">&#11088;&#11088;&#11088;&#11088;</option>
              <option value="5">&#127775;&#127775;&#127775;&#127775;&#127775;</option>';
            } else if ($rating == 1) {
              $rating = '<option value="0">&#128171;</option>
              <option value="1" selected>&#11088;</option>
              <option value="2">&#11088;&#11088;</option>
              <option value="3">&#11088;&#11088;&#11088;</option>
              <option value="4">&#11088;&#11088;&#11088;&#11088;</option>
              <option value="5">&#127775;&#127775;&#127775;&#127775;&#127775;</option>';
            } else if ($rating == 2) {
              $rating = '<option value="0">&#128171;</option>
              <option value="1">&#11088;</option>
              <option value="2" selected>&#11088;&#11088;</option>
              <option value="3">&#11088;&#11088;&#11088;</option>
              <option value="4">&#11088;&#11088;&#11088;&#11088;</option>
              <option value="5">&#127775;&#127775;&#127775;&#127775;&#127775;</option>';
            } else if ($rating == 3) {
              $rating = '<option value="0">&#128171;</option>
              <option value="1">&#11088;</option>
              <option value="2">&#11088;&#11088;</option>
              <option value="3" selected>&#11088;&#11088;&#11088;</option>
              <option value="4">&#11088;&#11088;&#11088;&#11088;</option>
              <option value="5">&#127775;&#127775;&#127775;&#127775;&#127775;</option>';
            } else if ($rating == 4) {
              $rating = '<option value="0">&#128171;</option>
              <option value="1">&#11088;</option>
              <option value="2">&#11088;&#11088;</option>
              <option value="3">&#11088;&#11088;&#11088;</option>
              <option value="4" selected>&#11088;&#11088;&#11088;&#11088;</option>
              <option value="5">&#127775;&#127775;&#127775;&#127775;&#127775;</option>';
            } else if ($rating == 5) {
              $rating = '<option value="0">&#128171;</option>
              <option value="1">&#11088;</option>
              <option value="2">&#11088;&#11088;</option>
              <option value="3">&#11088;&#11088;&#11088;</option>
              <option value="4">&#11088;&#11088;&#11088;&#11088;</option>
              <option value="5" selected>&#127775;&#127775;&#127775;&#127775;&#127775;</option>';
            } else {
              $rating = '<option value="0" selected>&#128171;</option>
              <option value="1">&#11088;</option>
              <option value="2">&#11088;&#11088;</option>
              <option value="3">&#11088;&#11088;&#11088;</option>
              <option value="4">&#11088;&#11088;&#11088;&#11088;</option>
              <option value="5">&#127775;&#127775;&#127775;&#127775;&#127775;</option>';
            }
            $change_anything = $row['change_anything'] ?? "Not Provided";
            echo '<form id="selectAction" action="" method="POST" class="space-y-6 px-2 py-8 sm:px-2 md:px-4 lg:px-8 xl:px-16 2xl:px-32 flex items-end justify-end">
            <input type="hidden" name="id" value="' . $id . '" />
            <input type="hidden" id="Action" name="Action" value="" />
            <div x-data="{ open: false }" class="relative inline-block text-left">
              <div>
                <button @click="open = ! open" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-purple-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                  Actions
                  <!-- Heroicon name: solid/chevron-down -->
                  <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
              <div x-show="open" @click.away="open = false" @keydown.escape="open = false" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1" role="none">
                  <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                  <a href="#" @click="selectAction.Action.value=\'Mark\'; selectAction.submit();" class=" text-gray-700 group hover:bg-gray-100 hover:text-gray-900 mx-1 transition-all ease-in-out rounded-lg flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                    <!-- Heroicon name: solid/pencil-alt -->
                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 transition-all ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                      <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    Mark as reviewed
                  </a>
                  <a href="#" @click="selectAction.Action.value=\'Accept\'; selectAction.submit();" class="text-gray-700 group hover:bg-green-100 hover:text-green-900 transition-all ease-in-out mx-1 rounded-lg flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">
                    <!-- Heroicon name: solid/duplicate -->
                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-green-500 transition-all ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    Accept this application
                  </a>
                </div>
                <div class="py-1" role="none">
                  <a href="#" @click="selectAction.Action.value=\'Delete\'; selectAction.submit();" class="text-gray-700 group hover:bg-red-100 hover:text-red-900 transition-all ease-in-out mx-1 rounded-lg flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-6">
                    <!-- Heroicon name: solid/trash -->
                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-red-500 transition-all ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                    Delete
                  </a>
                </div>
              </div>
            </div>
          </form>';
            echo '<div class="space-y-6 px-2 py-8 sm:px-2 md:px-4 lg:px-8 xl:px-16 2xl:px-32">
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
                          <input readonly id="first-name" type="text" value="' . $first_name . '" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" />
                        </div>
          
                        <div class="col-span-6 sm:col-span-3">
                          <label for="last-name" class="block text-sm font-medium text-gray-200">Last name</label>
                          <input readonly type="text" value="' . $last_name . '" id="last-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" />
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="email-address" class="block text-sm font-medium text-gray-200">Email address<span class="text-red-500">*</span></label>
                          <input readonly value="' . $email . '" type="email" id="email-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" />
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="age" class="block text-sm font-medium text-gray-200">Age<span class="text-red-500">*</span></label>
                          <input readonly value="' . $age . '" type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" />
                        </div>
          
                        <div class="col-span-6 sm:col-span-3">
                          <label for="discord-tag" class="block text-sm font-medium text-gray-200">Discord Tag<span class="text-red-500">*</span></label>
                          <input readonly value="' . $discord_tag . '" type="text" id="discord-tag" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" />
                        </div>
          
                        <div class="col-span-6 sm:col-span-3">
                          <label for="discord-id" class="block text-sm font-medium text-gray-200">Discord ID<span class="text-red-500">*</span></label>
                          <input readonly type="number" value="' . $discord_id . '" id="discord-id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" />
                        </div>
          
                        <div class="col-span-6 sm:col-span-6">
                          <label for="minecraft-name" class="block text-sm font-medium text-gray-200">Minecraft Name<span class="text-red-500">*</span></label>
                          <input readonly type="text" value="' . $minecraft_username . '" id="minecraft-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" />
                        </div>
                        <fieldset class="col-span-6 sm:col-span-4">
                          <label for="staff-type" class="block text-sm font-medium text-gray-200">Position<span class="text-red-500">*</span></label>
                          <div class="mt-1 space-y-5">
          
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                              ' . $administrator . '
                              </div>
                              <div class="ml-3 text-sm">
                                <label for="admin" class="font-medium text-gray-200">Administrator</label>
                                <p id="small-description" class="text-gray-400">An Administrator mostly helps with managing the server, bringing new ideas to the table, helping Co-Owners and Owner with daily tasks, etc.</p>
                              </div>
                            </div>
          
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                              ' . $moderator . '
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
                          <input readonly type="text" value="' . $timezone . '" id="timezone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" />
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="prev-staff" class="block text-sm font-medium text-gray-200">Have you ever been a staff member before?<span class="text-red-500">*</span></label>
                          <div class="mt-1">
                            <textarea readonly rows="4" id="prev-staff" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm">' . $prev_experience . '</textarea>
                          </div>
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="mc-play-start" class="block text-sm font-medium text-gray-200">When did you start playing Minecraft?</label>
                          <input readonly type="date" value="' . $minecraft_start_date . '" id="mc-play-start" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" />
                        </div>
          
                        <div class="col-span-6 sm:col-span-3">
                          <label for="hours" class="block text-sm font-medium text-gray-200">On average, how many hours a week will you be able to contribute to the guild?<span class="text-red-500">*</span></label>
                          <p for="hours" class="block text-xs font-medium text-gray-400">Both in Discord and in-game</p>
                          <input readonly value="' . $contribution_time . '" type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" />
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="why-staff" class="block text-sm font-medium text-gray-200">Why do you want to become a staff member?<span class="text-red-500">*</span></label>
                          <div class="mt-1">
                            <textarea readonly rows="6" id="why-staff" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm">' . $why_staff . '</textarea>
                          </div>
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="why-you" class="block text-sm font-medium text-gray-200">Why should we choose you?<span class="text-red-500">*</span></label>
                          <div class="mt-1">
                            <textarea readonly rows="6" id="why-you" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm">' . $why_choose . '</textarea>
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
                      <p class="mt-1 text-sm text-gray-400">All scenario questions are <span class="text-red-500">*</span></p>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-4">
                          <label for="scen1" class="block text-sm font-medium text-gray-200">How would you handle this scenario?</label>
                          <p class="text-sm text-gray-400">You have a friend in the server, someone you were quite close to and you see them breaking a rule.</p>
                          <div class="mt-1">
                            <textarea readonly rows="4" id="scen1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm">' . $scen1 . '</textarea>
                          </div>
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="scen2" class="block text-sm font-medium text-gray-200">What would you do in this scenario?</label>
                          <p class="text-sm text-gray-400">You spot another staff member abusing their powers.</p>
                          <div class="mt-1">
                            <textarea readonly rows="4" id="scen2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm">' . $scen2 . '</textarea>
                          </div>
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="scen3" class="block text-sm font-medium text-gray-200">How would you handle this scenario?</label>
                          <p class="text-sm text-gray-400">You have punished a member for breaking a rule, now that player is accusing you of abusing your powers.</p>
                          <div class="mt-1">
                            <textarea readonly rows="4" id="scen3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm">' . $scen3 . '</textarea>
                          </div>
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="scen4" class="block text-sm font-medium text-gray-200">What would you do in this scenario?</label>
                          <p class="text-sm text-gray-400">Someone asked you a question about the guild and you do not know the answer.</p>
                          <div class="mt-1">
                            <textarea readonly rows="4" id="scen4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm">' . $scen4 . '</textarea>
                          </div>
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="scen5" class="block text-sm font-medium text-gray-200">What would you do in this scenario?</label>
                          <p class="text-sm text-gray-400">The server is on fire, people are spamming, swearing and so forth.</p>
                          <div class="mt-1">
                            <textarea readonly rows="4" id="scen5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm">' . $scen5 . '</textarea>
                          </div>
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="scen6" class="block text-sm font-medium text-gray-200">What would you do in this scenario?</label>
                          <p class="text-sm text-gray-400">A member asked you to do something that you know would be classified as "abuse of power".</p>
                          <div class="mt-1">
                            <textarea readonly rows="4" id="scen6" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm">' . $scen6 . '</textarea>
                          </div>
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="scen7" class="block text-sm font-medium text-gray-200">How would you handle this scenario?</label>
                          <p class="text-sm text-gray-400">Two members are having an argument in chat. It\'s disturbing other members and they are complaining about it to you.</p>
                          <div class="mt-1">
                            <textarea readonly rows="4" id="scen7" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm">' . $scen7 . '</textarea>
                            <p class="mt-2 hidden text-sm text-red-600-focus:peer-invalid:block" id="scen7-error">This field is required!</p>
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
                            <textarea readonly rows="4" name="think" id="think" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm">' . $opinion . '</textarea>
                          </div>
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="rating" class="block text-sm font-medium text-gray-200">What would you rate this application?</label>
                          <div class="mt-1">
                            <select disabled id="rating" name="rating" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base shadow-sm focus:border-purple-500 focus:outline-none sm:text-sm">
                            ' . $rating . '
                            </select>
                          </div>
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="change" class="block text-sm font-medium text-gray-200">Would you change anything about this application/website?</label>
                          <p class="text-sm text-gray-400">If so, what would that be?</p>
                          <div class="mt-1">
                            <textarea readonly rows="4" id="change" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm">' . $change_anything . '</textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>';
          }
          ?>
          <!-- /End replace -->
        </div>
      </div>
    </main>
  </div>
  </div>


  <script src="/assets/scripts/javascript.js" defer></script>
</body>

</html>