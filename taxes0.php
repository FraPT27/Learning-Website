<?php
// Authentication and progress check
require_once 'auth-check.php';

// Module Data for Taxation
$moduleData = [
    'title' => 'Introduction to Taxation',
    'duration' => '30min',
    'progress' => 25, // Module-specific progress in percent
    'sections' => [
        'Tax Fundamentals' => [
            'content' => [
                'Definition of Taxes' => 'Taxes are compulsory financial charges imposed by governments to fund public services, infrastructure, and social programs.',
                'Purpose of Taxes' => 'They provide the necessary revenue for public expenditures, facilitate wealth redistribution, and support economic stability.',
                'Historical Evolution' => 'Taxation has evolved from simple tributes in ancient societies to complex systems in modern economies.'
            ]
        ],
        'Types of Taxes' => [
            'content' => [
                'National Taxes' => 'These include income, corporate, payroll, estate, and gift taxes that support central government functions.',
                'Regional/Local Taxes' => 'Local taxes, such as sales, property, and excise taxes, fund community services and local infrastructure.',
                'Tax Structures' => 'Tax systems can be progressive, regressive, or proportional, affecting different income groups uniquely.'
            ],
            'examples' => [
                'Practical Example' => 'Comparative analysis of tax systems across countries highlights diverse approaches to taxation and wealth redistribution.'
            ]
        ],
        'Economic Impact and Incentives' => [
            'content' => [
                'Economic Impact' => 'Tax policies shape economic behavior, influencing investment decisions and overall fiscal health.',
                'Incentives' => 'Deductions, credits, and exemptions encourage actions such as renewable energy investments, education, and charitable giving.',
                'Public Services Funding' => 'Taxes fund essential services including healthcare, education, transportation, and defense, benefiting society as a whole.'
            ],
            'examples' => [
                'Practical Example' => 'Utilizing tax credits for renewable energy investments can reduce tax liability while promoting sustainable growth.'
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
    <title><?= $moduleData['title'] ?> | Tax Insights</title>
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
            border-left: 4px solid rgb(51, 82, 255);
            margin-top: 15px;
        }
    </style>
</head>
<body class="bg-gray-50">
    <?php include 'navbar.php'; ?>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Module Header -->
        <div class="module-header text-white p-8 rounded-2xl mb-8 shadow-lg">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-sm opacity-90">Chapter 1 of 5</span>
                    <h1 class="text-4xl font-bold mt-2"><?= $moduleData['title'] ?></h1>
                    <div class="flex items-center mt-4 space-x-4">
                        <div class="flex items-center">
                            <i class="far fa-clock mr-2"></i>
                            <span>Total Duration: <?= $moduleData['duration'] ?></span>
                        </div>
                        <div class="w-24 h-2 bg-red-200 rounded-full">
                            <div class="h-full bg-white transition-all duration-500" style="width: <?= $moduleData['progress'] ?>%"></div>
                        </div>
                    </div>
                </div>
                <img src="taxes.png" class="h-32" alt="Tax Illustration">
            </div>
        </div>

        <!-- Module Content Sections -->
        <div class="space-y-6">
            <?php foreach ($moduleData['sections'] as $sectionTitle => $sectionData): ?>
                <div class="content-section">
                    <h2 class="text-2xl font-bold"><?= $sectionTitle ?></h2>
                    <?php if (isset($sectionData['content'])): ?>
                        <div class="prose max-w-none">
                            <?php foreach ($sectionData['content'] as $key => $value): ?>
                                <p><strong><?= $key ?>:</strong> <?= $value ?></p>
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
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Navigation Buttons -->
        <div class="mt-8 flex justify-between">
            <a href="dashboard.php">
                <button class="bg-gray-200 px-6 py-2 rounded-lg hover:bg-gray-300 transition">
                    <i class="fas fa-arrow-left mr-2"></i>Back
                </button>
            </a>
            <a href="taxes1.php">
                <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition inline-flex items-center">
                    Start Module <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </a>
        </div>
    </div>
    <?php include 'chatbot.php'; ?>
</body>
</html>
