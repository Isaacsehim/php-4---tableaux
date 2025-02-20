<?php
	$products = [
		[
			'categorie' => 'Ordinateur Portable',
			'nom' => 'Alienware M18 R2',
			'prix' => '2000',
			'description' => 'Ordinateur portable gaming haute performance',
			'image' => 'img/alienware_m18_r2.png'
		],
		[
			'categorie' => 'Souris Gaming',
			'nom' => 'Logitech G502',
			'prix' => '80',
			'description' => 'Souris gaming ergonomique',
			'image' => 'img/logitech_g502.png'
		],
		[
			'categorie' => 'Clavier Gaming',
			'nom' => 'Corsair K65 RGB MINI 60%',
			'prix' => '150',
			'description' => 'Clavier mécanique RGB',
			'image' => 'img/corsair_k65_rgb.png'
		],
		[
			'categorie' => 'Moniteur Gaming',
			'nom' => 'Asus ROG Swift OLED PG27UCDM',
			'prix' => '1000',
			'description' => 'Moniteur gaming 4K',
			'image' => 'img/asus_rog_swift.png'
		],
		[
			'categorie' => 'Chaise Gaming',
			'nom' => 'Secretlab Titan evo',
			'prix' => '400',
			'description' => 'Chaise gaming confortable',
			'image' => 'img/secretlab_titan_evo.png'
		],
		[
			'categorie' => 'Casque Gaming',
			'nom' => 'SteelSeries Arctis 8',
			'prix' => '150',
			'description' => 'Casque gaming surround',
			'image' => 'img/steelseries_arctis_8.png'
		],
		[
			'categorie' => 'Carte Graphique Gaming',
			'nom' => 'NVIDIA GeForce RTX 5090',
			'prix' => '2400',
			'description' => 'Carte graphique haut de gamme',
			'image' => 'img/nvidia_geforce_rtx_5090.png'
		],
		[
			'categorie' => 'Bureau Gaming',
			'nom' => 'Arozzi Arena',
			'prix' => '300',
			'description' => 'Bureau gaming spacieux',
			'image' => 'img/arozzi_arena.png'
		],
		[
			'categorie' => 'Manette',
			'nom' => 'Xbox Elite 2 Controller',
			'prix' => '180',
			'description' => 'Manette gaming sans fil',
			'image' => 'img/xbox_elite2_controller.png'
		],
		[
			'categorie' => 'Manette',
			'nom' => 'DualShock 5',
			'prix' => '60',
			'description' => 'Manette gaming sans fil',
			'image' => 'img/dualshock5.png'
		],
		[
			'categorie' => 'Routeur Gaming',
			'nom' => 'Netgear Nighthawk Pro',
			'prix' => '250',
			'description' => 'Routeur gaming haute vitesse',
			'image' => 'img/netgear_nighthawk_pro.png'
		],
		[
			'categorie' => 'Tapis de Souris Gaming',
			'nom' => 'SteelSeries QcK XXL',
			'prix' => '40',
			'description' => 'Grand tapis de souris gaming',
			'image' => 'img/steelseries_qck_xxl.png'
		],
		[
			'categorie' => 'Enceintes Gaming',
			'nom' => 'Logitech Z906',
			'prix' => '400',
			'description' => 'Enceintes gaming haute qualité',
			'image' => 'img/logitech_z906.png'
		],
		[
			'categorie' => 'Microphone Gaming',
			'nom' => 'Blue Yeti',
			'prix' => '130',
			'description' => 'Microphone gaming professionnel',
			'image' => 'img/blue_yeti.png'
		],
		[
			'categorie' => 'Webcam',
			'nom' => 'Logitech StreamCam',
			'prix' => '170',
			'description' => 'Webcam gaming HD',
			'image' => 'img/logitech_streamcam.png'
		]
	];

	array_push($products, [
		'categorie' => 'Souris Gaming',
		'nom' => 'Logitech G502 X PLUS',
		'prix' => '160',
		'description' => "Souris ultra rapide dpi de l'extrême",
		'image' => 'img/logitech_g502_x.png'
	]);

	foreach ($products as $product) {
		echo '<div class="product">';
		echo '<h2>' . htmlspecialchars($product['nom']) . '</h2>';
		echo '<div class="product-content">';
		echo '<img src="' . htmlspecialchars($product['image']) . '" alt="' . htmlspecialchars($product['nom']) . '">';
		echo '<div class="product-info">';
		echo '<h3><strong>Catégorie:</strong> ' . htmlspecialchars($product['categorie']) . '</h3>';
		echo '<p><strong>Prix:</strong> ' . htmlspecialchars($product['prix']) . '€</p>';
		echo '<p><strong>Description:</strong> ' . htmlspecialchars($product['description']) . '</p>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
	?>