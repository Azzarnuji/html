<?php

namespace App\Controllers;

class Images extends BaseController
{
    public function index()
    {
        $data = [
            'title'=>"Pontren Darul Muttaqin"
        ];
        return view('home/index',$data);
    }

    public function foto($tahun = null,$folder = null){
        $data = [
            'title'=>"Gallery Santri",
            'tahun'=>$tahun,
            'folder'=>$folder
        ];
        return view('home/foto',$data);
    }
}
