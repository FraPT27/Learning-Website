<?php

// Authentication and progress check
require_once 'auth-check.php';

// Module Data
$moduleData = [
    'title' => 'Introduction to Macroeconomics',
    'duration' => '40min',
    'progress' => 30, // Module-specific progress
    'sections' => [
        'Fundamental Concepts' => [
            'content' => [
                'Definition of Macroeconomics' => 'The study of the economy as a whole, including inflation, unemployment, and economic growth.',
                'Key Pillars' => [
                    'GDP' => 'Total value of goods and services produced within a country.',
                    'Inflation' => 'Rate at which the general level of prices for goods and services rises.',
                    'Unemployment' => 'Percentage of the workforce that is jobless and actively seeking employment.',
                    'Monetary & Fiscal Policies' => 'Strategies used by governments and central banks to regulate the economy.'
                ]
            ],
            'examples' => [
                'Practical Example' => 'Analyzing how a country’s GDP growth affects employment rates and inflation levels.'
            ]
        ],
        'Why is it Crucial?' => [
            'content' => [
                'Economic Stability' => 'Preventing recessions and economic crises.',
                'Income Distribution' => 'Understanding wage gaps and social welfare policies.',
                'Global Trade' => 'Effects of trade balances and currency exchange rates.'
            ],
            'solutions' => [
                'Implementing balanced monetary policies',
                'Encouraging economic diversification',
                'Strengthening global trade agreements'
            ]
        ],
        'Behavioral Economics' => [
            'content' => [
                'Risky Behaviors' => [
                    'Market Speculation' => 'Investments based on hype rather than fundamental value.',
                    'Short-Term Bias' => 'Preference for immediate gains over long-term stability.'
                ],
                'Self-Control Tools' => [
                    'Automated savings and investment plans',
                    'Financial literacy programs'
                ]
            ]
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $moduleData['title'] ?> | Economic Insights</title>
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
        .example-box {
            background: #F3F4F6;
            padding: 15px;
            border-left: 4px solid #007bff;
            margin-top: 15px;
        }
    </style>
</head>

<body class="bg-gray-50">
    <?php include 'navbar.php'; ?>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="module-header text-white p-8 rounded-2xl mb-8 shadow-lg">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-sm opacity-90">Chapter 3 of 3</span>
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
                <img src="macroeconomics.png" class="h-32" alt="Economic Illustration">
            </div>
        </div>

        <div class="space-y-6">
            <?php foreach ($moduleData['sections'] as $sectionTitle => $sectionData): ?>
                <div class="content-section">
                    <h2 class="text-2xl font-bold"><?= $sectionTitle ?></h2>
                    <?php if (isset($sectionData['content'])): ?>
                        <div class="prose max-w-none">
                            <?php foreach ($sectionData['content'] as $key => $value): ?>
                                <?php if (is_array($value)): ?>
                                    <h3 class="text-xl font-semibold mt-4"><?= $key ?></h3>
                                    <ul>
                                        <?php foreach ($value as $subKey => $subValue): ?>
                                            <li><strong><?= $subKey ?>:</strong> <?= $subValue ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php else: ?>
                                    <p><strong><?= $key ?>:</strong> <?= $value ?></p>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($sectionData['examples'])): ?>
                        <div class="example-box">
                            <h3 class="font-semibold">Practical Example</h3>
                            <?php foreach ($sectionData['examples'] as $exampleTitle => $exampleContent): ?>
                                <p><strong><?= $exampleTitle ?>:</strong> <?= $exampleContent ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($sectionData['solutions'])): ?>
                        <div class="example-box">
                            <h3 class="font-semibold">Recommended Solutions</h3>
                            <ul>
                                <?php foreach ($sectionData['solutions'] as $solution): ?>
                                    <li><?= $solution ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="mt-8 flex justify-between">
            <a href="dashboard.php">
            <button class="bg-gray-200 px-6 py-2 rounded-lg hover:bg-gray-300 transition">
                <i class="fas fa-arrow-left mr-2"></i>Back
            </button>
            </a>
            <a href="macroeconomy1.php">
                <button class="bg-[#007bff] text-white px-6 py-2 rounded-lg hover:bg-[#0056b3] transition">
                    Start Module <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </a>
        </div>
    </div>
    <?php include 'chatbot.php'; ?>

</body>
</html>
