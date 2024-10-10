<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    $data =[
        'nama1' => 'Petrus Juan Pradipta Raindarta - 220712039',
        'nama2'=> 'Muthiara Azhara - 220712048',
        'nama3'=> 'Ambaleon van Gogh - 220712069',
        'quote1'=> 'Si Bagas jualan ganja, kalo diminta tugas jangan di ninja',
        'quote2'=> 'Dengan kelincahanku, aku akan menari setiap hari. Panggil aku Mu Mu Mu Muthe! Dont touch, dont touch, dont touch touch touch!',
        'quote3'=> 'Is this the land that has the Fountain of Youth? For remember he was seeking this fountain, but never found it'
    ];
    
    return view('profile', $data);
});