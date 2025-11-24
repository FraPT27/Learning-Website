<?php
require_once 'auth-check.php';
require_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>International Taxation & Compliance | Financial Pro</title>
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
    <div class="bg-gradient-to-r from-teal-600 to-blue-700 text-white p-8 rounded-2xl mb-8 relative">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-3xl font-bold">International Taxation & Compliance</h1>
          <p class="mt-2">Navigating global tax rules and ethical practices in taxation</p>
        </div>
        <div class="bg-white/10 p-4 rounded-lg">
          <i class="fas fa-globe text-3xl"></i>
        </div>
      </div>
    </div>
    
    <!-- Module 8: International Taxation -->
    <div class="space-y-8 mb-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
        <i class="fas fa-flag-usa text-blue-500 mr-2"></i>Module 8: International Taxation
      </h2>
      
      <!-- Lesson 8.1: Foreign Income and Reporting -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h3 class="text-2xl font-semibold mb-4">
          <i class="fas fa-globe-americas text-green-500 mr-2"></i>Lesson 8.1: Foreign Income and Reporting
        </h3>
        <p class="text-gray-700 text-lg mb-4">
          Global taxation requires that individuals and corporations with foreign income comply with additional reporting obligations and tax regulations. These rules help prevent tax evasion and promote transparency across borders.
        </p>
        <h4 class="text-xl font-semibold mb-2">Reporting Requirements</h4>
        <p class="text-gray-700 text-lg mb-4">
          Taxpayers must disclose income earned from foreign sources, including employment, investments, and business operations. Many countries require detailed reports of foreign bank accounts and assets, often under frameworks such as the Common Reporting Standard (CRS).
        </p>
        <h4 class="text-xl font-semibold mb-2">Double Taxation and Tax Treaties</h4>
        <p class="text-gray-700 text-lg mb-4">
          To avoid being taxed twice on the same income, nations enter into bilateral tax treaties. These treaties outline which country has the primary right to tax different types of income and may provide relief through credits or exemptions.
        </p>
        <h4 class="text-xl font-semibold mb-2">Expatriation and Special Considerations</h4>
        <p class="text-gray-700 text-lg">
          Individuals who renounce their citizenship or change their tax residence may be subject to special expatriation taxes or exit levies. It is important to plan ahead and consult with a tax professional when considering such moves.
        </p>
      </section>
    </div>
    
    <!-- Module 9: Compliance and Ethics -->
    <div class="space-y-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
        <i class="fas fa-balance-scale text-purple-500 mr-2"></i>Module 9: Compliance and Ethics
      </h2>
      
      <!-- Lesson 9.1: Avoiding Penalties -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card mb-6">
        <h3 class="text-2xl font-semibold mb-4">
          <i class="fas fa-exclamation-triangle text-red-500 mr-2"></i>Lesson 9.1: Avoiding Penalties
        </h3>
        <p class="text-gray-700 text-lg mb-4">
          Maintaining compliance with tax laws is crucial to avoid severe penalties. This involves timely filing of returns, accurate calculations, and keeping detailed records of all transactions.
        </p>
        <h4 class="text-xl font-semibold mb-2">Timely Filing and Payment</h4>
        <p class="text-gray-700 text-lg mb-4">
          Filing your taxes on time and ensuring all payments are made promptly can prevent interest charges and fines. Many tax authorities impose penalties for late submissions or underpayment.
        </p>
        <h4 class="text-xl font-semibold mb-2">Recordkeeping and Documentation</h4>
        <p class="text-gray-700 text-lg">
          Keeping comprehensive records for the period recommended by local regulations (often three years or more) can help resolve disputes during audits and serve as evidence of compliance.
        </p>
      </section>
      
      <!-- Lesson 9.2: Ethical Practices -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h3 class="text-2xl font-semibold mb-4">
          <i class="fas fa-handshake text-indigo-500 mr-2"></i>Lesson 9.2: Ethical Practices
        </h3>
        <p class="text-gray-700 text-lg mb-4">
          Ethical taxation practices are fundamental for ensuring public trust and the proper functioning of government institutions. Ethical behavior includes accurate reporting, honest disclosure of financial information, and adherence to both the letter and spirit of the law.
        </p>
        <h4 class="text-xl font-semibold mb-2">Honesty and Transparency</h4>
        <p class="text-gray-700 text-lg mb-4">
          Honesty in financial reporting is critical. Misreporting or deliberately concealing information can lead to significant penalties and legal consequences. Transparency helps build trust between taxpayers and authorities.
        </p>
        <h4 class="text-xl font-semibold mb-2">Professional Responsibility</h4>
        <p class="text-gray-700 text-lg">
          Tax professionals have a responsibility to advise their clients accurately and ethically. Upholding these standards not only ensures compliance but also promotes a fair tax system that benefits society as a whole.
        </p>
      </section>
    </div>
    
    <!-- Navigation -->
    <div class="flex justify-between mt-8">
      <a href="taxes4.php" class="bg-gray-200 px-6 py-2 rounded-lg hover:bg-gray-300 transition inline-flex items-center">
        <i class="fas fa-arrow-left mr-2"></i>Previous Module
      </a>
      <a href="taxes6.php" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition inline-flex items-center">
        Next Module <i class="fas fa-arrow-right ml-2"></i>
      </a>
    </div>
  </div>
  
  <?php require_once 'chatbot.php'; ?>
</body>
</html>
