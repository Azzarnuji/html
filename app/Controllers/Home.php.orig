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
<<<<<<< HEAD
    public function foto($folder = null, $file = null){
        $data = [
            'title'=>"Gallery Santri",
            'folder'=>$folder,
            'file'=>$file
        ];
        return view('home/foto',$data);
    }
    // public function downloadvideo($file){
    //     $this->response->removeHeader('Content-Type');
    //     $data = [
    //         'title'=>"Gallery Video",
    //         'file'=>$file
    //     ];
    //     return view('home/foto',$data);
    // }
=======
    public function foto(){
        $data = [
            'title'=>"Gallery Santri"
        ];
        return view('home/foto',$data);
    }
>>>>>>> c91949887a89b2453561f136c6804ecc6e062bd0
}
