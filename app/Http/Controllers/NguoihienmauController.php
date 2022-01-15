<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class NguoihienmauController extends Controller
{

    public function index()
    {
        $datadiachi = DB::select("SELECT DISTINCT diachi FROM nguoihienmaus");
        $datasolanhien = DB::select("SELECT DISTINCT solanhien FROM nguoihienmaus");
        $datanhommau = DB::select("SELECT DISTINCT nhommau FROM nguoihienmaus");

        foreach($datadiachi as $key => $value)
        {
            $datadiachi[$key] = (array) $value;
        }
        foreach($datasolanhien as $key => $value)
        {
            $datasolanhien[$key] = (array) $value;
        }
        foreach($datanhommau as $key => $value)
        {
            $datanhommau[$key] = (array) $value;
        }
        // echo "<pre>";
        // print_r($datadiachi) ;
        // echo "</pre>";
        // die();
        return view('page.timkiem',compact('datadiachi','datasolanhien','datanhommau'));
    }
    public function xulitimkiem(Request $request)
    {
        return view("page.timkiem");
    }
}
