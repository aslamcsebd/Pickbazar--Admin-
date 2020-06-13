<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserController extends Controller{

    function user(Request $request){
        return response()->json($request->user());
    }

}
