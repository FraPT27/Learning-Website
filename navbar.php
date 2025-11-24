<?php
// Verificar se a sessão está ativa
if (session_status() === PHP_SESSION_NONE) session_start();
?>
<?php if (!defined('STYLE_INCLUDED')): ?>
<?php define('STYLE_INCLUDED', true); ?>
<header>
    <link href="style.css" rel="stylesheet">
</header>
<?php endif; ?>
<!-- Navigation Bar -->
<nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="logo.png" class="h-8 w-auto" alt="Financial Pro">
                <span class="ml-2 text-xl font-semibold text-gray-800">Financial Pro</span>
            </div>

            <!-- User Section -->
            <div class="flex items-center space-x-4">
                <?php if(isset($_SESSION['user_id'])): ?>
                <div class="flex items-center">
                    <span class="text-sm font-medium text-gray-600 mr-2">
                        <?= htmlspecialchars($_SESSION['name'] ?? 'Usuário') ?>
                    </span>
                    <div class="h-8 w-8 rounded-full bg-[#28a745] text-white flex items-center justify-center">
                        <?= strtoupper(substr(htmlspecialchars($_SESSION['name'] ?? 'U'), 0, 1)) ?>
                    </div>
                </div>
                <a href="logout.php" 
                   class="text-gray-600 hover:text-[#28a745] transition duration-200"
                   title="Sair do sistema">
                    <i class="fas fa-sign-out-alt text-lg"></i>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>