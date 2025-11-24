<?php
require_once 'auth-check.php';
require_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Module Summary | Financial Pro</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
      .summary-card {
          transition: transform 0.2s, box-shadow 0.2s;
      }
      .summary-card:hover {
          transform: translateY(-3px);
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
      }
  </style>
</head>
<body class="bg-gray-50">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Header -->
    <div class="bg-gradient-to-r from-indigo-600 to-purple-700 text-white p-8 rounded-2xl mb-8 text-center">
      <h1 class="text-4xl font-bold">Module Summary</h1>
      <p class="mt-4 text-lg">Tax Planning Strategies & Resources</p>
    </div>

    <!-- Summary Content -->
    <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 summary-card mb-8">
      <h2 class="text-3xl font-semibold mb-4">Overview</h2>
      <p class="text-gray-700 text-lg mb-4">
        In this module, we explored essential strategies for optimizing your tax position. We began by examining methods to minimize tax liability, including retirement contributions, strategic investment planning, and charitable giving.
      </p>
      <p class="text-gray-700 text-lg mb-4">
        We also provided practical, year-round tips such as adjusting withholdings and making timely estimated tax payments to help you stay ahead of your tax obligations.
      </p>
      <p class="text-gray-700 text-lg mb-4">
        Additionally, the module covered a range of resources and support options—from online tax portals and government assistance programs to professional advisory services—that empower you to navigate global taxation effectively.
      </p>
      <p class="text-gray-700 text-lg">
        By applying these strategies and leveraging the available tools, you can manage your tax affairs confidently and efficiently.
      </p>
    </section>

    <!-- Dashboard Button -->
    <div class="flex justify-center">
      <a href="dashboard.php" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition inline-flex items-center">
        <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
      </a>
    </div>
  </div>

  <?php require_once 'chatbot.php'; ?>
</body>
</html>
