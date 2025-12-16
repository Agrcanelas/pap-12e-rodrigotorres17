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
    color: #333;
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
    z-index: 20;
}

h2 {
    color: #b30000;
    text-align: center;
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
    height: 140px;
    object-fit: cover;
}

.card-title {
    padding: 15px;
    text-align: center;
    font-size: 18px;
    color: #b30000;
    font-weight: 600;
}

/* Aba detalhe */
.detail {
    display: none;
    background: white;
    padding: 25px;
    border-radius: 14px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.detail img {
    width: 100%;
    max-height: 220px;
    object-fit: cover;
    border-radius: 12px;
    margin-bottom: 15px;
}

.back-btn {
    margin-top: 20px;
    background: #b30000;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 10px;
    font-size: 16px;
    cursor: pointer;
}

.back-btn:hover {
    background: #d60000;
}
</style>
</head>
<body>

<header>Mapa Interativo — Escola de Canelas</header>

<div class="container" id="menu">

<h2>Destinos</h2>
<div class="grid">
    <div class="card" onclick="abrir('biblioteca')">
        <img src="imgs/biblioteca.jpg">
        <div class="card-title">Biblioteca</div>
    </div>

    <div class="card" onclick="abrir('cantina')">
        <img src="imgs/cantina.jpg">
        <div class="card-title">Cantina</div>
    </div>

    <div class="card" onclick="abrir('radio')">
        <img src="imgs/radio.jpg">
        <div class="card-title">Rádio</div>
    </div>

    <div class="card" onclick="abrir('bar')">
        <img src="imgs/bar.jpg">
        <div class="card-title">Bar de Alunos</div>
    </div>

    <div class="card" onclick="abrir('pavilhao')">
        <img src="imgs/pavilhao.jpg">
        <div class="card-title">Pavilhão</div>
    </div>
</div>

<h2>Blocos</h2>
<div class="grid">
    <div class="card" onclick="abrir('blocoA')">
        <img src="imgs/blocoA.jpg">
        <div class="card-title">Bloco A</div>
    </div>

    <div class="card" onclick="abrir('blocoB')">
        <img src="imgs/blocoB.jpg">
        <div class="card-title">Bloco B</div>
    </div>

    <div class="card" onclick="abrir('blocoF')">
        <img src="imgs/blocoF.jpg">
        <div class="card-title">Bloco F</div>
    </div>

    <div class="card" onclick="abrir('blocoG')">
        <img src="imgs/blocoG.jpg">
        <div class="card-title">Bloco G</div>
    </div>
</div>

</div>

<!-- DETALHES -->
<div class="container">

<div id="biblioteca" class="detail">
    <h2>Biblioteca</h2>
    <img src="imgs/biblioteca.jpg">
    <p>Espaço de estudo, leitura e trabalho em grupo.</p>
    <button class="back-btn" onclick="voltar()">Voltar</button>
</div>

<div id="cantina" class="detail">
    <h2>Cantina</h2>
    <img src="imgs/cantina.jpg">
    <p>Local das refeições dos alunos.</p>
    <button class="back-btn" onclick="voltar()">Voltar</button>
</div>

<div id="radio" class="detail">
    <h2>Rádio Escolar</h2>
    <img src="imgs/radio.jpg">
    <p>Espaço de comunicação e criatividade.</p>
    <button class="back-btn" onclick="voltar()">Voltar</button>
</div>

<div id="bar" class="detail">
    <h2>Bar de Alunos</h2>
    <img src="imgs/bar.jpg">
    <p>Zona de convívio dos estudantes.</p>
    <button class="back-btn" onclick="voltar()">Voltar</button>
</div>

<div id="pavilhao" class="detail">
    <h2>Pavilhão</h2>
    <img src="imgs/pavilhao.jpg">
    <p>Atividades físicas e desportivas.</p>
    <button class="back-btn" onclick="voltar()">Voltar</button>
</div>

<div id="blocoA" class="detail">
    <h2>Bloco A</h2>
    <p>Piso: A0</p>
    <button class="back-btn" onclick="voltar()">Voltar</button>
</div>

<div id="blocoB" class="detail">
    <h2>Bloco B</h2>
    <p>Pisos: B0, B1</p>
    <button class="back-btn" onclick="voltar()">Voltar</button>
</div>

<div id="blocoF" class="detail">
    <h2>Bloco F</h2>
    <p>Pisos: F1, F0, F-1, F-2</p>
    <button class="back-btn" onclick="voltar()">Voltar</button>
</div>

<div id="blocoG" class="detail">
    <h2>Bloco G</h2>
    <p>Pisos: G1, G0, G-1</p>
    <button class="back-btn" onclick="voltar()">Voltar</button>
</div>

</div>

<script>
function abrir(id) {
    document.getElementById("menu").style.display = "none";
    document.querySelectorAll(".detail").forEach(d => d.style.display = "none");
    document.getElementById(id).style.display = "block";
    window.scrollTo(0,0);
}

function voltar() {
    document.getElementById("menu").style.display = "block";
    document.querySelectorAll(".detail").forEach(d => d.style.display = "none");
    window.scrollTo(0,0);
}
</script>

</body>
</html>
