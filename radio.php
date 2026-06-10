```html
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rádio Escolar — Escola de Canelas</title>

<style>
body{
    margin:0;
    font-family:Poppins,Arial,sans-serif;
    background:#fff5f5;
    color:#333;
}

header{
    background:#b30000;
    color:white;
    padding:25px;
    text-align:center;
    font-size:28px;
    font-weight:600;
    box-shadow:0 4px 10px rgba(0,0,0,.2);
}

.container{
    max-width:1200px;
    margin:auto;
    padding:25px;
}

.hero{
    overflow:hidden;
    border-radius:25px;
    box-shadow:0 6px 16px rgba(0,0,0,.25);
    margin-bottom:30px;
}

.hero img{
    width:100%;
    display:block;
}

.description{
    background:white;
    padding:25px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 4px 12px rgba(0,0,0,.15);
    margin-bottom:30px;
}

.description h2{
    color:#b30000;
    margin-top:0;
}

.menu-radio{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
    gap:25px;
}

.card{
    background:white;
    border-radius:20px;
    padding:30px;
    text-align:center;
    cursor:pointer;
    transition:.3s;
    border-top:6px solid #b30000;
    box-shadow:0 6px 16px rgba(0,0,0,.12);
}

.card:hover{
    transform:translateY(-8px);
    box-shadow:0 12px 25px rgba(179,0,0,.25);
}

.emoji{
    font-size:55px;
}

.card h3{
    color:#b30000;
    margin:15px 0 10px;
}

.info-section{
    display:none;
    background:white;
    margin-top:25px;
    padding:25px;
    border-radius:20px;
    box-shadow:0 4px 12px rgba(0,0,0,.15);
}

.info-section h3{
    color:#b30000;
    margin-top:0;
}

.back{
    text-align:center;
    margin-top:40px;
}

.back button{
    background:transparent;
    color:#b30000;
    border:2px solid #b30000;
    padding:14px 30px;
    border-radius:14px;
    font-size:18px;
    cursor:pointer;
    transition:.3s;
}

.back button:hover{
    background:#b30000;
    color:white;
}
</style>
</head>

<body>

<header>
📻 Rádio Escolar
</header>

<div class="container">

<div class="hero">
    <img src="imgs/radiofoto.jpg" alt="Rádio Escolar">
</div>

<div class="description">
    <h2>Bem-vindo à Rádio Escolar</h2>

    <p>
        A Rádio Escolar é um espaço de comunicação, criatividade e partilha.
        Aqui os alunos desenvolvem competências de locução, edição de áudio,
        jornalismo e trabalho em equipa.
    </p>
</div>

<div class="menu-radio">

    <div class="card" onclick="showInfo('programacao')">
        <div class="emoji">🕒</div>
        <h3>Programação</h3>
        <p>Horários das emissões.</p>
    </div>

    <div class="card" onclick="showInfo('programas')">
        <div class="emoji">🎙️</div>
        <h3>Programas</h3>
        <p>Conhece os programas da rádio.</p>
    </div>

    <div class="card" onclick="showInfo('equipa')">
        <div class="emoji">👥</div>
        <h3>Equipa</h3>
        <p>Alunos e professores responsáveis.</p>
    </div>

    <div class="card" onclick="showInfo('equipamentos')">
        <div class="emoji">🎧</div>
        <h3>Equipamentos</h3>
        <p>Material utilizado na rádio.</p>
    </div>

    <div class="card" onclick="showInfo('contactos')">
        <div class="emoji">📞</div>
        <h3>Contactos</h3>
        <p>Informações de contacto.</p>
    </div>

</div>

<div id="programacao" class="info-section">
    <h3>🕒 Programação Semanal</h3>

    Segunda a Sexta<br><br>

    10:00 — Notícias da Escola<br>
    11:30 — Música da Semana<br>
    13:00 — Entrevistas<br>
    15:00 — Pedido de Músicas<br>
    16:30 — Encerramento
</div>

<div id="programas" class="info-section">
    <h3>🎙️ Programas</h3>

    • Notícias da Escola<br>
    • Voz dos Alunos<br>
    • Top Hits da Semana<br>
    • Curiosidades Tecnológicas<br>
    • Entrevistas Especiais
</div>

<div id="equipa" class="info-section">
    <h3>👥 Equipa da Rádio</h3>

    Diretor: Professor João Silva<br>
    Locutores: Alunos do Ensino Secundário<br>
    Técnicos de Som: Clube de Informática<br>
    Jornalistas: Clube de Comunicação
</div>

<div id="equipamentos" class="info-section">
    <h3>🎧 Equipamentos</h3>

    • Mesa de mistura digital<br>
    • Microfones profissionais<br>
    • Auscultadores de estúdio<br>
    • Computadores de edição áudio<br>
    • Sistema de transmissão interna
</div>

<div id="contactos" class="info-section">
    <h3>📞 Contactos</h3>

    Email: radio@aecan.pt<br>
    Telefone: +351 227 000 001
</div>

<div class="back">
    <button onclick="location.href='menuprimario.php'">
        ⬅ Voltar ao Menu
    </button>
</div>

</div>

<script>
function showInfo(sectionId){

    const sections=document.querySelectorAll('.info-section');

    sections.forEach(section=>{
        section.style.display='none';
    });

    const selected=document.getElementById(sectionId);

    if(selected){
        selected.style.display='block';

        selected.scrollIntoView({
            behavior:'smooth',
            block:'start'
        });
    }
}
</script>

</body>
</html>
```
