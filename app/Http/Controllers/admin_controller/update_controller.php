<?php

namespace App\Http\Controllers\admin_controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class update_controller extends Controller
{

    public function home(Request $request)
    {
        if(\Request::isMethod('post')){
            try {

                //code...
                $main_info = DB::table('main_info')->where(['qq'=>1])->update([
                                'tentang'=>$request->tentang,
                                'luas'=>$request->luas,
                                'jumlah_penduduk'=>$request->jumlah,

                                'alamat'=>$request->alamat,
                                'nomor_telepon'=>$request->nomor_telepon,
                                'email'=>$request->email
                            ]);

            } catch (\Throwable $th) {
                throw $th;
            }

        }

    }

    #


}