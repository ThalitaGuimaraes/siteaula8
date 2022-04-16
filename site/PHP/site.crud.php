<?php
    require_once("conexao.php");

    function listaPortfolios()
    {
       $con=getConnection();

       $sql="SELECT * FROM portfolios";

       $result=$con->query($sql);

       $listaPortfolios=array();
       while($portfolio=$result->fetch(PDO::FETCH_OBJ))
       {
           array_push($listaPortfolios,$portfolio);
       }
       unset($con);
       unset($result);
       return $listaPortfolios;
    }
    function CadastrarPortfolios($imagem,$titulo,$descricao)
    {
      $con = getConnection();
      $sql = "INSERT INTO portfolios (imagem, titulo, descricao) VALUES (:imagem, :titulo, :descricao)";
      $result = $con->prepare($sql);
      $result->bindParam(":imagem", $imagem);
      $result->bindParam(":titulo", $titulo);
      $result->bindParam(":descricao", $descricao);
      $execute = $result->execute();
      unset($con);
      unset($result);
      if($execute)
          return true;
      return false;
    }
    function AtualizarPortfolios($id,$imagem,$titulo,$descricao)
    {
          $con = getConnection();
          $sql = "UPDATE portfolios SET imagem = :imagem, titulo =:titulo, descricao =:descricao WHERE id=:id";
          $result = $con->prepare($sql);
          $result->bindParam(":id", $id);
          $result->bindParam(":imagem", $imagem);
          $result->bindParam(":titulo", $titulo);
          $result->bindParam(":descricao", $descricao);
          $execute = $result->execute();
          unset($con);
          unset($result);
          if($execute)
              return true;
              return false;
    }
    function DeletarPortfolios($id)
    {
      $con = getConnection();
      $sql = "DELETE FROM portfolios WHERE id = :id";
      $result = $con->prepare($sql);
      $result->bindParam(":id", $id);
      $execute = $result->execute();
      unset($con);
      unset($result);
      if($execute)
          return true;
      return false;
    }
    function localizarPortfoliosPeloID($id)
    {
       $con=getConnection();
       $sql= "SELECT * FROM portfolios WHERE id = :id";
       $result = $con->prepare($sql);
       $result->bindParam(":id",$id);
       $execute = $result->execute();
       $portfolio = $result->fetch(PDO::FETCH_OBJ);
       unset($con);
       unset($result);
       return $portfolio;
    }
