<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use app\Models\User;
class HomeController extends Controller
{
    public function redirect(){
        if(Auth::user()->role =='admin'){
            $users=User::all();
            return view('admin.index',compact('users'));
        }
        elseif(Auth::user()->role =='doctor'){
            return view('doctor.index');
        }
        elseif(Auth::user()->role == 'scientest'){
            return view('scientest.index');
        }else{
            return view('guest.index');
        }
    }
}
