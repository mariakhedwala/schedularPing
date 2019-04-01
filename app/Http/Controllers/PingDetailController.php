<?php

namespace App\Http\Controllers;

use App\PingDetail;
use Illuminate\Http\Request;
use App\Sites;
use Ping;

class PingDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Sites $site)
    {
        $sites = Sites::all();
        // return $sites;
        // Sites::Detail();
        foreach ($sites as $site):
            $urlNew = $site->url;
            echo $urlNew;

            $health = Ping::check($urlNew);

            if($health == 200) {
                // $detail = PingDetail::create(['test_url' => $urlNew , 'site_status' => 1]);
                // $detail->save();
                echo ' - Alive!'. "\n";
            } else {
                // $detail = PingDetail::create(['test_url' => $urlNew , 'site_status' => 0]);
                // $detail->save();
                echo ' - Dead :('. "\n";
            }
        endforeach;
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

	public function store()
	{
		
	}
    /**
     * Display the specified resource.
     *
     * @param  \App\PingDetail  $pingDetail
     * @return \Illuminate\Http\Response
     */
    public function show(PingDetail $pingDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PingDetail  $pingDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(PingDetail $pingDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PingDetail  $pingDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PingDetail $pingDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PingDetail  $pingDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(PingDetail $pingDetail)
    {
        //
    }
}
