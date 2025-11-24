<?php
require_once 'auth-check.php';

// Authentication check
if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "financial_literacy";

// Create MySQL connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user data
$userId = $_SESSION['user_id'];
$userData = [];
$progress = 0;

// User data query
$userQuery = $conn->query("SELECT * FROM users WHERE id = $userId");
if ($userQuery && $userQuery->num_rows > 0) {
    $userData = $userQuery->fetch_assoc();
} else {
    header("Location: index.php");
    exit();
}

// Course progress query
//$progressQuery = $conn->query("SELECT progress FROM user_progress WHERE user_id = $userId");
//if ($progressQuery && $progressQuery->num_rows > 0) {
//    $progressData = $progressQuery->fetch_assoc();
//    $progress = $progressData['progress'] ?? 0;
//}

$conn->close();

// Sanitize display data
$courseProgress = (int)$progress;
$userName = htmlspecialchars($userData['name'] ?? 'User');
$userInitial = strtoupper(substr($userName, 0, 1));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Mastery Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .progress-bar {
            height: 10px;
            background: rgba(255,255,255,0.1);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);
        }
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #28a745 0%, #1e7e34 100%);
            transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .hover-scale {
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .hover-scale:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(40,167,69,0.15);
        }
        .floating-chat {
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
            border-radius: 16px;
            overflow: hidden;
        }
        .gradient-headline {
            background: linear-gradient(135deg, #28a745 0%, #1e7e34 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Modern Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center space-x-3">
                    <img src="logo.png" class="h-9 w-auto" alt="Money Mastery">
                    <span class="text-2xl font-bold bg-gradient-to-r from-[#28a745] to-[#1e7e34] bg-clip-text text-transparent">
                        Money Mastery
                    </span>
                </div>
                <div class="flex items-center space-x-6">
                    <div class="flex items-center space-x-3">
                        <span class="text-sm font-semibold text-gray-700"><?= $userName ?></span>
                        <div class="h-9 w-9 rounded-full bg-gradient-to-br from-[#28a745] to-[#1e7e34] text-white flex items-center justify-center font-medium shadow-md">
                            <?= $userInitial ?>
                        </div>
                    </div>
                    <a href="logout.php" class="text-gray-600 hover:text-[#28a745] transition-all duration-300 transform hover:scale-110">
                        <i class="fas fa-sign-out-alt text-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Dashboard Sidebar -->
            <div class="lg:col-span-1 space-y-8">
                <!-- Progress Card -->
                <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100 hover-scale">
                    <h3 class="text-lg font-bold mb-4 text-gray-800">Journey Progress</h3>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: <?= $courseProgress ?>%"></div>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-sm font-semibold text-[#28a745]"><?= $courseProgress ?>% Completed</span>
                        <i class="fas fa-mountain text-[#28a745]"></i>
                    </div>
                </div>

                <!-- Course Chapters -->
                <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100">
                    <h3 class="text-lg font-bold mb-4 text-gray-800">Learning Path</h3>
                    <div class="space-y-4">
                        <button onclick="loadChapter('foundations')" class="w-full text-left p-4 rounded-xl bg-gray-50 hover:bg-[#f8fff9] transition-all border border-transparent hover:border-[#28a745]/20 group">
                            <div class="flex items-center space-x-3">
                                <div class="h-8 w-8 rounded-lg bg-[#28a745]/10 flex items-center justify-center text-[#28a745]">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                <span class="font-medium text-gray-700 group-hover:text-[#1e7e34]">Financial Foundations</span>
                            </div>
                        </button>
                        <button onclick="loadChapter('taxmastery')" class="w-full text-left p-4 rounded-xl bg-gray-50 hover:bg-[#f8fff9] transition-all border border-transparent hover:border-[#28a745]/20 group">
                            <div class="flex items-center space-x-3">
                                <div class="h-8 w-8 rounded-lg bg-[#28a745]/10 flex items-center justify-center text-[#28a745]">
                                    <i class="fas fa-university"></i>
                                </div>
                                <span class="font-medium text-gray-700 group-hover:text-[#1e7e34]">Tax Mastery </span>
                            </div>
                        </button>
                        <button onclick="loadChapter('macroeconomics')" class="w-full text-left p-4 rounded-xl bg-gray-50 hover:bg-[#f8fff9] transition-all border border-transparent hover:border-[#28a745]/20 group">
                            <div class="flex items-center space-x-3">
                                <div class="h-8 w-8 rounded-lg bg-[#28a745]/10 flex items-center justify-center text-[#28a745]">
                                    <i class="fas fa-globe-europe"></i>
                                </div>
                                <span class="font-medium text-gray-700 group-hover:text-[#1e7e34]">Economic Intelligence</span>
                            </div>
                        </button>
                    </div>
                </div>

                <!-- Achievement Badge -->
                <?php if($courseProgress == 100): ?>
                <div class="bg-white p-6 rounded-2xl shadow-xl border border-[#28a745]/20 text-center hover-scale">
                    <div class="animate-bounce-slow">
                        <i class="fas fa-trophy text-4xl text-[#28a745] mb-4"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-3">Financial Guru Status!</h3>
                    <button class="bg-gradient-to-r from-[#28a745] to-[#1e7e34] text-white px-6 py-2 rounded-xl hover:shadow-lg transition-all">
                        Claim Your Mastery Badge
                    </button>
                </div>
                <?php endif; ?>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-3">
                <!-- Hero Banner -->
                <div class="bg-gradient-to-r from-[#28a745] to-[#1e7e34] text-white p-8 rounded-2xl mb-8 shadow-xl">
                    <h1 class="text-4xl font-bold mb-3">Welcome to Financial Freedom, <?= $userName ?>! 🚀</h1>
                    <p class="text-lg opacity-90">Select your next chapter below and unlock powerful money management strategies</p>
                </div>

                <!-- Dynamic Content Area -->
                <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100 min-h-[500px]" id="content-area">
                    <div class="text-center py-12 text-gray-400">
                        <i class="fas fa-hand-pointer text-4xl mb-4 animate-pulse"></i>
                        <p class="text-xl">Select a chapter from your learning path to begin</p>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    </div>


    <script>
const loadChapter = (chapter) => {
    const contentArea = document.getElementById('content-area');
    let contentHTML = '';
    
    if(chapter === 'foundations') {
        contentHTML = `
            <h2 class="text-3xl font-bold mb-6 gradient-headline">Financial Foundations</h2>
            <p class="text-lg text-gray-600 mb-6">Master the essential building blocks of personal finance management and wealth creation.</p>
            
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div class="bg-[#f8fff9] p-5 rounded-xl border border-[#28a745]/20">
                    <h3 class="font-bold mb-3 text-[#1e7e34]">📌 Core Concepts</h3>
                    <ul class="list-disc pl-5 space-y-2 text-gray-600">
                        <li>Budgeting frameworks (50/30/20, Zero-Based)</li>
                        <li>Emergency fund optimization</li>
                        <li>Debt management strategies</li>
                    </ul>
                </div>
                <div class="bg-[#f8fff9] p-5 rounded-xl border border-[#28a745]/20">
                    <h3 class="font-bold mb-3 text-[#1e7e34]">🚀 Key Strategies</h3>
                    <ul class="list-disc pl-5 space-y-2 text-gray-600">
                        <li>Automated savings systems</li>
                        <li>Credit score optimization</li>
                        <li>Risk management fundamentals</li>
                    </ul>
                </div>
            </div>
            
            <a href="Personal-Finance.php" class="inline-block bg-gradient-to-r from-[#28a745] to-[#1e7e34] text-white px-8 py-3 rounded-xl hover:shadow-lg transition-all">
                Start Learning → 
            </a>
        `;
    }
    else if(chapter === 'taxmastery') {
        contentHTML = `
            <h2 class="text-3xl font-bold mb-6 gradient-headline">Tax Planning & Resource Mastery</h2>
<p class="text-lg text-gray-600 mb-6">Leverage strategic tax planning techniques and access essential resources to optimize your liabilities and ensure compliance year-round.</p>

<div class="grid md:grid-cols-2 gap-6 mb-8">
    <div class="bg-[#f8fff9] p-5 rounded-xl border border-[#28a745]/20">
        <h3 class="font-bold mb-3 text-[#1e7e34]">🛠️ Strategic Planning</h3>
        <ul class="list-disc pl-5 space-y-2 text-gray-600">
            <li>Retirement contributions to lower taxable income</li>
            <li>Optimizing savings & investment plans</li>
            <li>Tax-loss harvesting strategies</li>
            <li>Charitable donations for valuable credits</li>
        </ul>
    </div>
    <div class="bg-[#f8fff9] p-5 rounded-xl border border-[#28a745]/20">
        <h3 class="font-bold mb-3 text-[#1e7e34]">💡 Year-Round Strategies</h3>
        <ul class="list-disc pl-5 space-y-2 text-gray-600">
            <li>Adjusting withholdings with income changes</li>
            <li>Timely estimated tax payments</li>
            <li>Staying updated with evolving tax laws</li>
            <li>Utilizing online portals & professional advice</li>
        </ul>
    </div>
</div>



<a href="taxes0.php" class="inline-block bg-gradient-to-r from-[#28a745] to-[#1e7e34] text-white px-8 py-3 rounded-xl hover:shadow-lg transition-all">
    Dashboard →
</a>

        `;
    }
    else if(chapter === 'macroeconomics') {
        contentHTML = `
            <h2 class="text-3xl font-bold mb-6 gradient-headline">Macroeconomics</h2>
            <p class="text-lg text-gray-600 mb-6">Understad macroeconomics forces and leverage economic cycles for personal wealth building.</p>
            
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div class="bg-[#f8fff9] p-5 rounded-xl border border-[#28a745]/20">
                    <h3 class="font-bold mb-3 text-[#1e7e34]">📈 Market Forces</h3>
                    <ul class="list-disc pl-5 space-y-2 text-gray-600">
                        <li>What is Inflation </li>
                        <li>Understanding Macroeconomics</li>
                        <li>Economic Policy and Macroeconomics</li>
                        <li>Impact of Macroeconomy on Personal Finances</li>
                    </ul>
                </div>
                <div class="bg-[#f8fff9] p-5 rounded-xl border border-[#28a745]/20">
                    <h3 class="font-bold mb-3 text-[#1e7e34]">🛡️ Portfolio Defense</h3>
                    <ul class="list-disc pl-5 space-y-2 text-gray-600">
                        <li>Recession-proof investments</li>
                        <li>Commodities as inflation hedge</li>
                        <li>Geopolitical risk mitigation</li>
                        <li>Central bank policy tracking</li>
                    </ul>
                </div>
            </div>

            <div class="bg-[#fff8f8] p-5 rounded-xl border border-red-200 mb-6">
                <h3 class="font-bold mb-3 text-red-600">⚠️ Not Understanding Macroeconomics could lead to:</h3>
                <div class="flex space-x-4 mt-2">
                    <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm">Poor Investment and Business Decisions</span>
                    <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-sm">Inefficient Resource Allocation</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">Misguided Decisions</span>
                </div>
            </div>
            
            <a href="macroeconomia.php" class="inline-block bg-gradient-to-r from-[#28a745] to-[#1e7e34] text-white px-8 py-3 rounded-xl hover:shadow-lg transition-all">
                Analyze Economics → 
            </a>
        `;
    }
    else {
        contentHTML = `
            <div class="text-center py-12 text-gray-400">
                <i class="fas fa-hand-pointer text-4xl mb-4 animate-pulse"></i>
                <p class="text-xl">Select a chapter from your learning path to begin</p>
            </div>
        `;
    }
    
    contentArea.innerHTML = contentHTML;
}
</script>
<?php include 'chatbot.php'; ?>

</body>
</html>