<?php
// impact-macroeconomy.php
require_once 'auth-check.php';
require_once 'navbar.php';

$moduleData = [
    'title' => 'Impact of Macroeconomy on Personal Finances',
    'duration' => '35 min',
    'progress' => 0, // Update progress if needed
    'sections' => [
        [
            'title' => 'Inflation and Purchasing Power',
            'icon' => 'fas fa-chart-line',
            'content' => '
                <div class="space-y-4">
                    <p class="text-gray-700">
                        Inflation is the rate at which the overall price level for goods and services rises, leading to a decline in the purchasing power of money. When inflation occurs, the same amount of money buys fewer goods and services than before.
                    </p>
                    <p class="text-gray-700">
                        Macroeconomic factors such as an increase in money supply, supply chain disruptions, and rising production costs can drive inflation higher. This means that if you hold cash, its real value decreases over time.
                    </p>
                    <p class="text-gray-700">
                        Understanding inflation is crucial because it affects everything from your cost of living to your investment returns. In order to protect your wealth, it is important to invest in assets that offer returns exceeding the inflation rate.
                    </p>
                </div>
            ',
            'time' => '8 min'
        ],
        [
            'title' => 'Interest Rates and Borrowing',
            'icon' => 'fas fa-university',
            'content' => '
                <div class="space-y-4">
                    <p class="text-gray-700">
                        Interest rates are set by central banks as part of monetary policy to control inflation and manage economic growth. When interest rates rise, borrowing becomes more expensive; when they fall, borrowing is cheaper.
                    </p>
                    <p class="text-gray-700">
                        For individuals, higher interest rates mean that loans—including mortgages, auto loans, and credit card debts—cost more. Conversely, lower rates can stimulate spending and investment, but may also contribute to higher inflation if not managed carefully.
                    </p>
                    <p class="text-gray-700">
                        By understanding how interest rates are influenced by macroeconomic conditions, you can better plan for debt repayment and manage your borrowing costs.
                    </p>
                </div>
            ',
            'time' => '7 min'
        ],
        [
            'title' => 'GDP and Job Security',
            'icon' => 'fas fa-briefcase',
            'content' => '
                <div class="space-y-4">
                    <p class="text-gray-700">
                        Gross Domestic Product (GDP) is a key indicator of a country’s economic health and represents the total value of all goods and services produced over a period of time. A growing GDP generally signals a healthy economy with expanding job opportunities.
                    </p>
                    <p class="text-gray-700">
                        When GDP falls, it can lead to reduced business activity, layoffs, and lower income levels for individuals. This decline in economic output directly affects personal finances by limiting job security and reducing disposable income.
                    </p>
                    <p class="text-gray-700">
                        Monitoring GDP trends can help you understand the broader economic environment and adjust your financial strategies accordingly.
                    </p>
                </div>
            ',
            'time' => '6 min'
        ],
        [
            'title' => 'Government Policies and Taxes',
            'icon' => 'fas fa-landmark',
            'content' => '
                <div class="space-y-4">
                    <p class="text-gray-700">
                        Government fiscal policies, including taxation and public spending, have a significant impact on the economy and on individual finances. For example, tax cuts can increase disposable income, whereas higher taxes may reduce the money available for personal spending or savings.
                    </p>
                    <p class="text-gray-700">
                        Additionally, government spending on infrastructure, education, and social services can stimulate economic activity, while austerity measures may slow growth.
                    </p>
                    <p class="text-gray-700">
                        Understanding these policies helps you anticipate changes in your financial situation and plan for shifts in your disposable income.
                    </p>
                </div>
            ',
            'time' => '7 min'
        ],
        [
            'title' => 'Stock Market and Investments',
            'icon' => 'fas fa-chart-pie',
            'content' => '
                <div class="space-y-4">
                    <p class="text-gray-700">
                        The stock market is often a reflection of overall economic conditions. Factors such as inflation, interest rates, and GDP growth influence investor sentiment and market performance.
                    </p>
                    <p class="text-gray-700">
                        A strong economy generally leads to rising stock prices, which can enhance the value of your investment portfolio. Conversely, during economic downturns, market volatility increases, potentially eroding investment value.
                    </p>
                    <p class="text-gray-700">
                        Diversification and a long-term investment strategy are key to managing the risks associated with macroeconomic fluctuations in the stock market.
                    </p>
                </div>
            ',
            'time' => '9 min'
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $moduleData['title'] ?> | Financial Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .module-header {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
        }
        .content-section {
            background: #FFFFFF;
            border: 1px solid #E5E7EB;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .content-section h2 {
            color: #007bff;
            border-bottom: 2px solid #0056b3;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        .content-section ul {
            list-style-type: disc;
            margin-left: 20px;
        }
        .content-section ul li {
            margin-bottom: 8px;
        }
        .time-badge {
            background: rgba(0, 123, 255, 0.1);
            color: #007bff;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 0.8rem;
            margin-left: auto;
        }
    </style>
</head>
<body class="bg-gray-50">
 
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Module Header -->
        <div class="module-header text-white p-8 rounded-2xl mb-8 shadow-lg">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-sm opacity-90">Module 5 of 5</span>
                    <h1 class="text-4xl font-bold mt-2"><?= $moduleData['title'] ?></h1>
                    <div class="flex items-center mt-4 space-x-4">
                        <div class="flex items-center">
                            <i class="far fa-clock mr-2"></i>
                            <span>Total Duration: <?= $moduleData['duration'] ?></span>
                        </div>
                        <div class="w-24 h-2 bg-blue-200 rounded-full">
                            <div class="h-full bg-white transition-all duration-500" style="width: <?= $moduleData['progress'] ?>%"></div>
                        </div>
                    </div>
                </div>
                <img src="impact-macroeconomy.png" class="h-32" alt="Macroeconomy Impact Illustration">
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="space-y-8">
            <?php foreach ($moduleData['sections'] as $section): ?>
                <section class="content-section">
                    <div class="flex items-center mb-6">
                        <i class="<?= $section['icon'] ?> text-2xl mr-3"></i>
                        <h2 class="text-2xl font-semibold"><?= $section['title'] ?></h2>
                        <div class="time-badge ml-auto">Time: <?= $section['time'] ?></div>
                    </div>
                    <?= $section['content'] ?>
                </section>
            <?php endforeach; ?>
        </div>
        
        <!-- Navigation -->  
        <div class="flex justify-between mt-8">
            <button onclick="history.back()" class="bg-gray-200 px-6 py-2 rounded-lg hover:bg-gray-300 transition">
                <i class="fas fa-arrow-left mr-2"></i>Back
            </button>
            <a href="Quiz3.php">
                <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                    Quiz <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </a>
        </div>
    </div>
    
    <?php include 'chatbot.php'; ?>
</body>
</html>
