<?php
session_start();

if (!isset($_SESSION['utilizador'])) $_SESSION['utilizador'] = "Utilizador";
if (!isset($_SESSION['tipo'])) $_SESSION['tipo'] = "utilizador";

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
<title>Mapa Interativo - Escola de Canelas</title>
<style>
body{margin:0;font-family:Poppins,Arial,sans-serif;background:#fff5f5;}
header{
background:#b30000;color:white;padding:15px 25px;
display:flex;justify-content:space-between;align-items:center;
position:sticky;top:0;z-index:1000;
}
.header-title{font-size:24px;font-weight:700;}
.user-area{display:flex;gap:10px;align-items:center;}
.user-area a,.logout-btn,.user-name{
padding:10px 16px;border-radius:25px;text-decoration:none;border:none;
font-weight:600;
}
.user-name{background:rgba(255,255,255,.15);color:white;}
.profile-btn{background:white;color:#b30000;}
.admin-btn{background:gold;color:#7a0000;}
.logout-btn{background:white;color:#b30000;cursor:pointer;}

.mapa-container{
max-width:1400px;
margin:20px auto;
position:relative;
padding:10px;
}

.mapa{
width:100%;
display:block;
border-radius:20px;
box-shadow:0 5px 20px rgba(0,0,0,.2);
}

.hotspot{
position:absolute;
border-radius:12px;
transition:.25s;
}

.hotspot:hover{
background:rgba(255,0,0,.25);
border:2px solid #b30000;
}

.label{
opacity:0;
position:absolute;
top:-30px;
left:50%;
transform:translateX(-50%);
background:#b30000;
color:white;
padding:5px 10px;
border-radius:8px;
font-size:13px;
white-space:nowrap;
}

.hotspot:hover .label{opacity:1;}
</style>
</head>
<body>

<header>
<div class="header-title">🏫 Escola de Canelas</div>

<div class="user-area">
<div class="user-name">👤 Olá, <?php echo htmlspecialchars($_SESSION['utilizador']); ?></div>

<a href="perfil.php" class="profile-btn">⚙ Perfil</a>

<?php if($_SESSION['tipo']=="admin"): ?>
<a href="admin.php" class="admin-btn">👑 Admin</a>
<?php endif; ?>

<form method="get">
<button class="logout-btn" name="logout">🔐 Logout</button>
</form>
</div>
</header>

<div class="mapa-container">

<img src="imgs/planta_editada.png" class="mapa">

<!-- Biblioteca -->
<a href="biblioteca.php" class="hotspot" style="left:57%;top:18%;width:12%;height:10%;">
<div class="label">Biblioteca</div>
</a>

<!-- Bloco G -->
<a href="blocos/blocoG.php" class="hotspot" style="left:48%;top:28%;width:13%;height:13%;">
<div class="label">Bloco G</div>
</a>

<!-- Cantina -->
<a href="cantina.php" class="hotspot" style="left:70%;top:18%;width:12%;height:10%;">
<div class="label">Cantina</div>
</a>

<!-- Bloco F -->
<a href="blocos/blocoF.php" class="hotspot" style="left:40%;top:38%;width:18%;height:20%;">
<div class="label">Bloco F</div>
</a>

<!-- Bloco B -->
<a href="blocos/blocoB.php" class="hotspot" style="left:60%;top:45%;width:15%;height:13%;">
<div class="label">Bloco B</div>
</a>

<!-- Bloco A -->
<a href="blocos/blocoA.php" class="hotspot" style="left:60%;top:62%;width:15%;height:12%;">
<div class="label">Bloco A</div>
</a>

<!-- Pavilhão -->
<a href="pavilhao.php" class="hotspot" style="left:48%;top:78%;width:24%;height:12%;">
<div class="label">Pavilhão</div>
</a>

</div>

</body>
</html>
