<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{

	public function index()
	{
		// return view('home');
		$data = [
			'title' => 'Dashboard | Sistem Informasi Supermarket'

		];

		// echo view('layout/header', $data);
		// echo view('home');
		// echo view('layout/footer');
		// return view('home', $data);
		return view('pages/index', $data);
	}
}
