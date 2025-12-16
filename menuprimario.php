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

header {
    background: #b30000;
    color: white;
    padding: 20px;
    text-align: center;
    font-size: 24px;
    font-weight: 600;
    position: sticky;
    top: 0;
}

h2 {
    color: #b30000;
    text-align: center;
    margin-top: 30px;
}

.container {
    padding: 20px;
}

.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
    gap: 20px;
}

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

<header>Mapa Interativo — Escola de Canelas</header>

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
