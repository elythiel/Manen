<!doctype htm>
<html>
	<head>
		<meta charset="UTF-8" lang="fr"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title> Manen </title>

		<link rel="stylesheet" type="text/css" href="/css/main.css"/>
	</head>

<body class="bg-secondary-light font-serif">

	<header id="header" class="header">
		<a href="/" class="logo">
			<img src="/img/logo_2.png" alt="Logo Manen" class="w-full" />
		</a>

		<nav class="navbar">
			<a href="/galerie">
				<img src="/img/galerie.png" />
				Galerie
			</a>
			<a href="/albums">
				<img src="/img/album.png" />
				Albums
			</a>
			<a href="/concerts">
				<img src="/img/concert.png" />
				Concerts
			</a>
			<a href="/contact">
				<img src="/img/contact.png" />
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
					<a href="#" data-target="paroles-titre-<?php echo $i; ?>" class="modal-trigger hover:underline">
						Random titre de chanson numéro <?php echo $i; ?>
					</a>
					<?php endfor; ?>
				</div>
			</div>
		</div>
		<div id="paroles-titre-1" 
			class="modal-wrapper fixed min-h-screen w-screen top-0 left-0 bg-black bg-opacity-25 flex items-center justify-center hidden"
			>
			<div class="container p-12 bg-secondary-light shadow-lg">
				<h2 class="text-3xl text-primary mb-10">Etendues perdues</h2>
				<p class="mb-4">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut maximus mauris ex, vitae fringilla tellus commodo quis. Cras dapibus mollis nisl sed molestie. Nulla in ex vel ex imperdiet interdum. Aliquam suscipit augue et nulla blandit, sit amet sodales urna efficitur. Morbi justo risus, congue posuere eros fermentum, egestas feugiat justo. Nullam dignissim feugiat eleifend. Sed luctus sagittis purus, sit amet gravida est pulvinar finibus. Praesent sed justo posuere, efficitur diam sit amet, consectetur enim. In enim nibh, consequat nec magna sit amet, tristique varius lectus. Donec fermentum ultricies nunc in condimentum.
				</p>
				<p class="mb-4">
				Suspendisse metus augue, volutpat a odio eu, mattis consectetur nibh. Donec egestas dapibus arcu, et sagittis lorem auctor eget. Ut accumsan ultrices enim, ut mollis mauris consequat quis. Sed efficitur lacus at erat interdum pretium. Vivamus auctor, quam eget auctor fermentum, nunc tellus finibus risus, in commodo massa ex sed urna. Mauris mattis mi at porta bibendum. Fusce vel placerat quam. Mauris accumsan congue sem, non gravida est tincidunt at. Sed suscipit neque sed orci maximus, quis eleifend nulla condimentum. In ac eleifend nibh.
				</p>
				<p class="mb-4">
				Maecenas non ligula nunc. Phasellus dignissim, lectus ac scelerisque euismod, mi eros interdum ante, nec scelerisque nulla velit ac dui. Praesent a purus mauris. Praesent ac fringilla sem. Fusce aliquam lacus et ligula tempor finibus. Fusce quis nulla in mauris ullamcorper aliquet. Duis odio risus, ornare gravida dapibus ac, bibendum vitae tortor. Maecenas tristique, ligula nec consectetur dignissim, tortor odio gravida dui, sit amet lacinia enim felis ut ante. Maecenas ultricies lorem eu metus faucibus, in consequat risus blandit. Phasellus tempor hendrerit magna, pellentesque gravida urna eleifend id.
				</p>
				<p class="mb-4">
				Sed neque nulla, ornare sed consectetur nec, auctor sed mauris. Integer malesuada ligula vel velit lacinia, sed dignissim nulla euismod. Sed vehicula, elit at molestie luctus, massa neque malesuada risus, eu pharetra nisi metus ut lectus. Etiam a posuere enim. Morbi et augue vel augue elementum commodo. Curabitur ac viverra ex. Aenean aliquam neque non consequat malesuada. Nunc non ligula lorem. Nulla non ultrices mi. Sed mattis feugiat magna et rhoncus. Fusce pulvinar purus ac convallis mattis. Sed interdum ipsum in nisi convallis, vitae suscipit justo tincidunt. In sed ligula ligula. Mauris dictum, velit sed porttitor facilisis, ex leo semper nisi, quis accumsan magna arcu vitae augue. Mauris dui felis, sollicitudin vitae odio non, imperdiet pretium lacus. Quisque ultricies purus sit amet tincidunt finibus.
				</p>
				<p>
				Cras cursus mauris quis pulvinar ultricies. Donec gravida, purus eget posuere aliquam, nisl elit gravida est, eu congue nisi risus eget risus. Maecenas quis nunc in lectus efficitur commodo quis sit amet libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin tincidunt mi est, at lobortis urna volutpat non. Donec iaculis eu felis eu mollis. Suspendisse et commodo nisl. Curabitur sed risus turpis. Pellentesque felis purus, interdum id dui quis, consectetur fringilla nisi. Mauris ut nibh tincidunt, maximus lorem et, aliquet dolor.
				</p>
			</div>
		</div>
		<!-- ALBUM END -->

	</div>

	<footer>
	</footer>

	<script src="/js/utils.js"></script>

</body>

</html>