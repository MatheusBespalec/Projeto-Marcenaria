<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,600;1,400&display=swap" rel="stylesheet">
		<title>Site_Institucional_01</title>
		<!--Meta Tags-->
		<meta charset="utf-8">
		<meta name="author" content="Matheus Bespalec">
		<meta name="robots" content="noindex,nofollow">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
	</head>
	<body>
		<header>
			<div class="layer"></div><!--layer-->
			<div class="container">
			<div class="wraper-menu">
			<div class="logo">Logomarca</div><!--logo-->
			<div class="menu"><i class="fa fa-bars"></i></div><!--menu-->
			<nav class="desktop">
				<ul>
					<li><a href="home">Home</a></li>
					<li><a href="sobre">Sobre</a></li>
					<li><a href="servicos">Serviços</a></li>
					<li><a href="contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div><!--clear-->
			</div><!--wraper-menu-->
			<nav class="mobile">
				<ul>
					<li><a href="home">Home</a></li>
					<li><a href="sobre">Sobre</a></li>
					<li><a href="servicos">Serviços</a></li>
					<li><a href="contato">Contato</a></li>
				</ul>
			</nav>
			<div class="text-header">
				<h2>Lorem Ipsum Dolor</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in ligula lobortis libero vestibulum placerat vitae ut tellus.Nullam in pharetra sapien, ac vulputate eros. Sed finibus turpis eros, id bibendum dolor placerat ut.</p>
			</div><!--text-header-->
			</div><!--container-->
		</header>

		<section class="sobre">
			<div class="container">
				<h2>Sobre a Lorem Ipsum</h2>
				<img src="images/mokup.jpg">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in ligula lobortis libero vestibulum placerat vitae ut tellus. Nullam in pharetra sapien, ac vulputate eros. Sed finibus turpis eros, id bibendum dolor placerat ut. Ut risus nibh, placerat vitae ante in, congue consectetur massa. Proin quis convallis arcu. Maecenas ornare odio pharetra nisl imperdiet, in dictum lacus sodales. Nulla fringilla vel nunc quis maximus. Suspendisse neque leo, consectetur quis purus vitae, posuere ultricies ligula.
				</p>

				<p>
					Nam iaculis lorem ac sodales malesuada. Suspendisse iaculis pulvinar velit, vel blandit quam porttitor et. Sed dictum ligula sit amet leo commodo sagittis. Sed imperdiet venenatis elit non consectetur. Cras vehicula est augue, quis tristique metus cursus nec. Donec convallis tellus non lorem iaculis, ac aliquam turpis cursus. Suspendisse in eros ipsum.Vestibulum ac pulvinar ligula, eu volutpat odio. Maecenas interdum dui eu dui consectetur, at aliquam nibh tincidunt. Suspendisse potenti.
				</p>
				<div class="clear"></div><!--clear-->
			</div><!--container-->
		</section><!--sobre-->

		<section class="servicos">
			<div class="container">
				<h2>Nossos Servicos</h2>
				<h3>Em que podemos te ajudar?</h3>

				<div class="flex-serv">
				<div class="servicos-single">
					<div class="wraper-el">
					<div class="servico-icon">
						<i class="fas fa-chart-pie"></i>
						<p>Lorem Ipsum</p>
					</div><!--servico-icon-->
					<div class="servico-text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in ligula lobortis libero vestibulum placerat vitae ut tellus. Nullam in pharetra sapien, ac vulputate eros.
					</div><!--servico-text-->
				</div>
				</div><!--servicos-single-->

				<div class="servicos-single">
					<div class="wraper-el">
					<div class="servico-icon">
						<i class="fas fa-hands-helping"></i>
						<p>Lorem Ipsum</p>
					</div><!--servico-icon-->
					<div class="servico-text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in ligula lobortis libero vestibulum placerat vitae ut tellus. Nullam in pharetra sapien, ac vulputate eros.
					</div><!--servico-text-->
				</div>
				</div><!--servicos-single-->

				<div class="servicos-single">
					<div class="wraper-el">
					<div class="servico-icon">
						<i class="fas fa-tools"></i>
						<p>Lorem Ipsum</p>
					</div><!--servico-icon-->
					<div class="servico-text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in ligula lobortis libero vestibulum placerat vitae ut tellus. Nullam in pharetra sapien, ac vulputate eros.
					</div><!--servico-text-->
				</div>
				</div><!--servicos-single-->
				<div class="clear"></div><!--clear-->
				</div><!--flex-serv-->

			</div><!--container-->
		</section><!--servicos-->

		<section class="contato">
			<div class="layer"></div><!--layer-->
			<div class="container">
				<h2>Duvida ou Orçamento?</h2>
				<h3>Entre em Contato</h3>
				<form method="post">
					<div class="form-group">
						<input type="text" name="nome" required>
						<span>Nome</span>
					</div><!--form-group-->

					<div class="form-group">
						<input type="text" name="telefone" required>
						<span>Telefone</span>
					</div><!--form-group-->

					<div class="form-group">
						<input type="text" name="email" required>
						<span>E-mail</span>
					</div><!--form-group-->

					<div class="form-group">
						<textarea required></textarea>
						<span>Sua mensagem</span>
					</div><!--form-group-->
					<input type="submit" name="">
				</form>
			</div><!--contato-->
		</section><!--contato-->

		<footer>
			@ Todos os Direitos Reservados
		</footer>

		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="js/functions.js"></script>
		<script src="https://kit.fontawesome.com/3c6040e091.js" crossorigin="anonymous"></script>
	</body>
</html>