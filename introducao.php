<?php

// Authentication and progress check
require_once 'auth-check.php';

// Module data
$moduleData = [
    'title' => 'Introduction to Personal Finance',
    'duration' => '30min',
    'progress' => 25, // Specific module progress
    'sections' => [
        'Fundamental Concepts' => [
            'content' => [
                'Definition of Personal Finance' => 'The conscious management of income, expenses, investments, and debts to achieve financial goals.',
                'Basic Pillars' => [
                    'Budgeting' => 'Detailed tracking of income and expenses.',
                    'Saving' => 'Building an emergency fund (3-6 months of expenses).',
                    'Investing' => 'Strategic allocation for wealth growth.',
                    'Financial Education' => 'Understanding interest rates, inflation, and risks.'
                ]
            ],
            'examples' => [
                'Practical Example' => 'Manage $3,000 per month to save 20% and reduce debts within 12 months.'
            ]
        ],
        'Why It Is Crucial?' => [
            'content' => [
                'Debt Accumulation' => 'Accumulating $15,000 in debt with 12% monthly interest.',
                'Impulsive Spending' => 'Spending 40% of income on non-essentials.',
                'Lack of Savings' => 'A medical emergency could consume 70% of your salary.'
            ],
            'solutions' => [
                'Restructuring via "50-30-20 Rule"',
                'Prioritization with SMART goals',
                'Automatic emergency fund'
            ]
        ],
        'Financial Psychology' => [
            'content' => [
                'Risky Behaviors' => [
                    'Herd Mentality' => 'Purchasing driven by social influence.',
                    'Present Bias' => 'Preference for immediate gratification.'
                ],
                'Self-Control Tools' => [
                    'Spending-blocking apps',
                    'Emotional finance journal'
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
    <title><?= $moduleData['title'] ?> | Financial Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .module-header {
            background: linear-gradient(135deg, #28a745 0%, #1e7e34 100%);
        }

        .content-section {
            background: #FFFFFF;
            border: 1px solid #E5E7EB;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .content-section h2 {
            color: #1e7e34;
            border-bottom: 2px solid #28a745;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        .content-section ul {
            list-style-type: square;
            margin-left: 20px;
        }

        .content-section ul li {
            margin-bottom: 8px;
        }

        .example-box {
            background: #F3F4F6;
            padding: 15px;
            border-left: 4px solid #28a745;
            margin-top: 15px;
        }

        .intro-text {
            background: #FFFFFF;
            border: 1px solid #E5E7EB;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Module Header -->
        <div class="module-header text-white p-8 rounded-2xl mb-8 shadow-lg">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-sm opacity-90">Module 1 of 5</span>
                    <h1 class="text-4xl font-bold mt-2"><?= $moduleData['title'] ?></h1>
                    <div class="flex items-center mt-4 space-x-4">
                        <div class="flex items-center">
                            <i class="far fa-clock mr-2"></i>
                            <span>Total Duration: <?= $moduleData['duration'] ?></span>
                        </div>
                        <div class="w-24 h-2 bg-green-200 rounded-full">
                            <div class="h-full bg-white transition-all duration-500"
                                style="width: <?= $moduleData['progress'] ?>%"></div>
                        </div>
                    </div>
                </div>
                <img src="financial-literacy.png" class="h-32" alt="Financial Illustration">
            </div>
        </div>

        <!-- Module Introduction -->
        <div class="intro-text mb-8">
            <p class="text-lg">
                Welcome to the module "<strong><?= $moduleData['title'] ?></strong>". In this module, you will learn the fundamentals of personal finance – from defining what personal finance is and exploring its basic pillars, to understanding the risks of poor financial management and the psychological factors that influence our money decisions. With practical examples and recommended solutions, you will learn how to structure your budget, save intelligently, and invest for long-term wealth. Get ready to transform your relationship with money and take your first steps toward financial freedom.
            </p>
        </div>

        <!-- Main Content -->
        <div class="space-y-6">
            <?php foreach ($moduleData['sections'] as $sectionTitle => $sectionData): ?>
                <div class="content-section">
                    <h2 class="text-2xl font-bold"><?= $sectionTitle ?></h2>

                    <!-- Text Content -->
                    <?php if (isset($sectionData['content'])): ?>
                        <div class="prose max-w-none">
                            <?php foreach ($sectionData['content'] as $key => $value): ?>
                                <?php if (is_array($value)): ?>
                                    <h3 class="text-xl font-semibold mt-4"><?= $key ?></h3>
                                    <ul>
                                        <?php foreach ($value as $subKey => $subValue): ?>
                                            <li>
                                                <?php if (is_array($subValue)): ?>
                                                    <strong><?= $subKey ?>:</strong>
                                                    <ul>
                                                        <?php foreach ($subValue as $innerKey => $innerValue): ?>
                                                            <li><strong><?= $innerKey ?>:</strong> <?= $innerValue ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php else: ?>
                                                    <strong><?= $subKey ?>:</strong> <?= $subValue ?>
                                                <?php endif; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php else: ?>
                                    <p><strong><?= $key ?>:</strong> <?= $value ?></p>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Practical Examples -->
                    <?php if (isset($sectionData['examples'])): ?>
                        <div class="example-box">
                            <h3 class="font-semibold">Practical Example</h3>
                            <?php foreach ($sectionData['examples'] as $exampleTitle => $exampleContent): ?>
                                <p><strong><?= $exampleTitle ?>:</strong> <?= $exampleContent ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Recommended Solutions -->
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

        <!-- Navigation -->
        <div class="mt-8 flex justify-between">
            <a href="dashboard.php">
                <button class="bg-gray-200 px-6 py-2 rounded-lg hover:bg-gray-300 transition">
                    <i class="fas fa-arrow-left mr-2"></i>Back
                </button>
            </a>
            <a href="Personal-Finance.php">
                <button class="bg-[#28a745] text-white px-6 py-2 rounded-lg hover:bg-[#218838] transition">
                    Start Module <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </a>
        </div>
    </div>

    <!-- Chatbot -->
    <?php include 'chatbot.php'; ?>
</body>

</html>
