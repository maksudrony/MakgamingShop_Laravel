<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Gpu;
use App\Models\Ram;
use App\Models\Keyboard;
use App\Models\Monitor;


class HomeController extends Controller
{
    public function index(){
        $data = gpu::all(); //gpu table's name of the database, table er value gula sata te eshe store hobe
        return view("home", compact("data"));
    }

    public function redirects(){
        $data = gpu::all(); //gpu table's name of the database, table er value gula sata te eshe store hobe
        // $data = ram::all();
        // $data = keyboard::all();
        $usertype = Auth::user()-> usertype;
        if($usertype == '1'){
            return view('admin.adminhome');
        }
        else{
            return view('home', compact('data'));
        }
    }

    public function storeitems(){
        $data=gpu::all();
        $data2=ram::all();
        $data3=keyboard::all();     //ram table's name of the database, table er value gula sata te eshe store hobe
        $data4=monitor::all();
        return view('storeitems', compact("data", "data2", "data3", "data4"));
    }
    
}
