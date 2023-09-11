<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function profile($nama="",$npm="",$kelas=""): string
    {
        $data=[
            'nama'=>$nama,
            'npm'=>$npm,
            'kelas'=>$kelas,
        ];

        return view('profile',$data);
    }
}

class Profile extends BaseController
{

    public function profile(): string
    {
        return view('welcome_message');
    }
}
