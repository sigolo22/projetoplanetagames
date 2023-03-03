<?php
session_start(); //Inicia a session
session_destroy(); // Destroi a sessão limpando os valores salvos
header("Location: index.php");
exit; // Redireciona o visitante