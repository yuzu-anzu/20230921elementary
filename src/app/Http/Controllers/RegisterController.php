<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rest;
use App\Models\Timestamp;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $form = $request->all();
        Register::create($form);
        return redirect('/index');
    }

    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Register::find($request-id)-update($form);
        return redirect('/');
    }
}
