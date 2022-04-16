<?php
  require_once("site.crud.php");
    
  $id=$_GET['id'];
  if(DeletarPortfolios($id))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: portfolio.list.php?error=true');
    exit;
