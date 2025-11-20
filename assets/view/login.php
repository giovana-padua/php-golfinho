


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boto para Estudar</title>

    <link rel="stylesheet" href="../styles/inicio.css">
</head>
<body>
    <div class="background-shapes">
        <div class="shape shape1"></div>
        <div class="shape shape2"></div>
        <div class="shape shape3"></div>
    </div>

    <div class="form-container" id="loginPage">
        <div class="logo">
            <div class="logo-icon">🐬</div>
        </div>
        
        <h2>Bem-vindo de volta</h2>
        <p class="subtitle">Entre na sua conta para continuar</p>

        <form id="loginForm">
            <div class="input-group">
                <label for="loginEmail">E-mail</label>
                <input type="email" id="loginEmail" placeholder="seu@email.com" required>
            </div>

            <div class="input-group">
                <label for="loginPassword">Senha</label>
                <input type="password" id="loginPassword" placeholder="••••••••" required>
                <div class="forgot-password">
                    <a href="esqueceuSenha.php">Esqueceu a senha?</a>
                </div>
            </div>

            <button type="submit" class="btn-primary">Entrar</button>
        </form>

        <div class="divider">
            <span>ou continue com</span>
        </div>

        <div class="social-login">
            <button class="social-btn">Google</button>
            <button class="social-btn">GitHub</button>
        </div>

        <p class="switch-text">
            Não tem uma conta? <a href="cadastroUsuario.php">Cadastre-se</a>
        </p>
    </div>
</body>
</html>