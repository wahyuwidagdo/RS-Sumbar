<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    public function index()
    {
        $data_rs_1 = \App\rs_1::all();
        return view('welcome',['data_rs_1' => $data_rs_1]);
    }

    public function daerah1(Request $request)
    {
        $data_daerah = \App\daerah::find(1);
        return view('daerah1',['data_daerah1' => $data_daerah1]);
    }

    public function daerah2(Request $request)
    {
        $data_daerah = \App\daerah::find(2);
        return view('daerah2',['data_daerah2' => $data_daerah2]);
    }

    public function daerah3(Request $request)
    {
        $data_daerah = \App\daerah::find(3);
        return view('daerah3',['data_daerah3' => $data_daerah3]);
    }

    public function daerah4(Request $request)
    {
        $data_daerah = \App\daerah::find(4);
        return view('daerah4',['data_daerah4' => $data_daerah4]);
    }

    public function daerah5(Request $request)
    {
        $data_daerah = \App\daerah::find(5);
        return view('daerah5',['data_daerah5' => $data_daerah5]);
    }

    public function daerah6(Request $request)
    {
        $data_daerah = \App\daerah::find(6);
        return view('daerah6',['data_daerah6' => $data_daerah6]);
    }

    public function daerah7(Request $request)
    {
        $data_daerah = \App\daerah::find(7);
        return view('daerah7',['data_daerah7' => $data_daerah7]);
    }

    public function daerah8(Request $request)
    {
        $data_daerah = \App\daerah::find(8);
        return view('daerah8',['data_daerah8' => $data_daerah8]);
    }

    public function daerah9(Request $request)
    {
        $data_daerah = \App\daerah::find(9);
        return view('daerah9',['data_daerah9' => $data_daerah9]);
    }

    public function daerah10(Request $request)
    {
        $data_daerah = \App\daerah::find(10);
        return view('daerah10',['data_daerah10' => $data_daerah10]);
    }

    public function daerah11(Request $request)
    {
        $data_daerah = \App\daerah::find(11);
        return view('daerah11',['data_daerah11' => $data_daerah11]);
    }

    public function daerah12(Request $request)
    {
        $data_daerah = \App\daerah::find(12);
        return view('daerah12',['data_daerah12' => $data_daerah12]);
    }

    public function daerah13(Request $request)
    {
        $data_daerah = \App\daerah::find(13);
        return view('daerah13',['data_daerah13' => $data_daerah13]);
    }

    public function daerah14(Request $request)
    {
        $data_daerah = \App\daerah::find(14);
        return view('daerah14',['data_daerah14' => $data_daerah14]);
    }

    public function daerah15(Request $request)
    {
        $data_daerah = \App\daerah::find(15);
        return view('daerah15',['data_daerah15' => $data_daerah15]);
    }

    public function daerah16(Request $request)
    {
        $data_daerah = \App\daerah::find(16);
        return view('daerah16',['data_daerah16' => $data_daerah16]);
    }

    public function daerah17(Request $request)
    {
        $data_daerah = \App\daerah::find(17);
        return view('daerah17',['data_daerah17' => $data_daerah17]);
    }

    public function daerah18(Request $request)
    {
        $data_daerah = \App\daerah::find(18);
        return view('daerah18',['data_daerah18' => $data_daerah18]);
    }

    public function daerah19(Request $request)
    {
        $data_daerah = \App\daerah::find(19);
        return view('daerah19',['data_daerah19' => $data_daerah19]);
    }

    public function pasien(Request $request)
    {
        $data_pasien = \App\pasien::all();
        return view('pasien',['data_pasien' => $data_pasien]);
    }
    public function landingpage()
    {
        $data_rs = \App\rs::all();  
        return view('index');
    }

    public function rumahsakit()
    {
        $data_rs_1 = \App\rs_1::all();
        return view('welcome',['data_rs_1' => $data_rs_1]);
    }

    public function kebutuhan()
    {
        $data_kebutuhan = \App\kebutuhan::all();
        return view('kebutuhan',['data_kebutuhan' => $data_kebutuhan]);
    }

    public function donatur()
    {
        $data_donatur = \App\donatur::all();
        return view('donatur',['data_donatur' => $data_donatur]);
    }

    public function penyedia()
    {
        $data_penyedia = \App\penyedia::all();
        return view('penyedia',['data_penyedia' => $data_penyedia]);
    }

    public function donasinya()
    {
        $data_donasinya = \App\donasinya::all();
        return view('donasinya',['data_donasinya' => $data_donasinya]);
    }
}
