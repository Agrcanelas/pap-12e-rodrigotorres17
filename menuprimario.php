<?php
session_start();

/* Exemplo simples de utilizador
   (normalmente vem do login) */
if (!isset($_SESSION['utilizador'])) {
    $_SESSION['utilizador'] = "Utilizador";
}

/* Logout */
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mapa Interativo — Escola de Canelas</title>

<style>
body {
    margin: 0;
    font-family: Poppins, Arial, sans-serif;
    background: #fff5f5;
}

/* HEADER */
header {
    background: #b30000;
    color: white;
    padding: 18px 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 100;
}

/* Texto do header */
.header-title {
    font-size: 24px;
    font-weight: 600;
}

/* Área do utilizador */
.user-area {
    display: flex;
    align-items: center;
    gap: 15px;
}

/* Olá utilizador */
.user-name {
    background: rgba(255,255,255,0.15);
    padding: 8px 14px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 500;
}

/* Botão logout */
.logout-btn {
    background: white;
    color: #b30000;
    border: none;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.25s;
}

.logout-btn:hover {
    background: #ffe5e5;
    transform: scale(1.05);
}

/* CONTEÚDO */
h2 {
    color: #b30000;
    text-align: center;
    margin-top: 30px;
}

.container {
    padding: 20px;
}

/* GRELHA */
.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
    gap: 20px;
}

/* CARTÕES */
.card {
    background: white;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    cursor: pointer;
    transition: 0.25s;
}

.card:hover {
    transform: scale(1.04);
}

.card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
}

.card-title {
    padding: 15px;
    text-align: center;
    font-size: 18px;
    color: #b30000;
    font-weight: 600;
}
</style>
</head>

<body>

<header>
    <div class="header-title">
        Mapa Interativo — Escola de Canelas
    </div>

    <div class="user-area">
        <div class="user-name">
            👤 Olá, <?php echo htmlspecialchars($_SESSION['utilizador']); ?>
        </div>

        <form method="get">
            <button type="submit" name="logout" class="logout-btn">
                🔐 Logout
            </button>
        </form>
    </div>
</header>

<div class="container">

<h2>Destinos</h2>
<div class="grid">

<div class="card" onclick="location.href='biblioteca.php'">
    <img src="imgs/biblioteca.jpg">
    <div class="card-title">Biblioteca</div>
</div>

<div class="card" onclick="location.href='cantina.php'">
    <img src="imgs/cantina.jpg">
    <div class="card-title">Cantina</div>
</div>

<div class="card" onclick="location.href='radio.php'">
    <img src="imgs/radio.jpg">
    <div class="card-title">Rádio</div>
</div>

<div class="card" onclick="location.href='bar.php'">
    <img src="imgs/bar.jpg">
    <div class="card-title">Bar de Alunos</div>
</div>

<div class="card" onclick="location.href='pavilhao.php'">
    <img src="imgs/pavilhao.jpg">
    <div class="card-title">Pavilhão</div>
</div>

</div>

<h2>Blocos</h2>
<div class="grid">

<div class="card" onclick="location.href='blocos/blocoA.php'">
    <img src="imgs/blocoA.jpg">
    <div class="card-title">Bloco A</div>
</div>

<div class="card" onclick="location.href='blocos/blocoB.php'">
    <img src="imgs/blocoB.jpg">
    <div class="card-title">Bloco B</div>
</div>

<div class="card" onclick="location.href='blocos/blocoF.php'">
    <img src="imgs/blocoF.jpg">
    <div class="card-title">Bloco F</div>
</div>

<div class="card" onclick="location.href='blocos/blocoG.php'">
    <img src="imgs/blocoG.jpg">
    <div class="card-title">Bloco G</div>
</div>

</div>

</div>

</body>
</html>
