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
        
        <h2>Criar sua conta</h2>
        <p class="subtitle">Preencha seus dados para começar</p>

        <form id="signupForm">
            <div class="input-group">
                <label for="signupName">Nome completo</label>
                <input type="text" id="signupName" placeholder="João Silva" required>
            </div>

            <div class="input-group">
                <label for="signupEmail">E-mail</label>
                <input type="email" id="signupEmail" placeholder="seu@email.com" required>
            </div>

            <div class="row">
                <div class="input-group">
                    <label for="signupBirth">Data de nascimento</label>
                    <input type="date" id="signupBirth" required>
                </div>

                <div class="input-group">
                    <label for="signupEducation">Escolaridade</label>
                    <select id="signupEducation" required>
                        <option value="">Selecione...</option>
                        <optgroup label="Ensino Fundamental">
                            <option value="fundamental-cursando">Cursando</option>
                            <option value="fundamental-incompleto">Incompleto</option>
                            <option value="fundamental-completo">Completo</option>
                        </optgroup>
                        <optgroup label="Ensino Médio">
                            <option value="medio-cursando">Cursando</option>
                            <option value="medio-incompleto">Incompleto</option>
                            <option value="medio-completo">Completo</option>
                        </optgroup>
                        <optgroup label="Ensino Superior">
                            <option value="superior-cursando">Cursando</option>
                            <option value="superior-incompleto">Incompleto</option>
                            <option value="superior-completo">Completo</option>
                        </optgroup>
                        <optgroup label="Pós-graduação">
                            <option value="pos-cursando">Cursando</option>
                            <option value="pos-incompleto">Incompleto</option>
                            <option value="pos-completo">Completo</option>
                        </optgroup>
                        <optgroup label="Mestrado">
                            <option value="mestrado-cursando">Cursando</option>
                            <option value="mestrado-incompleto">Incompleto</option>
                            <option value="mestrado-completo">Completo</option>
                        </optgroup>
                        <optgroup label="Doutorado">
                            <option value="doutorado-cursando">Cursando</option>
                            <option value="doutorado-incompleto">Incompleto</option>
                            <option value="doutorado-completo">Completo</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="input-group">
                <label for="signupPassword">Senha</label>
                <input type="password" id="signupPassword" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn-primary">Criar conta</button>
        </form>

        <p class="switch-text" style="margin-top: 24px;">
            Já tem uma conta? <a href="login.php">Faça login</a>
        </p>
    </div>
</body>
</html>