<?php
require_once 'auth-check.php';
require_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>National Income Tax Fundamentals | Financial Pro</title>
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
  </style>
</head>
<body class="bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header -->
    <div class="bg-gradient-to-r from-purple-600 to-blue-700 text-white p-8 rounded-2xl mb-8 relative">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-3xl font-bold">National Income Tax Fundamentals</h1>
          <p class="mt-2">Delving into key principles and processes of global income taxation</p>
        </div>
        <div class="bg-white/10 p-4 rounded-lg">
          <i class="fas fa-file-invoice-dollar text-3xl"></i>
        </div>
      </div>
    </div>
    
    <!-- Detailed Content -->
    <div class="space-y-8">
      <!-- Section 1: Key Concepts -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-lightbulb text-yellow-500 mr-2"></i>Lesson 2.1: Key Concepts
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          This lesson introduces the fundamental components that form the basis of income taxation across different nations.
        </p>
        <h3 class="text-xl font-semibold mb-2">Taxable Income</h3>
        <p class="text-gray-700 text-lg mb-4">
          Taxable income is the portion of an individual's or corporation's income that is subject to taxation after accounting for deductions, exemptions, and exclusions. It is determined by subtracting allowable expenses from gross income.
        </p>
        <h3 class="text-xl font-semibold mb-2">Deductions, Credits, and Exemptions</h3>
        <p class="text-gray-700 text-lg mb-4">
          <strong>Deductions</strong> reduce your gross income by accounting for certain expenses such as business costs, education, or healthcare expenses. <strong>Tax Credits</strong> provide a direct reduction in the tax liability, often incentivizing behaviors like renewable energy usage or higher education. <strong>Exemptions</strong> allow taxpayers to reduce their taxable income further, often provided for dependents or personal allowances. The specifics of these provisions vary by jurisdiction, reflecting different social and economic policies.
        </p>
        <h3 class="text-xl font-semibold mb-2">Role of National Tax Authorities</h3>
        <p class="text-gray-700 text-lg">
          National tax authorities are responsible for administering tax laws, collecting revenue, and issuing standardized tax forms. These forms, while differing in design and complexity across countries, serve the primary purpose of ensuring compliance and enabling taxpayers to accurately report their income and claim deductions or credits.
        </p>
      </section>

      <!-- Section 2: Filing Statuses -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-user-check text-green-500 mr-2"></i>Lesson 2.2: Filing Statuses
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Filing statuses are categories that determine the tax rate and the amount of standard deductions a taxpayer is eligible for. They are designed to reflect different household and income situations.
        </p>
        <h3 class="text-xl font-semibold mb-2">Common Filing Categories</h3>
        <ul class="list-disc pl-6 text-gray-700 text-lg mb-4">
          <li><strong>Individual:</strong> For single taxpayers without dependents or when separate filing is preferred.</li>
          <li><strong>Joint Filing:</strong> Typically available to married couples who choose to combine their incomes for tax purposes.</li>
          <li><strong>Family or Head-of-Household:</strong> Designed for single parents or individuals supporting dependents, often providing favorable deductions.</li>
        </ul>
        <p class="text-gray-700 text-lg">
          The choice of filing status can significantly influence tax liability, as it determines not only the applicable tax brackets but also the credits and deductions available to the taxpayer.
        </p>
      </section>

      <!-- Section 3: Tax Brackets and Calculations -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-calculator text-blue-500 mr-2"></i>Lesson 2.3: Tax Brackets and Calculations
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Tax brackets are used in progressive tax systems to apply increasing tax rates to higher income levels. This lesson explains how these brackets are structured and how to compute tax liabilities.
        </p>
        <h3 class="text-xl font-semibold mb-2">Understanding Progressive Taxation</h3>
        <p class="text-gray-700 text-lg mb-4">
          In a progressive tax system, income is divided into ranges, with each range taxed at a specific rate. As income increases, portions of it fall into higher tax brackets, meaning that only the income within each bracket is taxed at that bracket’s rate. This structure is intended to ensure that those with higher incomes contribute a larger share of their earnings in taxes.
        </p>
        <h3 class="text-xl font-semibold mb-2">Calculating Tax Liability</h3>
        <p class="text-gray-700 text-lg">
          To calculate your total tax liability, first determine your taxable income, then apply the tax rate for each bracket to the corresponding portion of your income. Finally, subtract any eligible tax credits. It is crucial to consult official tax publications or government websites for the most current tax brackets and rates, as these figures can change with new fiscal policies.
        </p>
      </section>
    </div>
    
    <!-- Navigation -->
    <div class="flex justify-between mt-8">
      <a href="taxes1.php" class="bg-gray-200 px-6 py-2 rounded-lg hover:bg-gray-300 transition inline-flex items-center">
        <i class="fas fa-arrow-left mr-2"></i>Previous Module
      </a>
      <a href="taxes3.php" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition inline-flex items-center">
        Next Module <i class="fas fa-arrow-right ml-2"></i>
      </a>
    </div>
  </div>

  <?php require_once 'chatbot.php'; ?>
</body>
</html>
