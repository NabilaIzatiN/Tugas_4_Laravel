<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return 'test berhasil';
    }
    public function urutan($ke)
    {
        $numbers = [
            ['ke'=>$ke, 'nomor'=>20],
            ['ke'=>$ke, 'nomor'=>30],
            ['ke'=>$ke, 'nomor'=>40]
        ];
        return view('urutan',compact('numbers'));
    }
    public function home($ke)
    {
        return view('home',['ke'=> $ke]);
    }
}
