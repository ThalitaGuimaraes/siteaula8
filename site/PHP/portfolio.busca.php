<?php

    include_once('site.crud.php');

    session_start();

    if(filter_input(INPUT_GET, 'id') !==null) {
        $id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $_SESSION['portfolio_dados'] = localizarPortfoliosPeloID($id);
    } else {
        $_SESSION['portfolio_lista'] = listaPortfolios(); 
    }

    ?>   