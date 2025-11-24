<?php
require_once 'auth-check.php';
require_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fundamentals of Macroeconomics | Financial Pro</title>
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
    <div class="bg-gradient-to-r from-blue-600 to-purple-700 text-white p-8 rounded-2xl mb-8 relative">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-3xl font-bold">Understanding Macroeconomics</h1>
          <p class="mt-2">Essential concepts shaping national and global economies</p>
        </div>
        <div class="bg-white/10 p-4 rounded-lg">
          <i class="fas fa-globe-europe text-3xl"></i>
        </div>
      </div>
    </div>
    
    <!-- Detailed Content -->
    <div class="space-y-8">
      <!-- Section 1: Basic Concepts -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-cube text-blue-500 mr-2"></i>Core Economic Indicators
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Macroeconomics examines economy-wide phenomena. Key indicators include:
        </p>
        <ul class="list-disc pl-6 text-gray-700 text-lg mb-4">
          <li><strong>GDP (Gross Domestic Product):</strong> Total value of goods/services produced</li>
          <li><strong>Inflation Rate:</strong> General price level increase over time</li>
          <li><strong>Unemployment Rate:</strong> Percentage of workforce without jobs</li>
          <li><strong>Balance of Trade:</strong> Difference between exports and imports</li>
        </ul>
        <p class="text-gray-700 text-lg">
          These indicators help governments and institutions formulate economic policies.
        </p>
      </section>

      <!-- Section 2: Economic Systems -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-balance-scale text-purple-500 mr-2"></i>Supply and Demand Dynamics
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          The fundamental forces driving market economies:
        </p>
        <div class="grid md:grid-cols-2 gap-6 mb-4">
          <div class="p-4 bg-blue-50 rounded-lg">
            <h3 class="font-semibold mb-2">Supply Factors</h3>
            <ul class="list-disc pl-4 text-sm">
              <li>Production costs</li>
              <li>Technology advances</li>
              <li>Number of suppliers</li>
            </ul>
          </div>
          <div class="p-4 bg-purple-50 rounded-lg">
            <h3 class="font-semibold mb-2">Demand Factors</h3>
            <ul class="list-disc pl-4 text-sm">
              <li>Consumer income</li>
              <li>Population changes</li>
              <li>Price expectations</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Section 3: Fiscal & Monetary Policy -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-landmark text-green-500 mr-2"></i>Government Economic Tools
        </h2>
        <div class="grid md:grid-cols-2 gap-6">
          <div>
            <h3 class="text-xl font-semibold mb-2">Fiscal Policy</h3>
            <ul class="list-disc pl-6 text-gray-700 text-lg">
              <li>Government spending</li>
              <li>Taxation strategies</li>
              <li>Public debt management</li>
            </ul>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-2">Monetary Policy</h3>
            <ul class="list-disc pl-6 text-gray-700 text-lg">
              <li>Interest rates</li>
              <li>Money supply control</li>
              <li>Reserve requirements</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Section 4: Economic Cycles -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-chart-wave text-red-500 mr-2"></i>Business Cycles
        </h2>
        <div class="chart-container">
          <canvas id="businessCycleChart"></canvas>
        </div>
        <p class="text-gray-700 text-lg mt-4">
          Typical phases of economic expansion and contraction over time
        </p>
      </section>

      <!-- Section 5: International Trade -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200 concept-card">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-handshake text-orange-500 mr-2"></i>Global Economic Relations
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Key aspects of international economics:
        </p>
        <ul class="list-disc pl-6 text-gray-700 text-lg">
          <li>Comparative advantage theory</li>
          <li>Exchange rate mechanisms</li>
          <li>Trade agreements (e.g., WTO, NAFTA)</li>
          <li>Global financial institutions (IMF, World Bank)</li>
        </ul>
      </section>
    </div>
    
    <!-- Navigation -->
    <div class="flex justify-between mt-8">
      <a href="microeconomics.php" class="bg-gray-200 px-6 py-2 rounded-lg hover:bg-gray-300 transition inline-flex items-center">
        <i class="fas fa-arrow-left mr-2"></i>Previous: Microeconomics
      </a>
      <a href="economic-policy.php" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition inline-flex items-center">
        Next: Economic Policy <i class="fas fa-arrow-right ml-2"></i>
      </a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Business Cycle Chart
    const cycleCtx = document.getElementById('businessCycleChart').getContext('2d');
    new Chart(cycleCtx, {
      type: 'line',
      data: {
        labels: ['2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
        datasets: [{
          label: 'GDP Growth Rate (%)',
          data: [2.9, 1.6, 2.4, 2.9, 2.3, -3.1, 5.9, 2.1, 2.5],
          borderColor: '#3B82F6',
          tension: 0.4,
          fill: false
        }]
      },
      options: {
        responsive: true,
        plugins: {
          title: {
            display: true,
            text: 'Typical Business Cycle Pattern'
          }
        },
        scales: {
          y: {
            title: { display: true, text: 'GDP Growth %' }
          }
        }
      }
    });
  </script>

  <?php require_once 'chatbot.php'; ?>
</body>
</html>