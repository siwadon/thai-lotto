<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Prize;

class SitemapController extends Controller {
    public function index($extension = null, Prize $prize)
    {
        $dates  = $prize->select('date')->groupBy('date')->orderBy('date', 'desc')->get();
        $url    = config('app.url');
        $urls   = [];
        $urls[] = $url;
        $urls[] = $url . '/result';
        
        foreach ($dates as $date) {
            $urls[] = $url . '/result/' . $date->date;
        }

        if ($extension == '.xml') {
            return response()->view('sitemap_xml', compact('urls'))->header('Content-Type', 'text/xml');
        }
        else {
            return response()->view('sitemap_txt', compact('urls'))->header('Content-Type', 'text/plain');
        }
    }
}