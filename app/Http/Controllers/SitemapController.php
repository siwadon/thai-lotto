<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Prize;

class SitemapController extends Controller {
    public function index(Prize $prize)
    {
        $dates  = $prize->select('date')->groupBy('date')->orderBy('date', 'desc')->get();
        $url    = config('app.url');
        $urls   = [];
        $urls[] = $url;
        $urls[] = $url . '/result';
        
        foreach ($dates as $date) {
            $urls[] = $url . '/result/' . $date->date;
        }

        return view('sitemap', compact('urls'));
    }
}