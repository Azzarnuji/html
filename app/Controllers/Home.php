<?php

namespace App\Controllers;

class Home extends BaseController
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
    public function images($tahun = null,$folder = null){
        $data = [
            'title'=>"Gallery Santri",
            'tahun'=>$tahun,
            'folder'=>$folder
        ];
        return view('home/foto',$data);
    }
}
