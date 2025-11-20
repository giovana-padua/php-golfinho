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

    <div class="form-container">
        <div class="logo">
            <div class="logo-icon">🐬</div>
        </div>
        
        <a class="back-link" href="login.php">Voltar para o login</a>
        
        <h2>Recuperar senha</h2>
        <p class="subtitle">Digite seu e-mail para receber as instruções</p>

        <div class="info-box">
            Enviaremos um link de recuperação para o seu e-mail cadastrado. Verifique também sua caixa de spam.
        </div>

        <form id="forgotForm">
            <div class="input-group">
                <label for="forgotEmail">E-mail</label>
                <input type="email" id="forgotEmail" placeholder="seu@email.com" required>
            </div>

            <button type="submit" class="btn-primary">Enviar link de recuperação</button>
        </form>
    </div>
</body>
</html>