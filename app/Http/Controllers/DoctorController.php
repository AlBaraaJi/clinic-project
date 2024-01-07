<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
   public function index() {

    return view('doctor.index');
   }

   public function appointment()
{

return view ('doctor.appointment');

}
public function viewdata()
{
    $data = TableName::all();

    return view('your-view', compact('data'));
}


   public function viewhistory()
   {
    return view ('doctor.history');
   }
}
