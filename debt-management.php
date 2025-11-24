<?php
require_once 'auth-check.php';
require_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Debt Management and Credit Optimization | Financial Pro</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
      .section-card {
          transition: transform 0.2s, box-shadow 0.2s;
      }
      .section-card:hover {
          transform: translateY(-3px);
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
      }

  </style>
</head>
<body class="bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header -->
    <div class="bg-gradient-to-r from-purple-600 to-indigo-800 text-white p-8 rounded-2xl mb-8 relative">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-3xl font-bold">Debt Management and Credit Optimization</h1>
          <p class="mt-2">Strategies to manage debt and enhance your credit health</p>
        </div>
        <div class="bg-white/10 p-4 rounded-lg">
          <i class="fas fa-credit-card text-3xl"></i>
        </div>
      </div>
    </div>
    
    <!-- Detailed Content -->
    <div class="space-y-8">
      <!-- Section 1: Understanding Types of Debt -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-list-alt text-yellow-500 mr-2"></i>Understanding Types of Debt
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Debt comes in many forms, and understanding its nature is crucial for effective management. Common types include:
        </p>
        <ul class="list-disc pl-6 text-gray-700 text-lg mb-4">
          <li><strong>Revolving Debt:</strong> Credit cards and lines of credit with flexible borrowing limits.</li>
          <li><strong>Installment Debt:</strong> Fixed loans such as mortgages, auto loans, and personal loans.</li>
          <li><strong>Student Loans:</strong> Debt incurred for education, often featuring specialized repayment terms.</li>
        </ul>
        <p class="text-gray-700 text-lg">
          In both the United States and Europe, high levels of debt have been linked to financial instability and reduced economic well-being.
        </p>
      </section>
      
      <!-- Section 2: Understanding Credit Scores and Reports -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-chart-line text-green-500 mr-2"></i>Understanding Credit Scores and Reports
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Your credit score is a numerical representation of your creditworthiness, influenced by factors such as payment history, credit utilization, and the length of your credit history.
        </p>
        <p class="text-gray-700 text-lg mb-4">
          Regularly reviewing your credit report helps identify inaccuracies and reveals areas for improvement. While the U.S. widely uses FICO scores, European countries often adopt localized credit scoring systems that reflect regional financial environments.
        </p>
      </section>
      
      <!-- Section 3: Debt Reduction Strategies -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-arrow-down text-blue-500 mr-2"></i>Debt Reduction Strategies
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Reducing debt requires a disciplined approach. Effective strategies include:
        </p>
        <ul class="list-disc pl-6 text-gray-700 text-lg mb-4">
          <li><strong>The Debt Avalanche Method:</strong> Focus on paying off debts with the highest interest rates first to minimize overall interest costs.</li>
          <li><strong>The Debt Snowball Method:</strong> Start by paying off the smallest debts first to build momentum and boost confidence.</li>
          <li><strong>Debt Consolidation:</strong> Combine multiple debts into a single, lower-interest loan for easier management.</li>
          <li><strong>Refinancing:</strong> Renegotiate loan terms to secure lower interest rates or extended repayment periods.</li>
        </ul>
        <p class="text-gray-700 text-lg">
          Research indicates that households implementing these strategies can reduce their overall debt by 15-25% within a year.
        </p>
      </section>
      
      <!-- Section 4: Credit Optimization Techniques -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-thumbs-up text-purple-500 mr-2"></i>Credit Optimization Techniques
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Improving your credit health is as important as reducing debt. Key techniques include:
        </p>
        <ul class="list-disc pl-6 text-gray-700 text-lg mb-4">
          <li>Make all payments on time to build a positive credit history.</li>
          <li>Maintain a credit utilization ratio below 30% to show responsible credit use.</li>
          <li>Regularly check your credit report for errors and dispute inaccuracies.</li>
          <li>Develop a diverse credit portfolio by responsibly using various types of credit.</li>
        </ul>
        <p class="text-gray-700 text-lg">
          Consistent efforts in credit optimization have been shown to improve credit scores by up to 100 points in both American and European markets.
        </p>
      </section>

        <!-- Section 4a: Managing Debt vs. Not Managing Debt -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
      <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-chart-line text-green-500 mr-2"></i>Understanding Credit Scores and Reports
        </h2>
  <p>This graph illustrates the projected change in debt levels over six months. In the scenario where debt is actively managed, debt decreases over time. Without active management, debt increases steadily.</p>
  <div class="chart-container" style="height: 400px; width: 100%; max-width: 800px; margin: 0 auto; margin-top: 20px; margin-bottom: 20px; padding: 20px; border: 1px solid #e5e7eb; border-radius: 8px;">
    <canvas id="debtChart"></canvas>
  </div>
  </section>


      <!-- Section 5: Case Studies and Real-Life Examples -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-user-friends text-orange-500 mr-2"></i>Case Studies and Real-Life Examples
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Consider the case of Sarah, a 40-year-old professional in the U.S., who reduced her debt by 30% using a combination of the avalanche method and debt consolidation. Similarly, a European family improved their credit score by rigorously monitoring their credit utilization and ensuring timely payments.
        </p>
      </section>
      
      <!-- Section 6: Conclusion and Recommendations -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-check-circle text-green-500 mr-2"></i>Conclusion and Recommendations
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Effective debt management and credit optimization are essential for long-term financial stability. By understanding the different types of debt, actively monitoring and improving your credit, and employing disciplined reduction strategies, you can reclaim control of your financial future.
        </p>
        <ul class="list-disc pl-6 text-gray-700 text-lg">
          <li>Regularly review your credit report and score.</li>
          <li>Choose a debt reduction strategy that suits your financial situation.</li>
          <li>Seek professional advice if needed to manage large or complex debts.</li>
        </ul>
        <p class="text-gray-700 text-lg mt-4">
          Taking decisive action today paves the way for a healthier financial tomorrow, marked by reduced stress and increased opportunities for wealth building.
        </p>
      </section>
    </div>
    
    <!-- Navigation -->
    <div class="flex justify-between mt-8">
      <a href="budgeting-and-expense-management.php" class="bg-gray-200 px-6 py-2 rounded-lg hover:bg-gray-300 transition inline-flex items-center">
        <i class="fas fa-arrow-left mr-2"></i>Back
      </a>
      <a href="investment-strategies.php" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition inline-flex items-center">
        Next Module: Investment Strategies <i class="fas fa-arrow-right ml-2"></i>
      </a>
    </div>
  </div>
  
  <?php require_once 'chatbot.php'; ?>

  <script>
    const ctx = document.getElementById('debtChart').getContext('2d');
    const debtChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Month 1', 'Month 2', 'Month 3', 'Month 4', 'Month 5', 'Month 6'],
        datasets: [
          {
            label: 'Managing Debt',
            data: [5000, 4500, 4000, 3500, 3000, 2500],
            borderColor: 'green',
            backgroundColor: 'rgba(0, 128, 0, 0.1)',
            fill: true,
            tension: 0.1
          },
          {
            label: 'Not Managing Debt',
            data: [5000, 5200, 5400, 5600, 5800, 6000],
            borderColor: 'red',
            backgroundColor: 'rgba(255, 0, 0, 0.1)',
            fill: true,
            tension: 0.1
          }
        ]
      },
      options: {
        scales: {
          y: {
            beginAtZero: false,
            title: {
              display: true,
              text: 'Debt Level (in $)'
            }
          },
          x: {
            title: {
              display: true,
              text: 'Time (Months)'
            }
          }
        },
        plugins: {
          title: {
            display: true,
            text: 'Comparison: Managing Debt vs. Not Managing Debt'
          }
        }
      }
    });
  </script>
</body>
</html>
