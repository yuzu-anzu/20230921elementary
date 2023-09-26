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
        return view('attendance');
    }
}
