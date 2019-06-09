<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function Login(){
        return view ('welcome');
    }
    public function Logout(){
        auth()->logout();
        return view('welcome');
    }
    
    public function tesSubmit(Request $request) {
        // foreach($request->nama_ikan as $key => $ikan) {
        //     $ab = new AB();
        //     $ab->name = $ikan;
        //     $ab->nilai1 = $request->nilai1[$key];
        //     $ab->nilai2 = $request->nilai2[$key];
        //     $ab->nilai3 = $request->nilai3[$key];
        //     $ab->save();
        // }
        $request->session()->forget('ikans');
        $request->session()->put('ikans', $request->nama_ikan);
        return view('Pages.Kriteria')->with('ikans', $request->session()->get('ikans'));
    }

    public function tesSubmitKriteria(Request $request) {
        // $totalFz = [0, 0, 0];
        // foreach($request->session()->get('ikans') as $key => $ikan) {
        //     $ab = new Post(); // ambil dari model
        //     $ab->name = $ikan;
        //     $ab->nilai1 = $request->nilai1[$key];
        //     $fz = new Fuzzy();
        //     if($ab->nilai1 <= 26) {
        //         $fz->fz1 = 0.5;
        //     } 
        //     $ab->nilai2 = $request->nilai2[$key];
        //     $ab->nilai3 = $request->nilai3[$key];
        //     $ab->save();
        //     $fz->save();
        //     $totalFz[$key] += (pow($fz->fz1, 2) + pow($fz->fz2, 2) + pow($fz->fz3, 2));
        // }
        // $request->session()->forget('ikans');
    }
}
