<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\complaint;
class ComplaintController extends Controller
{
    //

    public function addComplaint(Request $req){
        $req->validate([
            'type'=>'required',
            'area'=>'required',
            'description'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);             
        $complaint=new complaint;
        $complaint->type=$req->type;
        $complaint->area=$req->area;
        $complaint->description=$req->description;
        $complaint->user_id=1;
        $imageName = time().'.'.$req->file('image')->extension();  
        $req->file('image')->storeAs('public/images',$imageName );
        $complaint->image=$imageName;
        $complaint->save();
        $data=complaint::all();
        return view('dashboard',['data'=>$data]);
        }
        public function updateComplaint(Request $req){
            $complaint=complaint::find($req->id);
            //dd($complaint);
            return view('update-complaint',['complaint'=>$complaint]);
        }
        public function updateSaveComplaint(Request $req){
            $complaint=complaint::find($req->id);
            $complaint->type=$req->type;
            $complaint->area=$req->area;
            $complaint->description=$req->description;
            $complaint->save();
            $data=complaint::all();
            
            return view('dashboard',['data'=>$data]);
        }
        public function dashboard(){
            $data=complaint::all();
            
            return view('dashboard',['data'=>$data]);
            
        }
}
