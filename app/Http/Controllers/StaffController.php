<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::where('company_id',1)->with('user')->get();
        return response()->json($staff);
    }
}
