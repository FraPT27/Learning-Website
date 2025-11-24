<?php
// inflation.php
require_once 'auth-check.php';
require_once 'navbar.php';

$moduleData = [
    'title' => "Inflation Explained: Why You Can't Just Print More Money",
    'duration' => '30 min',
    'progress' => 0, // Module-specific progress (update as needed)
    'sections' => [
        [
            'title' => 'Definition & Basics',
            'icon' => 'fas fa-chart-line',
            'content' => '
                <div class="space-y-4">
                    <p class="text-gray-700">
                        Inflation is the rate at which the general level of prices for goods and services rises, which in turn erodes the purchasing power of money.
                    </p>
                    <p class="text-gray-700">
                        A moderate rate of inflation is normal in a growing economy. However, high or unpredictable inflation can lead to economic instability.
                    </p>
                </div>
            ',
            'time' => '8 min'
        ],
        [
            'title' => "Why Not Just Print More Money?",
            'icon' => 'fas fa-ban',
            'content' => '
                <div class="space-y-4">
                    <p class="text-gray-700">
                        Although it might seem that printing more money would solve economic problems, doing so actually creates more issues:
                    </p>
                    <ul class="list-disc pl-6 text-gray-700">
                        <li><strong>Increased Money Supply:</strong> More money in circulation without a corresponding increase in goods and services drives up prices.</li>
                        <li><strong>Demand Outstrips Supply:</strong> With extra money, consumer demand rises, but if production cannot keep pace, prices soar.</li>
                        <li><strong>Hyperinflation:</strong> Excessive money printing can lead to hyperinflation, as seen historically in countries like Zimbabwe and Venezuela, where the currency lost nearly all its value.</li>
                    </ul>
                    <p class="text-gray-700">
                        In short, printing money devalues the currency and reduces your purchasing power, which can be catastrophic for an economy.
                    </p>
                </div>
            ',
            'time' => '10 min'
        ],
        [
            'title' => 'Consequences of Excessive Money Printing',
            'icon' => 'fas fa-exclamation-triangle',
            'content' => '
                <div class="space-y-4">
                    <p class="text-gray-700">
                        The harmful effects of printing too much money include:
                    </p>
                    <ul class="list-disc pl-6 text-gray-700">
                        <li><strong>Currency Devaluation:</strong> As more money is printed, the value of each unit of currency drops, making imports more expensive and reducing living standards.</li>
                        <li><strong>Loss of Confidence:</strong> Rapidly rising prices undermine trust in the financial system and government policies, often leading to economic chaos.</li>
                        <li><strong>Resource Misallocation:</strong> When money loses value, investments become less effective and resources may be allocated inefficiently.</li>
                    </ul>
                </div>
            ',
            'time' => '7 min'
        ],
        [
            'title' => 'Inflation Control Mechanisms',
            'icon' => 'fas fa-university',
            'content' => '
                <div class="space-y-4">
                    <p class="text-gray-700">
                        Central banks and governments use various tools to control inflation and maintain economic stability:
                    </p>
                    <ul class="list-disc pl-6 text-gray-700">
                        <li><strong>Monetary Policy:</strong> Adjusting interest rates and controlling the money supply through open market operations.</li>
                        <li><strong>Fiscal Policy:</strong> Managing government spending and taxation to balance demand in the economy.</li>
                        <li><strong>Regulatory Measures:</strong> Implementing policies to ensure that production and supply can meet increased demand without triggering runaway inflation.</li>

                        </ul>                  <p class=\"text-gray-700\">These measures help maintain a healthy balance between money supply and the economy’s capacity to produce goods and services.                   </p>              </div>',
            'time' => '5 min'
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
            background: linear-gradient(135deg, #ff7e5f 0%, #feb47b 100%);
        }
        .content-section {
            background: #FFFFFF;
            border: 1px solid #E5E7EB;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .content-section h2 {
            color: #ff7e5f;
            border-bottom: 2px solid #feb47b;
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
    <!-- Navbar -->
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Module Header -->
        <div class="module-header text-white p-8 rounded-2xl mb-8 shadow-lg">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-sm opacity-90">Module 4 of 5</span>
                    <h1 class="text-4xl font-bold mt-2"><?= $moduleData['title'] ?></h1>
                    <div class="flex items-center mt-4 space-x-4">
                        <div class="flex items-center">
                            <i class="far fa-clock mr-2"></i>
                            <span>Total Duration: <?= $moduleData['duration'] ?></span>
                        </div>
                        <div class="w-24 h-2 bg-orange-200 rounded-full">
                            <div class="h-full bg-white transition-all duration-500" style="width: <?= $moduleData['progress'] ?>%"></div>
                        </div>
                    </div>
                </div>
                <img src="inflation.png" class="h-32" alt="Inflation Illustration">
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="space-y-8">
            <?php foreach ($moduleData['sections'] as $section): ?>
                <section class="content-section">
                    <div class="flex items-center mb-6">
                        <i class="<?= $section['icon'] ?> text-2xl mr-3" style="color: #ff7e5f;"></i>
                        <h2 class="text-2xl font-semibold"><?= $section['title'] ?></h2>
                        <div class="ml-auto text-sm text-gray-600">Time: <?= $section['time'] ?></div>
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
            <a href="impact-macroeconomy.php">
                <button class="bg-orange-600 text-white px-6 py-2 rounded-lg hover:bg-orange-700 transition">
                  impact-macroeconomy<i class="fas fa-arrow-right ml-2"></i>
                </button>
            </a>
        </div>
    </div>
    
    <?php include 'chatbot.php'; ?>
</body>
</html>
