<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiViewController extends Controller
{
    /**
	 * Display a listing of the Generator.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('api.index');
	}
}
