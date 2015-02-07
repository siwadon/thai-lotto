<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Prize;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PrizeController extends Controller {

	/**
	 * Redirect to result page
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function index()
	{
		return redirect()->route('result');
	}
	/**
	 * Display all lottery result in our database.
	 *
	 * @return View
	 */
	public function list_all(Prize $prize)
	{
		$prizes = $prize->get();
		return view('index', compact('prizes'));
	}

	/**
	 * Display a result of the specific date.
	 *
	 * @return View
	 */
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

	/**
	 * Return date list in JSON format
	 *
	 * @param Prize $prize
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function list_dates(Prize $prize)
	{
		$dates = $prize->select('date')->groupBy('date')->orderBy('date', 'desc')->get();
		return response()->json($dates);
	}
}
