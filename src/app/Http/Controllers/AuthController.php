<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modele\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function store()
    {
        //
    }
}
