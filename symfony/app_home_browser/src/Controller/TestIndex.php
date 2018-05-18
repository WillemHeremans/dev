<?php

	// src/Controller/TestIndex.php
	namespace App\Controller;
	
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	
	//include_once '../src/Utils/AddDial.php';
	//use AddDial;
	use App\Utils\AddDial;

		class TestIndex extends Controller
		{
			/**
			 * @Route("/testapp")
			 */
				public function test()
				{
				if (isset($_POST['add_dial'])) 
	      		
	      		{
	      		$nom = 'Add component';
					return $this->render('test/one.html.twig', array(
				'number' => $nom,
				));
	      		
	      		} 
					$nom = 'Add';
					return $this->render('test/app.html.twig', array(
				'number' => $nom,
				));
				}
		}


