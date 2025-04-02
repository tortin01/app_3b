<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login - Contabilidade</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            margin: 0;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            width: 400px;
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
            border-top: 5px solid #1e3c72;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            color: #1e3c72;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input:focus {
            border-color: #2a5298;
            outline: none;
            box-shadow: 0 0 10px rgba(42, 82, 152, 0.5);
        }

        button {
            width: 100%;
            padding: 14px;
            margin: 10px 0;
            border: none;
            background: #1e3c72;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.3s;
        }

        button:hover {
            background: #2a5298;
        }

        .btn-secondary {
            background: #6c757d;
        }

        .btn-secondary:hover {
            background: #5a6268;
        }

        .container a {
            display: block;
            margin-top: 10px;
            color: #1e3c72;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container" id="login-container">
        <h2>Login - Contabilidade</h2>
        <input type="text" placeholder="CPF">
        <input type="password" placeholder="Senha">
        <button onclick="login()">Entrar</button>
        <button class="btn-secondary" onclick="showRecover()">Recuperar Senha</button>
        <button class="btn-secondary" onclick="showRegister()">Criar Conta</button>
    </div>

    <div class="container" id="recover-container" style="display:none;">
        <h2>Recuperar Senha</h2>
        <input type="text" placeholder="CPF">
        <button onclick="showResetPassword()">Enviar</button>
        <button class="btn-secondary" onclick="showLogin()">Voltar</button>
    </div>

    <div class="container" id="reset-password-container" style="display:none;">
        <h2>Redefinir Senha</h2>
        <input type="password" placeholder="Nova Senha">
        <input type="password" placeholder="Confirmar Senha">
        <button onclick="resetPassword()">Enviar</button>
        <button class="btn-secondary" onclick="showLogin()">Fazer Login</button>
    </div>

    <div class="container" id="register-container" style="display:none;">
        <h2>Criar Conta</h2>
        <input type="text" placeholder="Nome">
        <input type="text" placeholder="CPF">
        <input type="email" placeholder="E-mail">
        <input type="tel" placeholder="Telefone">
        <input type="password" placeholder="Senha">
        <input type="password" placeholder="Confirmar Senha">
        <button onclick="register()">Cadastrar</button>
        <button class="btn-secondary" onclick="showLogin()">Voltar</button>
    </div>

    <script src="script.js"></script>
</body>
</html>