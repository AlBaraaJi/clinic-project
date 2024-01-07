<?php

namespace App\Http\Controllers;

use App\Models\DoctorSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonInterval;


class UserController extends Controller
{
    public function index()
    {
        // $users = User;
        return view('user.index');
    }
    public function viewDoctor(){
        return view('user.view');
    }
    public function takeLab(){
        return view('user.lab');
    }

    public function selectDoctor(){
        $doctors = DB::table('users')->where('role', 'doctor')->get();
            return view('user.takeapp',['doctors' => $doctors]);
    }
    // public function takeApp(){
    //     $doctor = User::findOrFail(6);
    //         $startTime =Carbon::createFromFormat('H:i:s', $doctor->schedule->start_time)->format('H:i');
    //         $endTime = Carbon::createFromFormat('H:i:s', $doctor->schedule->end_time)->format('H:i');
    //         return view('user.appointment',compact('startTime','endTime'));
    // }
    public function  ChooseDoc(){
        $doctor = DoctorSchedule::findOrFail(4);
                $start_time = Carbon::createFromFormat('H:i:s', $doctor->schedule->start_time)->format('H:i');
                 $end_time = Carbon::createFromFormat('H:i:s', $doctor->schedule->end_time)->format('H:i');
      return view('user.choosetime');
    }
    //

    // public function showForm()
    // {
    //     $start_time = Carbon::createFromFormat('H:i', '09:00'); // Start time
    //     $end_time = Carbon::createFromFormat('H:i', '18:00'); // End time
    //     $interval = CarbonInterval::minutes(30); // Interval between options

    //     $options = [];

    //     $current_time = $start_time;
    //     while ($current_time <= $end_time) {
    //         $options[$current_time->format('H:i')] = $current_time->format('h:i A');
    //         $current_time->add($interval);
    //     }

    //     return view('your-view', ['options' => $options]);
    // }
}
