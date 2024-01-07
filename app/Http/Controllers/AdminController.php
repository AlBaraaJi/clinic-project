<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DoctorSchedule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

            $users= User::where('id','!=',auth()->id())->get();
            return view('admin.index',compact('users'));
    }

    public function showRequests(){
        return view('admin.request');
    }

    public function addDoctor() {
        return view('admin.add');
    }

    public function showFeedback(){
        return view('admin.feedback');
    }

    public function showMessage(){
        return view('admin.message');
    }

    public function editUser($id){

        $user = User::findOrFail($id);
        return view('admin.edit',compact('user'));
    }



    // public function store(Request $request){

    //     $input = $request->validate([

    //         'name'=>'required',
    //         'email'=>'required|unique:users,email',
    //         'password'=>'required',
    //         'phone'=>'required',
    //         'gender'=>'required',
    //         'role'=>'required',
    //         'start_time'=>'nullable',
    //         'end_time'=>'nullable',
    //     ]);

    //     if($user = User::create($input)){
    //         if($user){
    //             DoctorSchedule::create([
    //                 'user_id' => $user->id,
    //                 'start_time'=> $input['start_time'],
    //                 'end_time'=> $input['end_time']
    //             ]);
    //             return view('admin.add')->with('add_success','Added Successfully');
    //         }else{
    //             $user->destroy;
    //             return view('admin.add')->with('add_failed','Added Failed');
    //         }
    //     }else{
    //         return view('admin.add')->with('add_failed','Added Failed');
    //     }
    // }

    public function store(Request $request)
{
    $input = $request->validate([
        'name' => 'required',
        'email' => 'required|unique:users,email',
        'password' => 'required',
        'phone' => 'required',
        'gender' => 'required',
        'role' => 'required',
        'start_time' => 'nullable',
        'end_time' => 'nullable',
    ]);

    $user = User::create($input);

    if ($user) {
        DoctorSchedule::create([
            'user_id' => $user->id,
            'start_time' => $input['start_time'],
            'end_time' => $input['end_time']
        ]);

        return view('admin.add')->with('add_success', 'Added Successfully');
    } else {
        return view('admin.add')->with('add_failed', 'Added Failed');
    }
}
    public function update(Request $request ,$id){

        $input = $request->validate([

            'name'=>'required',
            'email'=>'required|unique:users,email',
            'password' => 'nullable|min:8',
            'phone'=>'required',
            'role'=>'required'
        ]);

        unset($validatedData['gender']);


        $user = User::findOrFail($id);

        if($user->save()){
            return view('admin.index')->with('update_success','Updated Successfully');
        }else{
            return view('admin.index')->with('update_failed','Update Failed');
        }


    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // if (isset($validatedData['password'])) {
    //     $model->password = bcrypt($validatedData['password']); // Hash the password

    public function login(Request $request)
    {
        $this->validate($request,[
            'email'=> 'required|email|exists:users,email',
            'password'=>'required|max:8',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password,'status'=>1])){
           if (auth()->user()->role=='user') {
           return view('user.index');
           }
           elseif(auth()->user()->role=='doctor'){
            return view('doctor.index');
           }
           return redirect()->route('admin');
        }
        return back()->withMessage('Invalid Credintianls');


    }
        public function changeStatus($id,$status){
            $user=User::find($id);
            $user->status= $status=='accept' ? 1 : 0;
            $user->save();
            return back()->with('changed Succesffully');
        }
        public function register(Request $request){

            $this->validate($request,[
                'first_name'=>'required',
                'last_name'=>'required',
                'email'=>'required |email',
                'phone'=>'required |integer',
                'password'=>'required |confirmed',
                'gender'=>'required |in:male,female',
            ]);
            User::create([
                'name'=>$request->first_name. ' ' .$request->last_name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'password'=>Hash::make($request->password),
                'gender'=>$request->gender,
                'role'=>'user',
                'status'=>0,
            ]);
            return redirect()->route('login');
        }
}
