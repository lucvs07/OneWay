<?php

function gerar_senha($tamanho, $maiusculas, $minusculas, $numeros){
    $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
    $mi = "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
    $nu = "0123456789"; // $nu contem os números
  
    if ($maiusculas){
          // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
          $senha .= str_shuffle($ma);
    }
  
      if ($minusculas){
          // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
          $senha .= str_shuffle($mi);
      }
  
      if ($numeros){
          // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
          $senha .= str_shuffle($nu);
      }
  
      // retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
      return substr(str_shuffle($senha),0,$tamanho);
  }

  echo gerar_senha(6, true, true, true);
  echo "<br> ".gerar_senha(10, true, true, true);

?>