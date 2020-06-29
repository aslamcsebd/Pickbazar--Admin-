<?php

namespace App\Http\Controllers;

use App\Staff;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::where('company_id',1)->with('user')->get();
        return response()->json($staff);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make(mt_rand(100000,999999));
        $user->save();

        $staff = new Staff();
        $staff->company_id = 1;
        $staff->user_id = $user->id;
        $staff->limit = $request->limit;

        $staff->save();
        return response()->json(['message'=>'saved successfully'],200);

    }
}
