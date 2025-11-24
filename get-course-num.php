<?php
// get_course_num.php
// (Caso a sessão já seja iniciada em outro lugar, este session_start() pode ser removido.)
session_start();
header('Content-Type: application/json');

// Retorna o valor de course_num, que deve ter sido definido durante o login.
if (isset($_SESSION['course_num'])) {
    echo json_encode(['course_num' => $_SESSION['course_num']]);
} else {
    echo json_encode(['course_num' => null]);
}
?>
// Compare this snippet from create-payment-intent.php: