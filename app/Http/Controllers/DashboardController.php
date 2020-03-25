<?php

namespace App\Http\Controllers;

use App\Services\Search;
use Illuminate\Http\Request;

class DashboardController extends Controller 
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function search(Request $request)
    {
        $search = new Search($request->input('term'));

        return view('dashboard.search')->with(['term' => $request->input('term'), 'results' => $search->getResults()]);
    }
}
