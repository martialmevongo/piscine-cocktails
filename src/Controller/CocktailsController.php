<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

class CocktailsController extends AbstractController {


	#[Route('/cocktails', name: "list-cocktails")]
	public function displayListCocktails() {
		
		$cocktails = [
			1 => [
				'id'            => 1,
				'nom'           => 'Mojito',
				'image'         => 'https://bing.com/th?id=OSK.5fccfa5f549b62804402753aec91a46e', 
				'ingredients'   => [
					'50 ml de rhum blanc',
					'½ citron vert (en quartiers)',
					'2 c.à.c. de sucre de canne',
					'8 feuilles de menthe fraîche',
					'Eau pétillante',
					'Glace pilée'
				],
				'date_creation' => '1942-01-01',
				'description'   => 'Classique cubain ultra-rafraîchissant mêlant menthe et citron vert.'
			],
		
			2 => [
				'id'            => 2,
				'nom'           => 'Margarita',
				'image'         => 'https://bing.com/th?id=OSK.dd09e4a7143edcdb8ea30a1df9c44e84',
				'ingredients'   => [
					'50 ml de tequila',
					'25 ml de triple sec (Cointreau)',
					'25 ml de jus de citron vert frais',
					'Sel pour givrer le verre',
					'Glace'
				],
				'date_creation' => '1938-07-04',
				'description'   => 'Tequila, triple-sec et citron vert dans un verre givré de sel pour un équilibre acidulé-salé.'
			],
		
			3 => [
				'id'            => 3,
				'nom'           => 'Old Fashioned',
				'image'         => 'https://th.bing.com/th/id/OIP.tKeeAkYTWlCKwic2Sr63-QHaE8?w=267&h=200&c=12&rs=1&p=0&o=6&dpr=1.3&pid=23.1',
				'ingredients'   => [
					'60 ml de bourbon ou rye whisky',
					'1 morceau de sucre',
					'2 traits d’angostura bitters',
					'Zeste d’orange',
					'Glaçon gros format'
				],
				'date_creation' => '1880-05-15',
				'description'   => 'Icône des classiques : un whisky subtilement sucré et aromatisé aux bitters.'
			],
		
			4 => [
				'id'            => 4,
				'nom'           => 'Piña Colada',
				'image'         => 'https://bing.com/th?id=OSK.67c9216b47785da5cba48829052b23b7',
				'ingredients'   => [
					'60 ml de rhum blanc',
					'90 ml de jus d’ananas',
					'30 ml de crème de coco',
					'Glaçons'
				],
				'date_creation' => '1954-08-16',
				'description'   => 'Spécialité portoricaine crémeuse et fruitée à base d’ananas et de coco.'
			],
		
			5 => [
				'id'            => 5,
				'nom'           => 'Negroni',
				'image'         => 'https://th.bing.com/th/id/OIP.zmkaxId21-n3DtxHKoA05AHaE8?rs=1&pid=ImgDetMain',
				'ingredients'   => [
					'30 ml de gin',
					'30 ml de vermouth rouge',
					'30 ml de Campari',
					'Zeste d’orange',
					'Glaçon gros format'
				],
				'date_creation' => '1919-06-01',
				'description'   => 'Amertume élégante et notes d’agrumes pour ce grand classique italien.'
			],
		];

		return $this->render('list-cocktails.html.twig', ["cocktails" => $cocktails]);

	}


	#[Route('/single-cocktail/{id}', name: "single-cocktail")]
	
	public function displaySingleCocktails($id){

		$cocktails = [
			1 => [
				'id'            => 1,
				'nom'           => 'Mojito',
				'image'         => 'https://bing.com/th?id=OSK.bf0164bc3d77bbd12902ad17ef2f04eb', // photo libre de droits
				'ingredients'   => [
					'50 ml de rhum blanc',
					'½ citron vert (en quartiers)',
					'2 c.à.c. de sucre de canne',
					'8 feuilles de menthe fraîche',
					'Eau pétillante',
					'Glace pilée'
				],
				'date_creation' => '1942-01-01',
				'description'   => 'Classique cubain ultra-rafraîchissant mêlant menthe et citron vert.'
			],
		
			2 => [
				'id'            => 2,
				'nom'           => 'Margarita',
				'image'         => 'https://www.c6bo-plongee.fr/wp-content/uploads/2024/10/c6bo-voyage-blog-plongee-recettes-meilleurs-cocktails-Mai-Tai-steven-miller.jpg',
				'ingredients'   => [
					'50 ml de tequila',
					'25 ml de triple sec (Cointreau)',
					'25 ml de jus de citron vert frais',
					'Sel pour givrer le verre',
					'Glace'
				],
				'date_creation' => '1938-07-04',
				'description'   => 'Tequila, triple-sec et citron vert dans un verre givré de sel pour un équilibre acidulé-salé.'
			],
		
			3 => [
				'id'            => 3,
				'nom'           => 'Old Fashioned',
				'image'         => 'https://www.c6bo-plongee.fr/wp-content/uploads/2024/10/c6bo-voyage-blog-plongee-recettes-meilleurs-cocktails-Mai-Tai-steven-miller.jpg',
				'ingredients'   => [
					'60 ml de bourbon ou rye whisky',
					'1 morceau de sucre',
					'2 traits d’angostura bitters',
					'Zeste d’orange',
					'Glaçon gros format'
				],
				'date_creation' => '1880-05-15',
				'description'   => 'Icône des classiques : un whisky subtilement sucré et aromatisé aux bitters.'
			],
		
			4 => [
				'id'            => 4,
				'nom'           => 'Piña Colada',
				'image'         => 'https://www.c6bo-plongee.fr/wp-content/uploads/2024/10/c6bo-voyage-blog-plongee-recettes-meilleurs-cocktails-Mai-Tai-steven-miller.jpg',
				'ingredients'   => [
					'60 ml de rhum blanc',
					'90 ml de jus d’ananas',
					'30 ml de crème de coco',
					'Glaçons'
				],
				'date_creation' => '1954-08-16',
				'description'   => 'Spécialité portoricaine crémeuse et fruitée à base d’ananas et de coco.'
			],
		
			5 => [
				'id'            => 5,
				'nom'           => 'Negroni',
				'image'         => 'https://thaka.bing.com/th/id/OIP.Wb5AgJhbS8rAoL3cP-9YAwHaE8?w=269&h=200&c=12&rs=1&p=0&o=6&dpr=1.3&pid=23.1',
				'ingredients'   => [
					'30 ml de gin',
					'30 ml de vermouth rouge',
					'30 ml de Campari',
					'Zeste d’orange',
					'Glaçon gros format'
				],
				'date_creation' => '1919-06-01',
				'description'   => 'Amertume élégante et notes d’agrumes pour ce grand classique italien.'
			],
		];

			
		$cocktail = $cocktails[$id];

		return $this->render('single-cocktail.html.twig', [
			'cocktail' => $cocktail
		]);


	}


}