<?php

	// src/Controller/TestCategory.php
	namespace App\Controller;
	
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

		class TestCategory extends Controller
		{
			/**
			 * @Route("/testapp/one")
			 */
				public function test()
				{
					$nom = 'Add component';
					return $this->render('test/one.html.twig', array(
				'number' => $nom,
				));
				}
		}


