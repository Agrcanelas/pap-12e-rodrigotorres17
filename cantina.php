<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cantina — Escola de Canelas</title>

<style>
body {
    margin: 0;
    font-family: Poppins, Arial, sans-serif;
    background: #fff5f5;
    color: #333;
}

/* HEADER */
header {
    background: #b30000;
    color: white;
    padding: 25px;
    text-align: center;
    font-size: 26px;
    font-weight: 600;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

/* CONTEÚDO */
.container {
    padding: 25px;
    max-width: 1100px;
    margin: auto;
}

/* IMAGEM */
.hero {
    width: 100%;
    max-height: 110vh;
    border-radius: 30px;
    overflow: hidden;
    box-shadow: 0 6px 16px rgba(0,0,0,0.25);
    margin-bottom: 30px;
}

.hero img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 18px;
}

/* DESCRIÇÃO */
.description {
    background: white;
    padding: 25px;
    border-radius: 18px;
    font-size: 18px;
    line-height: 1.6;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    margin-bottom: 30px;
}

/* BOTÕES */
.buttons {
    margin-top: 30px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}

.btn {
    background: #b30000;
    color: white;
    padding: 16px;
    font-size: 18px;
    border: none;
    border-radius: 14px;
    cursor: pointer;
    transition: 0.25s;
}

.btn:hover {
    background: #d60000;
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(179,0,0,0.4);
}

/* SECÇÕES */
.info-section {
    background: white;
    padding: 20px;
    border-radius: 14px;
    margin-top: 20px;
    font-size: 17px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    display: none;
}

.info-section h3 {
    color: #b30000;
}

/* VOLTAR */
.back {
    margin-top: 35px;
    text-align: center;
}

.back button {
    background: transparent;
    color: #b30000;
    border: 2px solid #b30000;
    padding: 14px 30px;
    font-size: 18px;
    border-radius: 14px;
    cursor: pointer;
    transition: 0.25s;
}

.back button:hover {
    background: #b30000;
    color: white;
}
</style>
</head>

<body>

<header>🍽️ Cantina Escolar</header>

<div class="container">

    <div class="hero">
        <img src="imgs/cantinafoto.jpg" alt="Cantina da Escola de Canelas">
    </div>

    <div class="description">
        A cantina da Escola de Canelas disponibiliza refeições equilibradas e variadas para toda a comunidade escolar.
        O espaço foi concebido para proporcionar conforto e qualidade durante as refeições dos alunos, professores e funcionários.
    </div>

    <div class="buttons">
        <button class="btn" onclick="showInfo('horario')">⏰ Horário</button>
        <button class="btn" onclick="showInfo('ementa')">📋 Ementa</button>
        <button class="btn" onclick="showInfo('precos')">💰 Preços</button>
        <button class="btn" onclick="showInfo('contactos')">📞 Contactos</button>
    </div>

    <div id="horario" class="info-section">
        <h3>Horário de Funcionamento</h3>
        <p>
            Pequeno-almoço: 08:00 - 10:00<br>
            Almoço: 12:00 - 14:30<br>
            Lanche: 15:30 - 17:00
        </p>
    </div>

    <div id="ementa" class="info-section">
        <h3>Ementa da Semana</h3>

        <p><strong>Segunda-feira</strong><br>
        Sopa de legumes<br>
        Frango assado com arroz<br>
        Fruta da época</p>

        <p><strong>Terça-feira</strong><br>
        Creme de cenoura<br>
        Pescada cozida com batata<br>
        Gelatina</p>

        <p><strong>Quarta-feira</strong><br>
        Sopa juliana<br>
        Massa à bolonhesa<br>
        Maçã</p>

        <p><strong>Quinta-feira</strong><br>
        Creme de abóbora<br>
        Hambúrguer no prato com arroz<br>
        Iogurte</p>

        <p><strong>Sexta-feira</strong><br>
        Sopa de legumes<br>
        Filetes de peixe com arroz de tomate<br>
        Pera</p>
    </div>

    <div id="precos" class="info-section">
        <h3>Preços</h3>
        <ul>
            <li>Refeição completa (Aluno): 1,46€</li>
            <li>Refeição completa (Professor): 4,20€</li>
            <li>Sopa: 0,50€</li>
            <li>Sobremesa extra: 0,60€</li>
            <li>Água: 0,50€</li>
        </ul>
    </div>

    <div id="contactos" class="info-section">
        <h3>Contactos</h3>
        <p>
            Telefone: +351 227 000 000<br>
            Email: cantina@aecan.pt
        </p>
    </div>

    <div class="back">
        <button onclick="location.href='menuprimario.php'">
            ⬅ Voltar ao menu
        </button>
    </div>

</div>

<script>
function showInfo(sectionId) {

    const sections = document.querySelectorAll('.info-section');

    sections.forEach(sec => {
        sec.style.display = 'none';
    });

    const selected = document.getElementById(sectionId);

    if(selected){
        selected.style.display = 'block';
        selected.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}
</script>

</body>
</html>