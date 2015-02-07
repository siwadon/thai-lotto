<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Prize;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PrizeController extends Controller {

	/**
	 * Display a result of the specific date.
	 *
	 * @return View
	 */
	public function index(Prize $prize)
	{
		$prizes = $prize->get();
		return view('index', compact('prizes'));
	}

	public function result($date = null)
	{
		if ($date) {
			$prizes = Prize::where('date', $date)->orderBy('prize')->get();
		}
		else {
			$subquery = 'date = (SELECT DISTINCT date FROM prizes ORDER BY date DESC LIMIT 1)';
			$prizes = Prize::whereRaw($subquery)->orderBy('prize')->get();
		}
		return view('result', compact('prizes'));
	}
}
