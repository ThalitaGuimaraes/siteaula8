<?php
  require_once("site.crud.php");
    
  $imagem=$_POST['inputImagem'];
  $titulo=$_POST['inputTitulo'];
  $descricao=$_POST['inputDescricao'];
  if(CadastrarPortfolios($imagem, $titulo, $descricao))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: portfolio.form.php?error=true');
    exit;