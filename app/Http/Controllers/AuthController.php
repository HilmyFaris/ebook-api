<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 1234567,
            'Name' => 'Muhammad Faris H',
            'Phone' => '089668305632',
            'Class' => 'XII RPL 5'
        ];
    }
}
