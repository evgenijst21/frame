<?php
	use \Core\Route;
	
	return [
		
		new Route('/', 'home', 'index'),
		new Route('/:page', 'home', 'page'),  
		new Route('/article/:id', 'blog', 'single'),
		new Route('/register/', 'register', 'create'),
		new Route('/login/', 'login', 'create'),
		new Route('/unset/', 'login', 'destroy'),
	];
	
