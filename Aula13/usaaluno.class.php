<?php
   include_once 'Aluno.class.php';

   $fulano = new Aluno("Godofredo",10,7);

   $nota1 = $fulano->getNota1();
   $nota2 = $fulano->getNota2();
   //echo $nota1;




   $nome = $fulano->getNome();
   echo "nome: ". $nome."<br>";
   $media = $fulano->CalculaMedia($nota1,$nota2);
   echo "media: ". $media ."<br>";
   $situacao = $fulano->VerificarSituacao($media);
   echo "situação: ". $situacao."<br>";


?>