<?php
// chatbot.php

// Verificar autenticação
if (!isset($_SESSION['user_id'])) {
    die("Acesso negado");
}

// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "financial_literacy";

// Obter course_num
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Conexão falhou: " . $conn->connect_error);

$stmt = $conn->prepare("SELECT course_num FROM users WHERE id = ?");
$stmt->bind_param("i", $_SESSION['user_id']);
$stmt->execute();
$stmt->bind_result($course_num);
$stmt->fetch();
$stmt->close();
$conn->close();

// Certifique-se que o valor está sendo retornado corretamente
if ((int)$course_num !== 2) exit;
?>

<!-- Container do Chatbot -->
<div id="chatbot-wrapper">
    <div class="fixed bottom-6 right-6 z-50">
        <div class="bg-white rounded-xl shadow-xl w-80 transition-all duration-300" 
             id="chat-container" 
             style="display: none;">
             
            <!-- Cabeçalho -->
            <div class="bg-[#28a745] text-white p-4 rounded-t-xl flex justify-between items-center">
                <h3 class="font-semibold">Assistente Financeiro</h3>
                <button onclick="toggleChat()" class="hover:text-green-200">
                    <i class="fas fa-times"></i>
                </button>
            </div>
    
            <!-- Área de Mensagens -->
            <div class="h-64 overflow-y-auto p-4 space-y-3" id="chat-messages">
                <div class="flex justify-start">
                    <div class="max-w-[80%] p-3 rounded-lg bg-gray-100 text-gray-800">
                        Olá! Sou seu assistente financeiro. Como posso ajudar?
                    </div>
                </div>
            </div>
    
            <!-- Área de Input -->
            <div class="p-4 border-t">
                <input type="text" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#28a745]"
                       placeholder="Digite sua mensagem..."
                       id="chat-input"
                       onkeydown="handleChatInput(event)">
            </div>
        </div>
    
        <!-- Botão para Alternar o Chatbot -->
        <button onclick="toggleChat()" 
                class="bg-[#28a745] text-white p-4 rounded-full shadow-xl hover:bg-[#218838] transition duration-200">
            <i class="fas fa-comment-dots text-xl"></i>
        </button>
    </div>
</div>

<script>
// Colocar TODAS as funções primeiro
function toggleChat() {
    const chatContainer = document.getElementById('chat-container');
    chatContainer.style.display = chatContainer.style.display === 'none' ? 'block' : 'none';
}

function addMessage(sender, text) {
    const messagesDiv = document.getElementById('chat-messages');
    const messageDiv = document.createElement('div');
    messageDiv.className = `flex ${sender === 'user' ? 'justify-end' : 'justify-start'}`;
    messageDiv.innerHTML = `
        <div class="max-w-[80%] p-3 rounded-lg ${sender === 'user' 
            ? 'bg-[#28a745] text-white' 
            : 'bg-gray-100 text-gray-800'}">
            ${text}
        </div>
    `;
    messagesDiv.appendChild(messageDiv);
    messagesDiv.scrollTop = messagesDiv.scrollHeight;
}

async function handleChatInput(e) {
    if(e.key === 'Enter' && e.target.value.trim()){
        const userMessage = e.target.value;
        addMessage('user', userMessage);
        e.target.value = '';

        try {
            const response = await fetch('chat_response.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ message: userMessage })
            });
            
            const data = await response.json();
            addMessage('bot', data.response);
        } catch (error) {
            console.error('Erro:', error);
            addMessage('bot', 'Erro de conexão com o assistente');
        }
    }
}
</script>