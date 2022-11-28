<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Gpu;
use App\Models\contact;
use App\Models\Ram;
use App\Models\Keyboard;
use App\Models\Monitor;

class AdminController extends Controller
{
    public function user(){
        $data = user::all();
        return view("admin.users", compact("data"));
    }

    public function deleteuser($id){
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletegpumenu($id){
        $data = gpu::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deleterammenu($id){
        $data = ram::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletekeyboardmenu($id){
        $data = keyboard::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemonitormenu($id){
        $data = monitor::find($id);
        $data->delete();
        return redirect()->back();
    }

    

    public function updategpumenu($id){
        $data = gpu::find($id);
        return view("admin.updategpumenu", compact("data"));
    }

    public function updaterammenu($id){
        $data = ram::find($id);
        return view("admin.updaterammenu", compact("data"));
    }

    public function updatekeyboardmenu($id){
        $data = keyboard::find($id);
        return view("admin.updatekeyboardmenu", compact("data"));
    }
    
    public function updatemonitormenu($id){
        $data = monitor::find($id);
        return view("admin.updatemonitormenu", compact("data"));
    }

    

    public function updategpu(Request $request, $id){
        $data = gpu::find($id);

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('gpuimage', $imagename);
        //  folder name gpuimage

        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();
        return redirect()->back();
    }

    public function updateram(Request $request, $id){
        $data = ram::find($id);

        $image = $request->rimage;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->rimage->move('ramimage', $imagename);
        //  folder name gpuimage

        $data->rimage=$imagename;

        $data->rtitle=$request->rtitle;
        $data->rprice=$request->rprice;
        $data->rdescription=$request->rdescription;

        $data->save();
        return redirect()->back();
    }

    public function updatekeyboard(Request $request, $id){
        $data = keyboard::find($id);

        $image = $request->kimage;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->kimage->move('keyboardimage', $imagename);
        //  folder name gpuimage

        $data->kimage=$imagename;

        $data->ktitle=$request->ktitle;
        $data->kprice=$request->kprice;
        $data->kdescription=$request->kdescription;

        $data->save();
        return redirect()->back();
    }

    public function updatemonitor(Request $request, $id){
        $data = monitor::find($id);

        $image = $request->mimage;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->mimage->move('monitorimage', $imagename);
        //  folder name gpuimage

        $data->mimage=$imagename;

        $data->mtitle=$request->mtitle;
        $data->mprice=$request->mprice;
        $data->mdescription=$request->mdescription;

        $data->save();
        return redirect()->back();
    }

    

    public function gpumenu(){
        $data = gpu::all(); //gpu is table name of the database
        return view("admin.gpumenu", compact("data"));
    }

    public function rammenu(){
        $data = ram::all(); //gpu is table name of the database
        return view("admin.rammenu",compact("data"));
    }

    public function keyboardmenu(){
        $data = keyboard::all(); //gpu is table name of the database
        return view("admin.keyboardmenu",compact("data"));
    }

    public function monitormenu(){
        $data = monitor::all(); //gpu is table name of the database
        return view("admin.monitormenu",compact("data"));
    }

    

    public function uploadgpu(Request $request){
        $data = new Gpu;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('gpuimage', $imagename);
        //  folder name gpuimage

        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();
        return redirect()->back();
    }

    public function uploadram(Request $request){
        $data = new Ram;

        $image = $request->rimage; //rimage hocche form rimage name $image variable declare korsi
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->rimage->move('ramimage', $imagename);
        //  folder name gpuimage

        $data->rimage=$imagename; //rimage hocche database er nam

        $data->rtitle=$request->rtitle; //rtitle hocche database name & sesher rtitle hocche form er title name
        $data->rprice=$request->rprice;
        $data->rdescription=$request->rdescription;

        $data->save();
        return redirect()->back();
    }

    public function uploadkeyboard(Request $request){
        $data = new Keyboard;

        $image = $request->kimage; //rimage hocche form rimage name $image variable declare korsi
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->kimage->move('keyboardimage', $imagename);
        //  folder name gpuimage

        $data->kimage=$imagename; //rimage hocche database er nam

        $data->ktitle=$request->ktitle; //rtitle hocche database name & sesher rtitle hocche form er title name
        $data->kprice=$request->kprice;
        $data->kdescription=$request->kdescription;

        $data->save();
        return redirect()->back();
    }

    public function uploadmonitor(Request $request){
        $data = new Monitor;

        $image = $request->mimage; //rimage hocche form rimage name & $image variable declare korsi
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->mimage->move('monitorimage', $imagename);
        //  folder name gpuimage

        $data->mimage=$imagename; //rimage hocche database er nam

        $data->mtitle=$request->mtitle; //rtitle hocche database name & sesher rtitle hocche form er title name
        $data->mprice=$request->mprice;
        $data->mdescription=$request->mdescription;

        $data->save();
        return redirect()->back();
    }

    

    


    public function contact(Request $request){
        $data = new contact();

        

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->message=$request->message;

        $data->save();
        return redirect()->back();


    }
    
    public function viewcontact(){
        $data = contact::all();
        return view("admin.admincontact", compact("data"));
    }

}
