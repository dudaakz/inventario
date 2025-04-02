<?php
session_start();


const USUARIO = 'Duda';
const SENHA_HASH = 'dudaakz'; 



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    $usuario = htmlspecialchars($_POST['usuario']); 
    $senha = $_POST['senha'];


   
       
        $_SESSION['logado'] = true;
        header('Location: inicio.php');
        exit();
    } else {
  
        $erro = "Usuário ou senha incorretos!";
    }

?>
<style>
        body {
            background-image: url('https://images6.alphacoders.com/108/1082090.jpg'); 
            background-size: cover;
            font-family: Arial, sans-serif;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }
        h1 {
            margin-top: 20px;
            font-size: 2em;
            text-shadow: 2px 2px 4px black;
        }
        .container {
            display: flex;
            align-items: center;
            gap: 20px;
            background-color: rgba(0, 0, 0, 0.96);
            padding: 20px;
            border-radius: 15px;
        }
        .inventory {
            display: grid;
            grid-template-columns: repeat(8, 80px);
            gap: 10px;
            padding: 20px;
        }
        .item {
            width: 80px;
            height: 80px;
            background-color: rgba(0, 0, 0, 0.97);
            border: 2px solid #ccc;
            border-radius: 10px;
            position: relative;
            cursor: pointer;
            transition: transform 0.2s;
        }
        .item:hover {
            transform: scale(1.1);
        }
        .item img {
            width: 100%;
            height: 100%;
            border-radius: 8px;
        }
        .tooltip {
            visibility: hidden;
            background-color: rgba(0, 0, 0, 0.97);
            color: #fff;
            text-align: center;
            border-radius: 5px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
        }
        .item:hover .tooltip {
            visibility: visible;
        }
    </style>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Minecraft</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5 text-center">
    <h2>FAÇA SEU LOGIN</h2>
    
    
    <img src="https://wallpapers.com/images/hd/beautiful-minecraft-pink-mountain-jeiwb83n9yvg474y.jpg" alt="Logo do Minecraft" class="mb-3" style="max-width: 350px;">
    
    
   
    <?php if (isset($erro)) echo "<p class='text-danger'>" . htmlspecialchars($erro) . "</p>"; ?>
    
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Usuário:</label>
            <input type="text" name="usuario" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Senha:</label>
            <input type="password" name="senha" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</body>
</html>
