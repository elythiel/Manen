<!doctype htm>
<html>
	<head>
		<meta charset="UTF-8" lang="fr"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title> Manen </title>

		<link rel="stylesheet" type="text/css" href="/css/main.css"/>
	</head>

<body class="bg-secondary-light font-serif">

	<header class="block w-full bg-primary flex border-b-4 border-secondary">
		<a href="/" class="w-1/3 mr-auto self-center">
			<img src="/img/logo_2.png" alt="Logo Manen" class="w-full" />
		</a>

		<nav class="navbar border-secondary flex flex-row items-end justify-around 
				text-white uppercase text-3xl font-playfair px-12 text-center">
			<a class="px-12 py-4" href="/galerie">
				<img class="block mx-auto w-24" src="/img/galerie.png" />
				Galerie
			</a>
			<a class="px-12 py-4" href="/albums">
				<img class="block mx-auto w-24" src="/img/album.png" />
				Albums
			</a>
			<a class="px-12 py-4" href="/concerts">
				<img class="block mx-auto w-24" src="/img/concert.png" />
				Concerts
			</a>
			<a class="px-12 py-4" href="/contact">
				<img class="block mx-auto w-24" src="/img/contact.png" />
				Contact
			</a>
		</nav>
	</header>

	<div class="container mx-auto my-12 text-primary text-lg">

		<!-- ALBUM START -->
		<h2 class="text-3xl text-primary mb-10">Etendues perdues</h2>
		<div class="grid grid-cols-2 gap-4 mb-12">
			<div class="flex items-center">
				<img src="/medias/images/album-1.jpg" class="w-full h-auto" />
			</div>
			<div class="bg-white text-secondary-dark p-10">
				<div class="bg-secondary-light h-full w-full flex flex-col p-4">
					<?php for($i = 1; $i < 10; $i++): ?>
					<a href="#" class="hover:underline">Random titre de chanson numéro <?php echo $i; ?></a>
					<?php endfor; ?>
				</div>
			</div>
		</div>
		<!-- ALBUM END -->

	</div>

	<footer>
	</footer>

</body>

</html>