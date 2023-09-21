<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Timestamp;
use App\Models\User;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function attendance()
    {
        $attendance = $request->only(['start_work', 'end_work', 'total_work', 'total_rest', ])
        return view('attendance');
    }
}
