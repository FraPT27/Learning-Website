<?php
// introduction.php
require_once 'auth-check.php';
require_once 'navbar.php';

$moduleData = [
    'title' => 'Introduction to Personal Finance',
    'duration' => '30 min',
    'sections' => [
        [
            'title' => 'What is Personal Finance?',
            'icon' => 'fas fa-wallet',
            'content' => '
                <div class="space-y-4">
                    <p class="text-gray-700">Personal finance is the <strong>conscious management</strong> of:</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4 bg-green-50 rounded-lg">
                            <h3 class="font-semibold mb-2">✅ What it includes:</h3>
                            <ul class="list-disc pl-4">
                                <li>Monthly Income</li>
                                <li>Fixed and Variable Expenses</li>
                                <li>Investments</li>
                                <li>Tax Planning</li>
                            </ul>
                              

                            <a href="Personal-Finance.php">
                                   Access Full Content <i class="fas fa-arrow-right ml-2"></i><br>   
                            </a>
                        </div>
                        <div class="p-4 bg-blue-50 rounded-lg">
                            <h3 class="font-semibold mb-2">📈 Main Objective:</h3>
                            <p>Balance between:</p>
                            <div class="flex justify-between mt-2">
                                <span class="text-sm bg-green-100 px-2 py-1 rounded">Income</span>
                                <span class="text-sm bg-red-100 px-2 py-1 rounded">Expenses</span>
                            </div>
                        </div>
                    </div>
                    <div class="border-l-4 border-green-500 pl-4 mt-4">
                        <h3 class="font-semibold mb-2">📌 Quick Tip</h3>
                        <p>The 50-30-20 rule:</p>
                        <div class="flex gap-4 mt-2">
                            <div class="text-center">
                                <div class="h-12 w-12 bg-green-500 rounded-full flex items-center justify-center text-white">50%</div>
                                <p class="text-sm mt-1">Necessities</p>
                            </div>
                            <div class="text-center">
                                <div class="h-12 w-12 bg-blue-500 rounded-full flex items-center justify-center text-white">30%</div>
                                <p class="text-sm mt-1">Wants</p>
                            </div>
                            <div class="text-center">
                                <div class="h-12 w-12 bg-purple-500 rounded-full flex items-center justify-center text-white">20%</div>
                                <p class="text-sm mt-1">Savings</p>
                            </div>
                        </div>
                    </div>
                </div>
            ',
            'time' => '10 min'
        ],
        [
            'title' => 'Why is it Important?',
            'icon' => 'fas fa-chart-line',
            'content' => '
   
                <div class="space-y-6">
                    <div class="bg-red-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-red-800 mb-2">⚠️ Risks of Negligence</h3>
                        <ul class="list-disc pl-4">
                            <li>Approximately 40% of American households lack an adequate emergency fund</li>
                            <li>The average debt-to-income ratio in the US is around 35%</li>
                            <li>Over 50% of Europeans do not consistently track their expenses</li>
                        </ul>
                          <a href="why-is-it-important.php">
                                   Why is it important <i class="fas fa-arrow-right ml-2"></i><br>   
                            </a>
                        </div>
                    

                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="p-4 bg-white border rounded-lg">
                            <h4 class="font-semibold mb-2">Immediate Benefits</h4>
                            <ul class="space-y-2">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Reduced financial stress
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Control over impulsive spending
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 bg-white border rounded-lg">
                            <h4 class="font-semibold mb-2">Long-Term Impact</h4>
                            <ul class="space-y-2">
                                <li class="flex items-center">
                                    <i class="fas fa-rocket text-blue-500 mr-2"></i>
                                    Financial freedom by age 55
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-home text-purple-500 mr-2"></i>
                                    Opportunity to purchase a home
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg mt-4">
                        <h3 class="font-semibold mb-2">📊 Case Study</h3>
                        <p>John, 32, after 6 months of budgeting:</p>
                        <div class="flex gap-4 mt-2">
                            <div class="flex-1 bg-white p-3 rounded text-center">
                                <div class="text-2xl font-bold text-green-600">+$1,200</div>
                                <div class="text-sm">Monthly Savings</div>
                            </div>
                            <div class="flex-1 bg-white p-3 rounded text-center">
                                <div class="text-2xl font-bold text-blue-600">-42%</div>
                                <div class="text-sm">Debt Reduction</div>
                            </div>
                        </div>
                    </div>
                </div>
            ',
            'time' => '12 min'
        ],
        [
            'title' => 'Basic Pillars',
            'icon' => 'fas fa-shield-alt',
            'content' => '
                <div class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="p-4 bg-white border rounded-lg">
                            <h3 class="font-semibold mb-2">1. Budget Control</h3>
                            <ul class="list-disc pl-4">
                                <li>Spreadsheet or app</li>
                                <li>Expense categorization</li>
                                <li>Weekly review</li>
                            </ul>
                        </div>
                        <div class="p-4 bg-white border rounded-lg">
                            <h3 class="font-semibold mb-2">2. Emergency Fund</h3>
                            <ul class="list-disc pl-4">
                                <li>3-6 months of expenses</li>
                                <li>Separate account</li>
                                <li>Immediate liquidity</li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="p-4 bg-white border rounded-lg">
                            <h3 class="font-semibold mb-2">3. Debt Management</h3>
                            <div class="bg-red-50 p-3 rounded mt-2">
                                <p class="text-sm">Prioritize by:</p>
                                <ol class="list-decimal pl-4 mt-1">
                                    <li>Interest Rate</li>
                                    <li>Total Amount Owed</li>
                                </ol>
                            </div>
                        </div>
                        <div class="p-4 bg-white border rounded-lg">
                            <h3 class="font-semibold mb-2">4. Investments</h3>
                            <div class="bg-green-50 p-3 rounded mt-2">
                                <p class="text-sm">Start with:</p>
                                <ul class="list-disc pl-4">
                                    <li>Treasury Bonds</li>
                                    <li>Certificates of Deposit (CDs)</li>
                                    <li>Conservative funds</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="font-semibold mb-2">✅ Initial Checklist</h3>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                I have listed all sources of income
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                I have categorized essential expenses
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                I have set an emergency fund goal
                            </label>
                        </div>
                    </div>
                </div>
            ',
            'time' => '8 min'
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
            background: rgba(40, 167, 69, 0.1);
            color: #28a745;
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
        .button {
            padding: 0.75rem 1.5rem;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 0.375rem;
            font-size: 1rem;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="bg-gradient-to-r from-green-600 to-green-700 text-white p-8 rounded-2xl mb-8 relative">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold"><?= $moduleData['title'] ?></h1>
                    <p class="mt-2">Total Duration: <?= $moduleData['duration'] ?></p>
                </div>
                <div class="bg-white/10 p-4 rounded-lg">
                    <i class="fas fa-graduation-cap text-3xl"></i>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="grid lg:grid-cols-4 gap-8">
            <!-- Navigation -->
            <div class="lg:col-span-1 space-y-4">
                <?php foreach ($moduleData['sections'] as $index => $section): ?>
                <a href="#section-<?= $index + 1 ?>" class="block section-card bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                    <div class="flex items-center">
                        <i class="<?= $section['icon'] ?> text-green-600 mr-3"></i>
                        <h3 class="font-semibold"><?= $section['title'] ?></h3>
                    </div>
                    <div class="time-badge"><?= $section['time'] ?></div>
                </a>
                <?php endforeach; ?>
            </div>

            <!-- Detailed Content -->
            <div class="lg:col-span-3 space-y-8">
                <?php foreach ($moduleData['sections'] as $index => $section): ?>
                <section id="section-<?= $index + 1 ?>" class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
                    <div class="flex items-center mb-6">
                        <i class="<?= $section['icon'] ?> text-2xl text-green-600 mr-3"></i>
                        <h2 class="text-2xl font-semibold"><?= $section['title'] ?></h2>
                    </div>
                    <?= $section['content'] ?>
                </section>
                <?php endforeach; ?>

                <!-- Navigation -->
                <div class="flex justify-between mt-8">
                <a href="dashboard.php">
                    <button class="bg-gray-200 px-6 py-2 rounded-lg hover:bg-gray-300 transition">
                        <i class="fas fa-arrow-left mr-2"></i>Back
                    </button>
                </a>
                    <a href="budgeting-and-expense-management.php">
                    <button class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">
                        Next Module <i class="fas fa-arrow-right ml-2"></i></a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'chatbot.php'; ?>
</body>
</html>
