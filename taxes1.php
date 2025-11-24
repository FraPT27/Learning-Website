<?php
require_once 'auth-check.php';
require_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Introduction to Global Taxation | Financial Pro</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
      .concept-card {
          transition: transform 0.2s, box-shadow 0.2s;
      }
      .concept-card:hover {
          transform: translateY(-3px);
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
      }
      .chart-container {
          position: relative;
          height: 400px;
          width: 100%;
      }
  </style>
</head>
<body class="bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header -->
    <div class="bg-gradient-to-r from-green-600 to-blue-700 text-white p-8 rounded-2xl mb-8 relative">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-3xl font-bold">Introduction to Global Taxation</h1>
          <p class="mt-2">Exploring the fundamentals, history, and purpose of taxes worldwide</p>
        </div>
        <div class="bg-white/10 p-4 rounded-lg">
          <i class="fas fa-landmark-alt text-3xl"></i>
        </div>
      </div>
    </div>
    
    <!-- Detailed Content -->
    <div class="space-y-8">
      <!-- Section 1: What Are Taxes? -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-info-circle text-green-500 mr-2"></i>Lesson 1.1: What Are Taxes?
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Taxes are compulsory financial charges imposed by governments on individuals, businesses, and various economic transactions. They are fundamental in generating revenue for public expenditures and are critical to the functioning of modern societies.
        </p>
        <h3 class="text-xl font-semibold mb-2">Definition and Purpose</h3>
        <p class="text-gray-700 text-lg mb-4">
          The primary purpose of taxation is to provide governments with the necessary funds to finance public goods and services such as healthcare, education, defense, transportation, and welfare programs. Taxes also play a role in wealth redistribution and in incentivizing or disincentivizing certain economic behaviors.
        </p>
        <h3 class="text-xl font-semibold mb-2">Historical Context and Evolution</h3>
        <p class="text-gray-700 text-lg">
          The origins of taxation date back to ancient civilizations where simple tributes were collected to support rulers and military campaigns. Over time, as societies evolved, so did the tax systems. From the flat levies of early empires to the complex, multi-tiered systems in place today, taxation has grown in sophistication to reflect modern economic realities and social values. This evolution highlights the changing priorities of governments and the dynamic nature of public finance.
        </p>
      </section>
      
      <!-- Section 2: Types of Taxes -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-layer-group text-blue-500 mr-2"></i>Lesson 1.2: Types of Taxes
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Taxation systems vary widely around the globe. Broadly, taxes can be classified into two main categories, each serving different governmental functions and impacting various segments of society.
        </p>
        <h3 class="text-xl font-semibold mb-2">National Taxes</h3>
        <ul class="list-disc pl-6 text-gray-700 text-lg mb-4">
          <li><strong>Income Tax:</strong> Levied on the earnings of individuals and corporations to finance central government functions.</li>
          <li><strong>Payroll Tax:</strong> Deductions from wages that fund social security, healthcare, and other social benefits.</li>
          <li><strong>Estate and Inheritance Taxes:</strong> Taxes on assets transferred from one generation to the next.</li>
          <li><strong>Gift Taxes:</strong> Applied to transfers of wealth without direct compensation.</li>
        </ul>
        <h3 class="text-xl font-semibold mb-2">Regional/Local Taxes</h3>
        <ul class="list-disc pl-6 text-gray-700 text-lg mb-4">
          <li><strong>Sales and Consumption Taxes:</strong> Imposed on goods and services at the point of sale, funding local public services.</li>
          <li><strong>Property Taxes:</strong> Based on the value of owned real estate, supporting community and infrastructural projects.</li>
          <li><strong>Excise Taxes:</strong> Levied on specific goods, such as tobacco, alcohol, and fuel, often used to discourage certain consumption behaviors.</li>
        </ul>
        <h3 class="text-xl font-semibold mb-2">Tax Structures</h3>
        <p class="text-gray-700 text-lg">
          Tax systems may also be characterized by their structure: <strong>progressive</strong> (increasing tax rates with higher income levels), <strong>regressive</strong> (a higher relative burden on lower incomes), or <strong>proportional</strong> (a flat tax rate regardless of income). Each model has unique implications for economic equity and efficiency.
        </p>
      </section>
    </div>
    
    <!-- Navigation -->
    <div class="flex justify-between mt-8">
      <a href="taxes0.php" class="bg-gray-200 px-6 py-2 rounded-lg hover:bg-gray-300 transition inline-flex items-center">
        <i class="fas fa-arrow-left mr-2"></i>Previous Module
      </a>
      <a href="taxes2.php" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition inline-flex items-center">
        Next Module <i class="fas fa-arrow-right ml-2"></i>
      </a>
    </div>
  </div>

  <?php require_once 'chatbot.php'; ?>
</body>
</html>
