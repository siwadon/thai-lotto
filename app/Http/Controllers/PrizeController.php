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
		$prizes = self::_get_result_from_date($date);
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
		$output = [];
		foreach ($dates as $date) {
			$output[] = $date->date;
		}
		return response()->json($output);
	}

	/**
	 * Return result list in JSON format
	 *
	 * @param Prize $prize
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function list_result($date = null)
	{
		$prizes = self::_get_result_from_date($date);
		return response()->json($prizes);
	}

	/**
	 * @param $date
	 * @return mixed
	 */
	private function _get_result_from_date($date)
	{
		if ($date) {
			$prizes = Prize::where('date', $date)->orderBy('prize')->get();
		}
		else {
			$subquery = 'date = (SELECT DISTINCT date FROM prizes ORDER BY date DESC LIMIT 1)';
			$prizes = Prize::whereRaw($subquery)->orderBy('prize')->get();
		}
		return self::_prepare_result($prizes);
	}

	/**
	 * @param $prizes
	 * @return mixed
	 */
	private function _prepare_result($prizes)
	{
		$result['date'] = $prizes->first()->date;

		foreach($prizes as $record) {
			$result['prizes'][$record->type][] = $record->prize;
		}

		return $result;
	}
}