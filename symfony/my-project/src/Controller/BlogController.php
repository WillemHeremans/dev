<?php

// src/Controller/BlogController.php
	namespace App\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\Routing\Annotation\Route;
	use Symfony\Component\HttpFoundation\Response;

		class BlogController extends Controller
		{
			/**
			 * Matches /blog exactly
			 *
			 * @Route("/blog", name="blog_list")
			 */
			public function list()
			{
				$number = 'Hello you';
				
				return new Response (
				
				'<html><body>Lucky number: '.$number.'</body></html>'
				
				
				);
			}

			/**
			 * Matches /blog/*
			 *
			 * @Route("/blog/{slug}", name="blog_show")
			 */
			public function show($slug)
			{
				// $slug will equal the dynamic part of the URL
				// e.g. at /blog/yay-routing, then $slug='yay-routing'

				// ...
			}
		}
