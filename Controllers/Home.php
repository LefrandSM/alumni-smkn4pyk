<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'my_css' => 'css/style.css',
			'title' => 'Landing Page | Smk Negeri 4 Payakumbuh Family'
		];

		return view('home/landing-page', $data);
	}
}
