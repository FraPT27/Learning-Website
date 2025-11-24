<?php
require_once 'auth-check.php';
require_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Special Considerations in Global Taxation | Financial Pro</title>
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
    <div class="bg-gradient-to-r from-red-600 to-orange-600 text-white p-8 rounded-2xl mb-8 relative">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-3xl font-bold">Special Considerations in Global Taxation</h1>
          <p class="mt-2">Understanding self-employment, investments, and key life events in taxation</p>
        </div>
        <div class="bg-white/10 p-4 rounded-lg">
          <i class="fas fa-user-cog text-3xl"></i>
        </div>
      </div>
    </div>

    <!-- Module 6: Special Considerations -->
    <div class="space-y-8">
      <!-- Lesson 6.1: Self-Employment -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-briefcase text-blue-500 mr-2"></i>Lesson 6.1: Self-Employment
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Self-employment introduces unique tax obligations and opportunities. Taxpayers engaged in independent business activities must understand the specific rules and processes applicable to self-employment income.
        </p>
        <h3 class="text-xl font-semibold mb-2">Business Tax Obligations</h3>
        <p class="text-gray-700 text-lg mb-4">
          Self-employed individuals are generally required to report all income from their business activities. They may also be subject to additional self-employment taxes, which fund social security and healthcare systems. It is essential to maintain accurate records of all business transactions and expenses.
        </p>
        <h3 class="text-xl font-semibold mb-2">Quarterly Payments and Deductions</h3>
        <p class="text-gray-700 text-lg">
          Many jurisdictions require self-employed taxpayers to make quarterly estimated tax payments. Moreover, self-employed individuals can deduct a variety of business-related expenses, including office supplies, travel, and home office expenses, thereby reducing overall taxable income.
        </p>
      </section>

      <!-- Lesson 6.2: Investments -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-chart-line text-green-500 mr-2"></i>Lesson 6.2: Investments
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Investment income is subject to its own set of tax rules and can include capital gains, dividends, and interest income. Tax regulations in this area are designed to balance the promotion of investment with the need for revenue.
        </p>
        <h3 class="text-xl font-semibold mb-2">Capital Gains and Dividends</h3>
        <p class="text-gray-700 text-lg mb-4">
          Capital gains taxes are applied to the profit earned from the sale of investments, with rates that may differ based on the duration of the investment (short-term vs. long-term). Dividend income is typically taxed at rates that reflect its nature and, in some cases, benefits from preferential treatment.
        </p>
        <h3 class="text-xl font-semibold mb-2">Tax-Advantaged Accounts</h3>
        <p class="text-gray-700 text-lg">
          Many countries offer tax-advantaged savings and investment accounts, such as retirement pensions or education savings plans. Contributions to these accounts may reduce taxable income, while investments held within them often grow tax-deferred or even tax-free.
        </p>
      </section>

      <!-- Lesson 6.3: Life Events -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-heart text-purple-500 mr-2"></i>Lesson 6.3: Life Events
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Significant life events can have a profound impact on your tax liabilities. Adjustments may be required to account for changes in marital status, dependents, property ownership, and other personal circumstances.
        </p>
        <h3 class="text-xl font-semibold mb-2">Marriage and Family Changes</h3>
        <p class="text-gray-700 text-lg mb-4">
          Marriage, divorce, and the addition of dependents often require a change in filing status and may lead to adjustments in deductions and credits. Such changes can either reduce or increase your tax burden depending on the specifics of your situation.
        </p>
        <h3 class="text-xl font-semibold mb-2">Homeownership and Relocation</h3>
        <p class="text-gray-700 text-lg mb-4">
          Purchasing a home can offer tax deductions related to mortgage interest and property taxes. Similarly, relocation—whether for work or personal reasons—can trigger changes in local tax obligations, making it essential to understand the implications in both your previous and new locations.
        </p>
        <h3 class="text-xl font-semibold mb-2">Inheritance and Other Financial Events</h3>
        <p class="text-gray-700 text-lg">
          Inheritance and other significant financial events may result in unique tax consequences. Proper planning and consultation with a tax professional can help manage these situations effectively.
        </p>
      </section>
    </div>
    
    <!-- Navigation -->
    <div class="flex justify-between mt-8">
      <a href="taxes3.php" class="bg-gray-200 px-6 py-2 rounded-lg hover:bg-gray-300 transition inline-flex items-center">
        <i class="fas fa-arrow-left mr-2"></i>Previous Module
      </a>
      <a href="taxes5.php" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition inline-flex items-center">
        Next Module <i class="fas fa-arrow-right ml-2"></i>
      </a>
    </div>
  </div>

  <?php require_once 'chatbot.php'; ?>
</body>
</html>
