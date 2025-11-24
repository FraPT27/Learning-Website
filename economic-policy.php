<?php
// economic-policy.php
require_once 'auth-check.php';
require_once 'navbar.php';

$moduleData = [
    'title' => 'Economic Policy and Macroeconomics',
    'duration' => '40 min',
    'progress' => 0, // Module-specific progress (update as needed)
    'sections' => [
        [
            'title' => 'Fiscal Policy',
            'icon' => 'fas fa-money-check-alt',
            'content' => '
                <div class="space-y-4">
                    <p class="text-gray-700">
                        Fiscal policy involves the use of government spending and taxation to influence the overall economy. It is used to manage aggregate demand and to promote economic stability.
                    </p>
                    <ul class="list-disc pl-4">
                        <li><strong>Government Spending:</strong> Investments in public services, infrastructure, education, and healthcare.</li>
                        <li><strong>Taxation:</strong> Adjustments in tax rates and tax incentives to redistribute income and stimulate growth.</li>
                        <li><strong>Budget Balance:</strong> The difference between government revenues and expenditures, influencing deficits or surpluses.</li>
                    </ul>
                    <p class="text-gray-700">
                        For example, while fiscal policy in the USA can vary by state, many European countries follow centralized fiscal guidelines to ensure overall economic stability.
                    </p>
                </div>
            ',
            'time' => '12 min'
        ],
        [
            'title' => 'Monetary Policy',
            'icon' => 'fas fa-university',
            'content' => '
                <div class="space-y-4">
                    <p class="text-gray-700">
                        Monetary policy is the process by which a central bank controls the money supply, often by influencing interest rates, to achieve macroeconomic objectives like controlling inflation and fostering economic growth.
                    </p>
                    <ul class="list-disc pl-4">
                        <li><strong>Interest Rates:</strong> Adjusting the cost of borrowing to influence consumer and business spending.</li>
                        <li><strong>Open Market Operations:</strong> Buying or selling government securities to regulate liquidity.</li>
                        <li><strong>Reserve Requirements:</strong> Setting the minimum reserves each bank must hold to ensure stability.</li>
                    </ul>
                    <p class="text-gray-700">
                        Institutions such as the Federal Reserve in the USA and the European Central Bank in Europe use these tools to maintain economic balance.
                    </p>
                </div>
            ',
            'time' => '14 min'
        ],
        [
            'title' => 'Trade Policy',
            'icon' => 'fas fa-globe',
            'content' => '
                <div class="space-y-4">
                    <p class="text-gray-700">
                        Trade policy encompasses the regulations and agreements that govern international trade between nations. It affects domestic industries, employment, and overall economic health.
                    </p>
                    <ul class="list-disc pl-4">
                        <li><strong>Tariffs and Quotas:</strong> Taxes and limits on imported goods designed to protect local industries.</li>
                        <li><strong>Trade Agreements:</strong> Bilateral or multilateral accords that reduce trade barriers and promote economic cooperation.</li>
                        <li><strong>Exchange Rates:</strong> Government policies that influence the value of a nation’s currency, affecting global competitiveness.</li>
                    </ul>
                    <p class="text-gray-700">
                        Countries like the USA, the UK, and many European nations adopt different trade policies to balance domestic needs with international competitiveness.
                    </p>
                </div>
            ',
            'time' => '10 min'
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
        .time-badge {
            position: absolute;
            right: 1rem;
            top: 1rem;
            background: rgba(0, 123, 255, 0.1);
            color: #007bff;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 0.8rem;
        }
        .section-card {
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .section-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
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
        <!-- Module Header -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white p-8 rounded-2xl mb-8 relative">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-sm opacity-90">Module 3 of 5</span>
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
                <img src="economic-policy.png" class="h-32" alt="Economic Policy Illustration">
            </div>
        </div>

        <!-- Main Content -->
        <div class="space-y-8">
            <?php foreach ($moduleData['sections'] as $section): ?>
                <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
                    <div class="flex items-center mb-6">
                        <i class="<?= $section['icon'] ?> text-2xl text-blue-600 mr-3"></i>
                        <h2 class="text-2xl font-semibold"><?= $section['title'] ?></h2>
                        <div class="time-badge"><?= $section['time'] ?></div>
                    </div>
                    <?= $section['content'] ?>
                </section>
            <?php endforeach; ?>
        </div>

        <!-- Navigation -->  
        <div class="flex justify-between mt-8">
            <button class="bg-gray-200 px-6 py-2 rounded-lg hover:bg-gray-300 transition">
                <i class="fas fa-arrow-left mr-2"></i>Back
            </button>
            <button onclick="location.href='Inflation.php'" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
            Inflation <i class="fas fa-arrow-right ml-2"></i>
            </button>
        </div>
    </div>

    <?php require_once 'chatbot.php'; ?>
</body>
</html>
