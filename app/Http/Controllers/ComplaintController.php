<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\complaint;
use Illuminate\Http\Request;

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
        $complaint->user_id=auth()->user()->id;
        $imageName = time().'.'.$req->file('image')->extension();
        $req->file('image')->storeAs('public/images',$imageName );
        $complaint->image=$imageName;
        $complaint->save();
         $data=complaint::all();
        return redirect('/dashboard');
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

            return redirect('/dashboard');
        }
        public function dashboard(){
            $data=complaint::all();

            return view('dashboard',['data'=>$data]);

        }
        public function deleteComplaint(Request $req){
            $complaint=complaint::find($req->id);
            $complaint->delete();
            //dd($complaint);
            return redirect()->back();
        }
        public function mycomplaints(){
            $complaint=User::find(auth()->user()->id)->complaints()->get();
            return view('mycomplaint',['mycomplaint'=>$complaint]);
}
public function resolvedcomplaints(){
    $complaint=User::find(auth()->user()->id)->complaints()->where('isResolved',1)->get();
    return view('resolvedcomplaints',['resolvedcomplaints'=>$complaint]);

}

public function resolvedmycomplaints($id){
    $complaint=complaint::find($id);
    //dd($complaint);
     //    return response()->json(['message'=>$complaint]);
    $complaint->isResolved=1;
    $complaint->save();
    $complaint=complaint::where('isResolved',1)->get();

    return view('resolvedcomplaints',['resolvedcomplaints'=>$complaint]);

}
}
