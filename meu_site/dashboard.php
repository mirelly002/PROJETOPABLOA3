<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit;
}

echo "Bem-vindo ao dashboard!";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <h2>Bem-vindo, <?= $_SESSION['user']['username']; ?>!</h2>
    <a href="alterar_senha.php">Alterar Senha</a>
    <?php if (is_admin()): ?>
        <a href="crud_admin.php">Administração</a>
    <?php endif; ?>
    <a href="logout.php">Sair</a>
</body>
</html>
