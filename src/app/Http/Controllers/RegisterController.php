<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rest;
use App\Models\Timestamp;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function attendance()
    {
        return view('attendance')
    }

    public function create(RegisterRequest $request)
    {
        $form = $request->all();
        Register::create($form);
        return redirect('/');
    }

    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Register::find($request-id)-update($form);
        return redirect('/');
    }

    public function store(Request $request)
    {
        $timestamp =$request->only(['start_work', 'end_work', 'total_work', 'rest_start', 'rest_end', 'rest_time'])
        timestamp::create($timestamp);
    }

}
