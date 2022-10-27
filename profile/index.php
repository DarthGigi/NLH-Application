<?php
session_start();
// check if user is logged in
if (isset($_SESSION['username']) && isset($_SESSION['loggedin'])) {
  if ($_SESSION['loggedin'] == true) {
    if ($_SESSION['guest'] == true) {
      $disabled = 'disabled';
      $disabledText = 'You are logged in as a guest.';
    } else {
      $disabled = '';
      $disabledText = 'Save';
    }

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

if (isset($_POST['submitForm'])) {
  $id = $_SESSION['user_id'];
  if (isset($_POST['username'])) {
    $username = $_POST['username'];
    if (empty($_POST['username'])) {
      $username = $_SESSION['username'];
    }
    $sql = "UPDATE users SET username = '$username' WHERE id = '$id'";
    $result = $conn->query($sql);
    if ($result) {
      echo '<div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"> <div class="sm:flex sm:items-start"> <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10"> <svg class="h-6 w-6 text-green-600" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path> </svg> </div><div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> <h3 class="text-lg leading-6 font-medium text-gray-500" id="modal-title"> Updated! </h3> <div class="mt-2"> <p class="text-sm text-gray-400"> Successfully updated your details! </p></div></div></div><div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"> <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open=false" onclick="window.location.href=window.location.href"> Close </button> </div></div></div></div>';
    } else {
      echo '<div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"> <div class="sm:flex sm:items-start"> <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"> <svg class="h-6 w-6 text-red-600" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path> </svg> </div><div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> <h3 class="text-lg leading-6 font-medium text-gray-500" id="modal-title"> Oops... Something went wrong </h3> <div class="mt-2"> <p class="text-sm text-gray-400"> Try again or contact Gigi </p></div></div></div><div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"> <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open=false" onclick="window.location.href=window.location.href"> Try Again </button> </div></div></div></div>';
    }
  };

  if (isset($_POST['new-pass'])) {
    $currentPass = $_POST['current-pass'];
    $newPass = $_POST['new-pass'];
    $sql = "SELECT * FROM users WHERE id = '$id' AND password = '$currentPass'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $sql = "UPDATE users SET password = '$newPass' WHERE id = '$id'";
      $result = $conn->query($sql);
      if ($result) {
        echo '<div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"> <div class="sm:flex sm:items-start"> <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10"> <svg class="h-6 w-6 text-green-600" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path> </svg> </div><div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> <h3 class="text-lg leading-6 font-medium text-gray-500" id="modal-title"> Updated! </h3> <div class="mt-2"> <p class="text-sm text-gray-400"> Successfully updated your details! </p></div></div></div><div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"> <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open=false" onclick="window.location.href=window.location.href"> Close </button> </div></div></div></div>';
      } else {
        echo '<div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"> <div class="sm:flex sm:items-start"> <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"> <svg class="h-6 w-6 text-red-600" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path> </svg> </div><div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> <h3 class="text-lg leading-6 font-medium text-gray-500" id="modal-title"> Oops... Something went wrong </h3> <div class="mt-2"> <p class="text-sm text-gray-400"> Try again or contact Gigi </p></div></div></div><div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"> <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open=false" onclick="window.location.href=window.location.href"> Try Again </button> </div></div></div></div>';
      }
    } else {
      echo '<div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"> <div class="sm:flex sm:items-start"> <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"> <svg class="h-6 w-6 text-red-600" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path> </svg> </div><div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> <h3 class="text-lg leading-6 font-medium text-gray-500" id="modal-title"> Oops... Something went wrong </h3> <div class="mt-2"> <p class="text-sm text-gray-400"> Current password is incorrect. Try again or contact Gigi </p></div></div></div><div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"> <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open=false" onclick="window.location.href=window.location.href"> Try Again </button> </div></div></div></div>';
    }
  };
  if (isset($_POST['pfp-submit'])) {
    // Get file info, rename it to the users username and save it in /assets/images/pfp
    $fileName = $_FILES['pfp']['name'];
    $fileTmpName = $_FILES['pfp']['tmp_name'];
    $fileSize = $_FILES['pfp']['size'];
    $fileError = $_FILES['pfp']['error'];
    $fileType = $_FILES['pfp']['type'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize < 5999999) {
          $fileNameNew = $_SESSION['username'] . "." . $fileActualExt;
          $fileDestination = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/pfp/' . $fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);
          $sql = "UPDATE users SET pfp = '$fileNameNew' WHERE id = '$id'";
          $result = $conn->query($sql);
          if ($result) {
            echo '<div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"> <div class="sm:flex sm:items-start"> <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10"> <svg class="h-6 w-6 text-green-600" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path> </svg> </div><div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> <h3 class="text-lg leading-6 font-medium text-gray-500" id="modal-title"> Updated! </h3> <div class="mt-2"> <p class="text-sm text-gray-400"> Successfully updated your details! </p></div></div></div><div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"> <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open=false" onclick="window.location.href=window.location.href"> Close </button> </div></div></div></div>';
          } else {
            echo '<div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"> <div class="sm:flex sm:items-start"> <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"> <svg class="h-6 w-6 text-red-600" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path> </svg> </div><div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> <h3 class="text-lg leading-6 font-medium text-gray-500" id="modal-title"> Oops... Something went wrong </h3> <div class="mt-2"> <p class="text-sm text-gray-400"> Try again or contact Gigi </p></div></div></div><div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"> <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open=false" onclick="window.location.href=window.location.href"> Try Again </button> </div></div></div></div>';
          }
        } else {
          echo '<div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"> <div class="sm:flex sm:items-start"> <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"> <svg class="h-6 w-6 text-red-600" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path> </svg> </div><div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> <h3 class="text-lg leading-6 font-medium text-gray-500" id="modal-title"> Oops... Something went wrong </h3> <div class="mt-2"> <p class="text-sm text-gray-400"> Your file is too big! Try again or contact Gigi </p></div></div></div><div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"> <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open=false" onclick="window.location.href=window.location.href"> Try Again </button> </div></div></div></div>';
        }
      } else {
        echo '<div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"> <div class="sm:flex sm:items-start"> <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"> <svg class="h-6 w-6 text-red-600" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path> </svg> </div><div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> <h3 class="text-lg leading-6 font-medium text-gray-500" id="modal-title"> Oops... Something went wrong </h3> <div class="mt-2"> <p class="text-sm text-gray-400">There was an error uploading your file. Try again or contact Gigi with this error: <br><br> ' . $fileError . ' </p></div></div></div><div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"> <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open=false" onclick="window.location.href=window.location.href"> Try Again </button> </div></div></div></div>';
      }
    } else {
      echo '<div x-cloak x-data="{open: true}" @keydown.window.escape="open=false" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"> <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open=false" aria-hidden="true"> </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span> <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"> <div class="sm:flex sm:items-start"> <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"> <svg class="h-6 w-6 text-red-600" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path> </svg> </div><div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> <h3 class="text-lg leading-6 font-medium text-gray-500" id="modal-title"> Oops... Something went wrong </h3> <div class="mt-2"> <p class="text-sm text-gray-400">You can not upload files of this type. Try again or contact Gigi </p></div></div></div><div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"> <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open=false" onclick="window.location.href=window.location.href"> Try Again </button> </div></div></div></div>';
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth h-full">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NLH &mdash; Application Form</title>
  <link rel="stylesheet" href="/assets/css/master.css" />
  <script defer src="/assets/scripts/alpine.js"></script>
  <!-- Theme tag for safari 15-->
  <meta name="theme-color" content="#111827" />
  <meta content="#9d18ff" data-react-helmet="true" name="theme-color" />

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="/assets/images/favicon/site.webmanifest">

  <!-- Primary Meta Tags -->
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
  <div x-data="{ open: false }" @keydown.window.escape="open = false">
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div x-show="open" class="fixed inset-0 flex z-40" role="dialog" aria-modal="true">
      <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-600 bg-opacity-75" @click="open = false" aria-hidden="true">
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
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/dashboard/" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!--
              Heroicon name: outline/home

              Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
            -->
              <svg class="text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Dashboard
            </a>

            <a href="/profile/" class="bg-gray-900 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
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
        <?php
        $user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM users WHERE id = $user_id";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);

        $user_id = $user['id'];
        $username = $user['username'];
        $password = $user['password'];
        $pfp = $user['pfp'];

        if ($pfp == NULL) {
          $pfp_placeholder = '<svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24"><path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" /></svg>';
        } else {
          $pfp_placeholder = '<img class="h-full w-full" src="/assets/images/pfp/' . $pfp . '" alt="' . $username . '\'s PFP">';
        }
        ?>
        <div class="flex-shrink-0 flex bg-gray-700 p-4">
          <a href="/profile/" class="flex-shrink-0 group block">
            <div class="flex items-center">
              <div>
                <img class="inline-block h-9 w-9 rounded-full" src="/assets/images/pfp/<?= $pfp ?>" alt="<?= $username ?>'s PFP">
              </div>
              <div class="ml-3">
                <p class="text-base font-medium text-white"><?= $username ?></p>
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
          <div class="space-y-6 px-2 py-8 sm:px-2 md:px-4 lg:px-8 xl:px-16 2xl:px-32">
            <!-- Start Replace -->
            <div class="rounded-lg bg-gray-800 px-4 py-5 shadow sm:p-6 space-y-6">
              <div class="bg-gray-700 shadow px-4 py-5 sm:rounded-lg sm:p-6">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                  <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-200">Profile</h3>
                    <p class="mt-1 text-sm text-gray-400">This information will be displayed publicly so be careful what you share.</p>
                  </div>
                  <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="space-y-8 divide-y divide-none">
                      <form id="userNameForm" class="space-y-6" method="POST">
                        <div class="grid grid-cols-3 gap-6">
                          <div class="col-span-2 sm:col-span-1">
                            <label for="username" class="block text-sm font-medium text-gray-200"> Username </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                              <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm"> nlh.wtf/ </span>
                              <input type="text" name="username" id="username" autocomplete="username" required class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" <?= $disabled ?> placeholder="<?= $username ?>">
                            </div>
                          </div>
                        </div>
                        <div class="flex justify-start">
                          <button onclick="this.form.reportValidity() ? this.form.submit() : false;" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" <?= $disabled ?>><?= $disabledText ?></button>
                          <button onclick="this.form.reset()" type="button" class="ml-3 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                        </div>
                        <input type="hidden" name="submitForm" value="submitForm">
                      </form>


                      <form id="userPasswordForm" class="space-y-6" method="POST">
                        <div class="grid grid-cols-6 gap-6">
                          <div class="col-span-6 sm:col-span-3">
                            <label for="current-pass" class="block text-sm font-medium text-gray-200">Current Password</label>
                            <input type="password" name="current-pass" id="current-pass" autocomplete="current-password" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" <?= $disabled ?>>
                          </div>

                          <div class="col-span-6 sm:col-span-3">
                            <label for="new-pass" class="block text-sm font-medium text-gray-200">New Password</label>
                            <input type="password" name="new-pass" id="new-pass" autocomplete="new-password" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" <?= $disabled ?>>
                          </div>
                        </div>
                        <div class="flex justify-start">
                          <button onclick="this.form.reportValidity() ? this.form.submit() : false;" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" <?= $disabled ?>><?= $disabledText ?></button>
                          </button>
                          <button onclick="this.form.reset()" type="button" class="ml-3 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                        </div>
                        <input type="hidden" name="submitForm" value="submitForm">
                      </form>



                      <form id="userPfpForm" class="space-y-6" method="POST" enctype="multipart/form-data">
                        <div>
                          <label class="block text-sm font-medium text-gray-200"> Profile Picture </label>
                          <div class="mt-1 flex items-center space-x-5">
                            <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                              <?= $pfp_placeholder ?>
                            </span>
                            <label for="pfp" class="bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                              <span id="pfp-name">Choose</span>
                              <input required type="file" name="pfp" id="pfp" accept=".png,.jpg,.jpeg" class="w-1 -translate-x-6 opacity-0 absolute -z-10">
                            </label>
                          </div>
                        </div>
                        <div class="flex justify-start">
                          <button onclick="this.form.reportValidity() ? this.form.submit() : false;" type="submit" value="pfp-submit" name="pfp-submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                          <button onclick="resetPfp()" type="button" class="ml-3 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                        </div>
                        <input type="hidden" name="submitForm" value="submitForm">
                      </form>
                    </div>
                  </div>
                  <!-- /End replace -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>



  <script src="/assets/scripts/javascript.js" defer></script>
</body>

</html>