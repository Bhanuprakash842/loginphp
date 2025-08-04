<?php
include './config.php';
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Main</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Poppins");
    * {
      font-family: Poppins;
    }
  </style>
</head>

<body class="bg-gray-100 dark:bg-gray-900 min-h-screen">
  <header class="bg-white dark:bg-gray-800 shadow-md py-4 px-6 flex justify-between items-center">
    <h1 class="text-xl font-semibold text-gray-900 dark:text-white">Welcome</h1>
    <div class="relative" x-data="{ open: false }">
      <button @click="open = !open" class="w-10 h-10 rounded-full overflow-hidden border-2 border-gray-300">
        <img src="https://plus.unsplash.com/premium_photo-1738614647398-25bd0bfba344?q=80&w=870" alt="Profile" class="w-full h-full object-cover" />
      </button>

      <div x-show="open" @click.away="open = false"
        class="absolute right-0 mt-2 w-64 bg-white dark:bg-gray-800 rounded-lg shadow-lg pt-4 z-50 border border-gray-200 dark:border-gray-700">
        <div class="flex items-center px-4 mb-4">
          <img src="https://plus.unsplash.com/premium_photo-1738614647398-25bd0bfba344?q=80&w=870" alt="Profile" class="w-12 h-12 rounded-full mr-3">
          <div>
            <p class="font-semibold text-gray-800 dark:text-white"><?php echo $_SESSION['name']; ?></p>
          </div>
        </div>
        <hr class="border-gray-200 dark:border-gray-700" />
        <div>
          <a href="change-password.php" class="block text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-amber-600 py-2 px-4 rounded">Change Password</a>
          <a href="logout.php" class="block text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-red-600 py-2 px-4 rounded">Logout</a>
        </div>
      </div>
    </div>
  </header>
  <main class="flex justify-center items-center mt-20 px-4">
    <div class="bg-white dark:bg-gray-800 text-center shadow-md rounded-lg p-8 max-w-md w-full">
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
        <strong class="font-bold">Login Successful!</strong>
      </div>
      <p class="text-gray-700 dark:text-gray-300">Welcome to your Main page, <strong><?php echo $_SESSION['name']; ?></strong>.</p>
    </div>
  </main>

</body>
</html>
