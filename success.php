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
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
    * {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="bg-gray-100 min-h-screen">

  <main class="max-w-3xl mx-auto mt-10 px-4">
    <div class="bg-white shadow-lg rounded-lg p-6">
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
      <strong class="font-bold">Login Successful !!!</strong>
    </div>
      <div class="flex justify-center">
        <a href="logout.php" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition">Logout</a>
      </div>
    </div>

  </main>

</body>

</html>
