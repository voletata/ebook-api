<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 3103120229,
            'Name' => 'Voleta Salsabilla A',
            'Phone' => '082137800702',
            'Class' => 'XII RPL 7'
        ];
    }
}
