<?php
// chat_response.php
header('Content-Type: application/json');

$DEEPSEEK_API_KEY = '';
$input = json_decode(file_get_contents('php://input'), true);

try {
    $ch = curl_init('https://api.deepseek.com/v1/chat/completions');
    
    $payload = json_encode([
        'model' => 'deepseek-chat',
        'messages' => [
            [
                'role' => 'system',
                'content' => 'Você é um assistente financeiro especializado em educação financeira para iniciantes.'
            ],
            [
                'role' => 'user',
                'content' => $input['message']
            ]
        ],
        'temperature' => 0.7,
        'max_tokens' => 500
    ]);

    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $DEEPSEEK_API_KEY
        ],
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_TIMEOUT => 15, // 15 segundos de timeout
        CURLOPT_CONNECTTIMEOUT => 5, // 5 segundos para conexão
        CURLOPT_SSL_VERIFYPEER => true
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);
    $curlErrNo = curl_errno($ch);
    
    curl_close($ch);

    // Verificação detalhada de erros
    if ($curlErrNo) {
        throw new Exception("Erro cURL ($curlErrNo): $curlError");
    }

    if ($httpCode !== 200) {
        throw new Exception("API retornou código HTTP $httpCode");
    }

    $data = json_decode($response, true);
    
    if (!isset($data['choices'][0]['message']['content'])) {
        throw new Exception("Resposta da API em formato inesperado");
    }

    echo json_encode(['response' => $data['choices'][0]['message']['content']]);

} catch (Exception $e) {
    // Log de erros (ajuste o caminho)
    error_log(date('[Y-m-d H:i:s]') . " API Error: " . $e->getMessage() . "\n", 3, "api_errors.log");
    
    // Resposta amigável para o usuário
    $errorMessage = match(true) {
        $curlErrNo === CURLE_OPERATION_TIMEOUTED => "Tempo de conexão excedido. Tente novamente.",
        $httpCode >= 500 => "Serviço temporariamente indisponível. Tente mais tarde.",
        $httpCode === 401 => "Problema de autenticação. Contate o suporte.",
        default => "Erro temporário no serviço. Por favor, tente novamente em alguns minutos."
    };

    echo json_encode([
        'response' => $errorMessage,
        'error_code' => $httpCode ?: $curlErrNo
    ]);
}
?>