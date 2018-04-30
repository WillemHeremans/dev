<?php

	// src/Controller/TestIndex.php
	namespace App\Controller;
	
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

		class TestIndex extends Controller
		{
			/**
			 * @Route("/testapp")
			 */
				public function test()
				{
					$nom = 'Add component';
					return $this->render('test/app.html.twig', array(
				'number' => $nom,
				));
				}
		}


