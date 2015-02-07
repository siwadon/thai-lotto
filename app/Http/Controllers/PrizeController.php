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
		$prize = $prize->get();
		return view('index', compact('prize'));
	}

	public function result($date = null)
	{
		if ($date) {
			$prize = Prize::where('date', $date)->get();
		}
		else {
			$subquery = 'date = (SELECT DISTINCT date FROM prizes ORDER BY date DESC LIMIT 1)';
			$prize = Prize::whereRaw($subquery)->get();
		}
		return view('result', compact('prize'));
	}
}
