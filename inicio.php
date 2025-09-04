<!DOCTYPE html> 
<html lang="es"> 
<head>
<meta charset="UTF-8">
<title>Facebook</title>
<link rel="stylesheet" href="style.css">

<style>
body { margin:0; font-family: Arial, sans-serif; 
       background:#f0f2f5; 
     }
header { background:#1877f2;
         color:white;
         padding:10px 20px;
         display:flex;
         align-items:center;
         justify-content:space-between; 
        }
header .logo { font-size:24px;
             font-weight:bold; 
        }
.contenedor { display:flex; 
              margin:20px; 
            } 
.sidebar { width:25%; 
           padding:10px; 
         } 
.contenido { width:50%; 
           } 
.post { background:white;
         padding:15px;
         border-radius:8px;
         margin-bottom:15px;
         box-shadow:0 1px 2px rgba(0,0,0,0.1); 
       } 
.post h3 { margin:0;
           font-size:16px;
           color:#1877f2; 
        }
.post p { margin-top:10px; 
        } 
</style>
</head>


<body>
    <header>
       <div class="logo">facebook</div>
       <input type="text" placeholder="Buscar en Facebook" style="padding:5px; border-radius:20px; border:none; width:200px;">
       <div>🔔 💬 👤</div> 
    </header> 
    
<div class="contenedor"> 
<div class="sidebar">
    <p><b>Inicio</b></p> <p>Amigos</p>
    <p>Grupos</p> <p>Marketplace</p>
    <p>Watch</p> 
</div> 

<div class="contenido">
     <div class="post"> 
    <h3>Juan Pérez</h3>
    <p>Hoy es un gran día ☀️</p>
</div> 

<div class="post"> 
    <h3>Ana López</h3>
    <p>Les comparto mi nueva foto de perfil 📸</p>
</div>

<div class="post"> 
    <h3>Pedro Ramírez</h3> 
    <p>¿Quién se apunta para salir este fin de semana? 😎</p> 
</div> 

</div> <div class="sidebar">
     <p><b>Contactos</b></p>
     <p>María Gómez 🟢</p>
     <p>Carlos Ruiz 🟢</p>
     <p>Lucía Fernández 🟢</p>
</div> 
</div> 
</body> 



</html>