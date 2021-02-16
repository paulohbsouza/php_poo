<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
    <h1>Aula 02</h1>

    <?php

    	require_once 'caneta.class.php';
    	require_once 'pessoa.class.php';

    	$c1 = new Caneta;
    	$c1->cor = "Azul";
    	$c1->ponta = 0.5;
    	//$c1->tampada = false;
    	$c1->destampar();
    	print_r($c1);
    	//$c1->rabiscar();

    	echo '</br>';

    	$c2 = new Caneta;
    	$c2->cor = "Verde";
    	$c2->carga = 50;
    	$c2->tampar();
    	print_r($c2);

    	echo '</br>';

    	$p1 = new Pessoa;
    	$p1->nome = "Paulo";
    	$p1->idade = 33;
    	$p1->voz = false;
    	$p1->falar();

    ?>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>