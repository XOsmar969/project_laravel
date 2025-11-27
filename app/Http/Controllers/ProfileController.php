<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProfileController extends Controller
{
   
     public function profile()
{
    $data = [
        'title' => 'Profile',
        'nama' => 'Osmar Ghalib Albani',  
        'kelas' => 'XI PPLG 1',     
        'sekolah' => 'SMK RUS'
    ];

    return view('profile', $data);
}

   


}
