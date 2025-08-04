<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Change Password</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Poppins");
    * {
      font-family: Poppins;
    }
  </style>
</head>

<body class="bg-gray-100 dark:bg-gray-900 min-h-screen flex items-center justify-center">

  <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8 max-w-md w-full">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-900 dark:text-white">Change Password</h2>

    <form action="loading.php" method="post">
      <div class="mb-4">
        <label class="block text-sm text-gray-700 dark:text-gray-300 mb-1">New Password</label>
        <input type="password" name="new_password" required
          class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white" />
      </div>
      <div class="mb-6">
        <label class="block text-sm text-gray-700 dark:text-gray-300 mb-1">Re-enter New Password</label>
        <input type="password" name="re_password" required
          class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white" />
      </div>
      <button type="submit" name="change_password"
        class="w-full bg-amber-600 hover:bg-amber-700 text-white py-2.5 rounded-lg font-medium">
        Change Password
      </button>
    </form>
  </div>

</body>
</html>
