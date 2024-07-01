<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function getRemoteUsers(){
        // return 'remote users';
        $response = Http::get('http://laravel_backend/user');
        return $response->json();
    }
}
