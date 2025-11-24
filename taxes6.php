<?php
require_once 'auth-check.php';
require_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tax Planning Strategies & Resources | Financial Pro</title>
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
    <div class="bg-gradient-to-r from-yellow-500 to-orange-600 text-white p-8 rounded-2xl mb-8 relative">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-3xl font-bold">Tax Planning Strategies & Resources</h1>
          <p class="mt-2">Effective methods for minimizing liability and accessing support for global taxation</p>
        </div>
        <div class="bg-white/10 p-4 rounded-lg">
          <i class="fas fa-hand-holding-usd text-3xl"></i>
        </div>
      </div>
    </div>

    <!-- Module 10: Tax Planning Strategies -->
    <div class="space-y-8 mb-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
        <i class="fas fa-piggy-bank text-green-500 mr-2"></i>Module 10: Tax Planning Strategies
      </h2>

      <!-- Lesson 10.1: Minimizing Liability -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card mb-6">
        <h3 class="text-2xl font-semibold mb-4">
          <i class="fas fa-coins text-blue-500 mr-2"></i>Lesson 10.1: Minimizing Liability
        </h3>
        <p class="text-gray-700 text-lg mb-4">
          Strategic tax planning can significantly reduce your overall tax liability. This lesson covers a variety of methods to achieve this goal.
        </p>
        <ul class="list-disc pl-6 text-gray-700 text-lg mb-4">
          <li><strong>Retirement Contributions:</strong> Contributing to tax-advantaged retirement accounts can lower taxable income.</li>
          <li><strong>Savings and Investment Plans:</strong> Utilize tax-advantaged investment vehicles to grow assets with deferred taxes.</li>
          <li><strong>Charitable Donations:</strong> Donations to registered charities often qualify for tax deductions.</li>
          <li><strong>Tax-Loss Harvesting:</strong> Offset gains by realizing losses in investment portfolios.</li>
        </ul>
        <p class="text-gray-700 text-lg">
          A comprehensive review of your financial situation and long-term goals is essential for effective tax planning.
        </p>
      </section>

      <!-- Lesson 10.2: Year-Round Tips -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h3 class="text-2xl font-semibold mb-4">
          <i class="fas fa-calendar-alt text-purple-500 mr-2"></i>Lesson 10.2: Year-Round Tips
        </h3>
        <p class="text-gray-700 text-lg mb-4">
          Maintaining an active approach to tax planning throughout the year can prevent surprises during tax season.
        </p>
        <ul class="list-disc pl-6 text-gray-700 text-lg mb-4">
          <li><strong>Adjusting Withholdings:</strong> Regularly review and adjust your tax withholdings to match your income changes.</li>
          <li><strong>Estimated Tax Payments:</strong> For self-employed individuals or those with significant non-wage income, making quarterly payments can avoid penalties.</li>
          <li><strong>Staying Informed:</strong> Keep abreast of legal and policy changes that may affect your tax obligations.</li>
        </ul>
        <p class="text-gray-700 text-lg">
          Proactive tax management can lead to more efficient financial planning and better preparedness for any tax-related obligations.
        </p>
      </section>
    </div>

    <!-- Module 11: Resources and Assistance -->
    <div class="space-y-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
        <i class="fas fa-tools text-indigo-500 mr-2"></i>Module 11: Resources and Assistance
      </h2>

      <!-- Lesson 11.1: Tools and Help -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card mb-6">
        <h3 class="text-2xl font-semibold mb-4">
          <i class="fas fa-toolbox text-blue-500 mr-2"></i>Lesson 11.1: Tools and Help
        </h3>
        <p class="text-gray-700 text-lg mb-4">
          Accessing the right tools and professional help is crucial for efficient tax management.
        </p>
        <ul class="list-disc pl-6 text-gray-700 text-lg mb-4">
          <li><strong>Online Tax Portals:</strong> Many countries offer digital platforms for filing taxes and managing returns.</li>
          <li><strong>Government Support Services:</strong> Utilize resources provided by tax authorities for assistance and guidance.</li>
          <li><strong>Professional Assistance:</strong> Engage certified tax professionals to ensure compliance and optimize your tax strategy.</li>
        </ul>
        <p class="text-gray-700 text-lg">
          Leveraging these resources can simplify the tax process and enhance your overall financial planning.
        </p>
      </section>

      <!-- Lesson 11.2: Staying Updated -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h3 class="text-2xl font-semibold mb-4">
          <i class="fas fa-sync-alt text-green-500 mr-2"></i>Lesson 11.2: Staying Updated
        </h3>
        <p class="text-gray-700 text-lg mb-4">
          Tax laws and regulations can change frequently, making it vital to stay informed about the latest developments.
        </p>
        <ul class="list-disc pl-6 text-gray-700 text-lg mb-4">
          <li><strong>Official Tax Websites:</strong> Regularly check government tax websites for news and updates.</li>
          <li><strong>Financial News Outlets:</strong> Follow reputable sources for timely information on tax policy changes.</li>
          <li><strong>Consulting Professionals:</strong> Establish a relationship with tax advisors who can offer personalized advice based on the latest regulations.</li>
        </ul>
        <p class="text-gray-700 text-lg">
          Staying updated ensures that you can adjust your tax planning strategies accordingly and remain compliant with all requirements.
        </p>
      </section>
    </div>
    
    <!-- Navigation -->
    <div class="flex justify-between mt-8">
      <a href="taxes5.php" class="bg-gray-200 px-6 py-2 rounded-lg hover:bg-gray-300 transition inline-flex items-center">
        <i class="fas fa-arrow-left mr-2"></i>Previous Module
      </a>
      <a href="taxes7.php" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition inline-flex items-center">
        Next: Conclusion <i class="fas fa-arrow-right ml-2"></i>
      </a>
    </div>
  </div>
  
  <?php require_once 'chatbot.php'; ?>
</body>
</html>
