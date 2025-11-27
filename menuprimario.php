<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Percursos da Escola</title>
<style>
body {
font-family: Arial, sans-serif;
background: #f0f0f0;
margin: 0;
padding: 20px;
}


h1 {
text-align: center;
margin-bottom: 30px;
}


.section {
background: white;
padding: 20px;
margin-bottom: 25px;
border-radius: 12px;
box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}


.buttons {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
gap: 15px;
margin-top: 15px;
}


button {
padding: 15px;
border: none;
border-radius: 10px;
background: #0055aa;
color: white;
font-size: 16px;
cursor: pointer;
transition: 0.2s;
}
button:hover {
background: #0077dd;
}
</style>
</head>
<body>
<h1>Percursos da Escola</h1>


<div class="section">
<h2>Destinos</h2>
<div class="buttons">
<button onclick="alert('Percurso para a Biblioteca')">Biblioteca</button>
<button onclick="alert('Percurso para a Cantina')">Cantina</button>
<button onclick="alert('Percurso para a Rádio')">Rádio</button>
<button onclick="alert('Percurso para o Bar de Alunos')">Bar Alunos</button>
<button onclick="alert('Percurso para o Pavilhão')">Pavilhão</button>
</div>
</div>


<div class="section">
<h2>Blocos</h2>
<div class="buttons">
<button onclick="mostrarBloco('A')">Bloco A</button>
<button onclick="mostrarBloco('B')">Bloco B</button>
<button onclick="mostrarBloco('F')">Bloco F</button>
<button onclick="mostrarBloco('G')">Bloco G</button>
</div>
</div>


<div class="section" id="pisos"></div>


<script>
function mostrarBloco(bloco) {
let container = document.getElementById('pisos');
let html = `<h2>Pisos do Bloco ${bloco}</h2>`;


let pisos = [];
if (bloco === 'A') pisos = ['A0'];
if (bloco === 'B') pisos = ['B0','B1'];
if (bloco === 'F') pisos = ['F1','F0','F-1','F-2'];
if (bloco === 'G') pisos = ['G1','G0','G-1'];


html += '<div class="buttons">';
pisos.forEach(p => {
html += `<button onclick=\"alert('Abrir salas do piso ${p}')\">${p}</button>`;
});
html += '</div>';


</html>