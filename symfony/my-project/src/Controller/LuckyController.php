<?php
// src/Controller/LuckyController.php
	namespace App\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\Routing\Annotation\Route;
	use Symfony\Component\HttpFoundation\Response;
	
	

		class LuckyController extends Controller
		{
		
			/**
			* @Route("/toto")
			*/
			public function number()
			{
				$number = mt_rand(0, 100);

				return $this->render('/lucky/number.html.twig', array(
				'number' => $number,
				));
			}
		}
