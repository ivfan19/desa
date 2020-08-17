<?php

namespace App\Http\Controllers\admin_controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class main_controller extends Controller
{

    public function home()
    {

        $main_info = DB::table('main_info')->first();

        return view('admin.dashboard', [
            "main_info" =>  $main_info
        ]);

    }

    #

    #profil desa

    public function sejarah()
    {

        $main_info = DB::table('main_info')->first();

        return view('blog.history_v', [
            "main_info" =>  $main_info
        ]);

    }

    public function tentang()
    {

        $main_info = DB::table('main_info')->first();

        return view('blog.tentang', [
            "main_info" =>  $main_info
        ]);

    }

    public function vnm()
    {

        $main_info = DB::table('main_info')->first();

        return view('blog.vnm', [
            "main_info" =>  $main_info
        ]);

    }

    public function perangkat()
    {

        $main_info = DB::table('main_info')->first();

        return view('blog.perangkat_desa', [
            "main_info" =>  $main_info
        ]);

    }

    #
    
    #kelembagaan

    public function strk_org()
    {

        $main_info = DB::table('main_info')->first();

        return view('blog.struktur_pemerintahan', [
            "main_info" =>  $main_info
        ]);

    }

    public function bpd()
    {

        $main_info = DB::table('main_info')->first();

        return view('blog.bpd', [
            "main_info" =>  $main_info
        ]);

    }

    public function pkk()
    {

        $main_info = DB::table('main_info')->first();

        return view('blog.pkk', [
            "main_info" =>  $main_info
        ]);

    }

    public function lpm()
    {

        $main_info = DB::table('main_info')->first();

        return view('blog.lpm', [
            "main_info" =>  $main_info
        ]);

    }

    public function karang_taruna()
    {

        $main_info = DB::table('main_info')->first();

        return view('blog.karang-taruna', [
            "main_info" =>  $main_info
        ]);

    }


    #

    #anggaran

    public function anggaran()
    {

        $main_info = DB::table('main_info')->first();

        return view('blog.anggaran', [
            "main_info" =>  $main_info
        ]);

    }

    #

}