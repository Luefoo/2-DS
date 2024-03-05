<?php
  //escopo = alcance de variável
  $nome = "Rodrigo";

  function mostrarNome(){
    global $nome; // Para funcionar a variável "nome" no código todo
    $nome = "Maromo";
    echo "O nome dentro da função é $nome \n"; 
  }

  mostrarNome();

  echo "Nome fora da função: $nome \n";