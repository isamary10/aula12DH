<?php
	// Incluindo $filmes
	include('./includes/filmes.php');

	// Incluindo $generos
	include('./includes/generos.php');

	$pos = $_GET['pos'];
	$filme = $filmes[$pos];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Turma da Mônica - Laços - Clube do Filme</title>

	<!-- Meu estilo -->
	<link rel="stylesheet" href="./assets/css/geral.css">
	<link rel="stylesheet" href="./assets/css/filme.css">
</head>

<body>
	<nav>
		<ul>
		<?php foreach($generos as $genero): ?>
			<li><a href="#"><?= $genero ?></a></li>
		<?php endforeach; ?>
		</ul>
		<form method="GET" action="busca.php">
			<input type="text" name="trecho">
			<button type="submit">Buscar</button>
		</form>
	</nav>
	<main>

		<h2>Nome do Filme</h2>
		<img src="./assets/img/cartazes/cartaz-0.png" alt="Título do filme" class="cartaz">
		<section>

			<div class="sinopse">
				<h5>Sinopse</h5>
				<div><?= $filme['sinopse'] ?></div>
			</div>

			<div class="censura">
				<h5>Censura</h5>
				<div>Livre</div>
			</div>
			
			<div class="critica">
				<h5>Crítica</h5>
				<div><?= $filme['critica'] ?></div>
			</div>
		</section>

		<iframe src="https://www.youtube.com/embed/wmiIUN-7qhE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</main>
</body>

</html>