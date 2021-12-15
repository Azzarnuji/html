<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $parserTwo ;
    public function __construct()
    {
        $this->parserTwo = \Config\Services::parser();
    }
    public function index()
    {
        $data = [
            'title'=>"Pontren Darul Muttaqin"
        ];
        return view('home/index',$data);
    }

    public function foto($folder = null, $file = null){
        $data = [
            'title'=>"Gallery Santri",
            'folder'=>$folder,
            'file'=>$file
        ];
        return view('home/foto',$data);
    }
}
