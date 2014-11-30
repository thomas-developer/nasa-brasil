<?php
 include_once "partes/header.php";
 if(!isset($_GET["link"]))
   include_once "partes/home.php"; // Conteúdo
 else {
   $link = limpaString($_GET["link"]);
   include_once "partes/$link";
 }
 include_once "partes/aside.php";
 include_once "partes/footer.php"; 

 // esta função evitará que pessoas
 // maliciosas "hackeiem" usando
 // injeção de comandos através
 // da url
 function limpaString($texto) {
   $texto = stripSlashes($texto);
   $texto = htmlEntities($texto);
   $texto = strip_tags($texto);
   return $texto;
 }
?>
