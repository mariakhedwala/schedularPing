<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sites;

class SitesController extends Controller
{
    public function index()
    {
        $sites = Sites::all();
        return view('sites.index', compact('sites'));
    }
}
