<?php

class HomeController extends BaseController {

	/**
	 * Affiche la page d'accueil
	 *
	 */
	public function index()
	{
		return View::make('home.index');
	}

}