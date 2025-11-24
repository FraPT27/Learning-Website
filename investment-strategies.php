<?php
require_once 'auth-check.php';
require_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Investment Strategies and Wealth Building | Financial Pro</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
      .section-card {
          transition: transform 0.2s, box-shadow 0.2s;
      }
      .section-card:hover {
          transform: translateY(-3px);
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
      }
      /* Optional: Style the chart container */
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
    <div class="bg-gradient-to-r from-green-600 to-teal-700 text-white p-8 rounded-2xl mb-8 relative">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-3xl font-bold">Investment Strategies and Wealth Building</h1>
          <p class="mt-2">Unlock the potential of your money with smart investing techniques</p>
        </div>
        <div class="bg-white/10 p-4 rounded-lg">
          <i class="fas fa-hand-holding-usd text-3xl"></i>
        </div>
      </div>
    </div>
    
    <!-- Detailed Content -->
    <div class="space-y-8">
      <!-- Section 1: Introduction to Investment Strategies -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-lightbulb text-yellow-500 mr-2"></i>Introduction to Investment Strategies
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Investing is the process of allocating money with the expectation of generating a profit or income. It involves balancing risks with potential rewards and requires a long‑term perspective.
        </p>
        <p class="text-gray-700 text-lg">
          Whether you're planning to grow your savings or secure a comfortable retirement, understanding the fundamentals of investment is crucial. Studies in both the U.S. and Europe show that well‑structured investment plans can significantly improve long‑term financial security.
        </p>
      </section>
      
      <!-- Section 2: Types of Investment Vehicles -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-layer-group text-green-500 mr-2"></i>Types of Investment Vehicles
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          There is a wide range of investment vehicles available, each offering different risk and return profiles:
        </p>
        <ul class="list-disc pl-6 text-gray-700 text-lg mb-4">
          <li><strong>Stocks:</strong> Ownership shares in a company that offer high growth potential but come with market volatility.</li>
          <li><strong>Bonds:</strong> Debt securities issued by corporations or governments that provide regular interest income with lower risk.</li>
          <li><strong>Mutual Funds and ETFs:</strong> Pooled investments that allow you to diversify across various asset classes easily.</li>
          <li><strong>Real Estate:</strong> Property investments that can yield rental income and capital appreciation over time.</li>
          <li><strong>Alternative Investments:</strong> Options such as commodities, cryptocurrencies, or private equity that may further diversify a portfolio.</li>
        </ul>
        <p class="text-gray-700 text-lg">
          The right mix of these vehicles depends on your financial goals, risk tolerance, and investment horizon.
        </p>
      </section>
      
      <!-- Section 3: Diversification and Portfolio Management -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-chart-pie text-blue-500 mr-2"></i>Diversification and Portfolio Management
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Diversification is the practice of spreading your investments across various asset classes to reduce risk. A well‑diversified portfolio minimizes the impact of poor performance by any single investment.
        </p>
        <p class="text-gray-700 text-lg mb-4">
          In both American and European markets, diversified portfolios have historically delivered more stable returns. Regular portfolio rebalancing and asset allocation are key practices in effective portfolio management.
        </p>
        <p class="text-gray-700 text-lg">
          Constant monitoring and adjustment help ensure that your portfolio remains aligned with your evolving financial goals and risk tolerance.
        </p>
      </section>
      
      <!-- Section 4: Wealth‑Building Techniques -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-dollar-sign text-purple-500 mr-2"></i>Wealth‑Building Techniques
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Building wealth is a long‑term endeavor that leverages compound interest, disciplined investing, and reinvestment strategies. Key techniques include:
        </p>
        <ul class="list-disc pl-6 text-gray-700 text-lg mb-4">
          <li><strong>Dollar‑Cost Averaging:</strong> Invest a fixed amount at regular intervals to mitigate the effects of market volatility.</li>
          <li><strong>Reinvestment of Dividends:</strong> Automatically reinvest dividends to purchase additional shares, thereby compounding your returns.</li>
          <li><strong>Long‑Term Holding:</strong> Maintain your investments over long periods to benefit from the market’s overall upward trend.</li>
          <li><strong>Tax‑Advantaged Accounts:</strong> Utilize retirement accounts or ISAs that offer tax benefits to enhance growth.</li>
        </ul>
        <p class="text-gray-700 text-lg">
          These strategies, when applied consistently, have helped investors across the globe achieve substantial wealth accumulation.
        </p>
      </section>
      
      <!-- Section 5: Risk Management and Mitigation -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-shield-alt text-red-500 mr-2"></i>Risk Management and Mitigation
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Every investment carries risk. Effective risk management strategies are essential to protect your portfolio:
        </p>
        <ul class="list-disc pl-6 text-gray-700 text-lg mb-4">
          <li><strong>Assessing Your Risk Tolerance:</strong> Understand how much market fluctuation you can withstand without panic.</li>
          <li><strong>Hedging Strategies:</strong> Use techniques like stop‑loss orders and options to protect against significant downturns.</li>
          <li><strong>Diversification:</strong> Spread your investments across various asset classes to mitigate risk.</li>
          <li><strong>Regular Monitoring:</strong> Stay informed about market trends and economic indicators to make timely adjustments.</li>
        </ul>
        <p class="text-gray-700 text-lg">
          A disciplined approach to risk management can safeguard your portfolio even during periods of market volatility.
        </p>
      </section>
      
      <!-- Section 6: Graphical Comparison: Bank Savings vs 5% Bond -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-chart-line text-blue-500 mr-2"></i>Bank Savings vs. 5% Bond under 2.5% Inflation
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          This graph compares the real value of money kept in a bank account (with negligible interest) versus money invested in a 5% bond, both adjusted for a 2.5% annual inflation rate, over a 10‑year period.
        </p>
        <div class="chart-container">
          <canvas id="investmentComparisonChart"></canvas>
        </div>
      </section>
      
      <!-- Section 7: Case Studies and Real‑Life Examples -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-user-friends text-orange-500 mr-2"></i>Case Studies and Real‑Life Examples
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Consider the case of Alex, a 45‑year‑old investor from the United States who diversified his portfolio across stocks, bonds, and real estate. Over a 10‑year period, Alex’s disciplined approach, combined with regular rebalancing, yielded an average annual return of 8%, even during market downturns.
        </p>
        <p class="text-gray-700 text-lg">
          Similarly, a European investor built a balanced portfolio using low‑cost ETFs and dividend‑paying stocks, demonstrating that smart investment strategies are effective worldwide.
        </p>
      </section>
      
      <!-- Section 8: Conclusion and Recommendations -->
      <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
        <h2 class="text-2xl font-semibold mb-4">
          <i class="fas fa-check-circle text-green-500 mr-2"></i>Conclusion and Recommendations
        </h2>
        <p class="text-gray-700 text-lg mb-4">
          Investment strategies are essential for long‑term wealth building. By understanding the different investment vehicles, maintaining a diversified portfolio, and employing effective risk management techniques, you can set the foundation for a secure financial future.
        </p>
        <ul class="list-disc pl-6 text-gray-700 text-lg">
          <li>Begin investing early to take advantage of compound interest.</li>
          <li>Keep your portfolio diversified to protect against market volatility.</li>
          <li>Regularly review and adjust your investments as your financial goals evolve.</li>
          <li>Consider seeking professional advice to tailor your investment strategy.</li>
        </ul>
      </section>
    </div>
    
    <!-- Navigation -->
    <div class="flex justify-between mt-8">
      <a href="debt-management.php" class="bg-gray-200 px-6 py-2 rounded-lg hover:bg-gray-300 transition inline-flex items-center">
        <i class="fas fa-arrow-left mr-2"></i>Back
      </a>
      <a href="retirement-planning.php" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition inline-flex items-center">
        Next Module: Retirement Planning <i class="fas fa-arrow-right ml-2"></i>
      </a>
    </div>
  </div>
  
  <!-- Include Chart.js and Graph Script -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Set up parameters
    const initialValue = 100;
    const totalYears = 11; // Years 0 through 10
    const inflationFactor = 1.025; // 2.5% inflation
    const bondYield = 1.05; // 5% bond yield
    
    let bankValues = [];
    let bondValues = [];
    let labels = [];
    
    // Compute values for each year
    for (let year = 0; year < totalYears; year++) {
      labels.push("Year " + year);
      // Money sitting in a bank: nominal value remains constant, but real value declines with inflation
      bankValues.push((initialValue / Math.pow(inflationFactor, year)).toFixed(2));
      // Money in a 5% bond: grows nominally at 5%, but real growth is adjusted for inflation
      bondValues.push((initialValue * Math.pow(bondYield / inflationFactor, year)).toFixed(2));
    }
    
    // Render the chart
    const ctx = document.getElementById('investmentComparisonChart').getContext('2d');
    const investmentComparisonChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: labels,
        datasets: [
          {
            label: 'Bank Savings (Real Value)',
            data: bankValues,
            borderColor: 'red',
            backgroundColor: 'rgba(255, 0, 0, 0.1)',
            fill: true,
            tension: 0.1
          },
          {
            label: '5% Bond (Real Value)',
            data: bondValues,
            borderColor: 'green',
            backgroundColor: 'rgba(0, 128, 0, 0.1)',
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
              text: 'Real Value (in $)'
            }
          },
          x: {
            title: {
              display: true,
              text: 'Time (Years)'
            }
          }
        },
        plugins: {
          title: {
            display: true,
            text: 'Bank Savings vs. 5% Bond Adjusted for 2.5% Inflation'
          }
        }
      }
    });
  </script>
  
  <?php require_once 'chatbot.php'; ?>
</body>
</html>
