<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\complaint;

class adminController extends Controller
{
    public function showComplaint(){
        $data=complaint::where('isResolved',0)->orderBy('updated_at', 'DESC')->paginate(2);
            
            return view('adminShowComplaint',['data'=>$data ,'resolved' => false]);
    }
    public function showResolvedComplaint(){
        $data=complaint::where('isResolved',1)->orderBy('updated_at', 'DESC')->paginate(2);
            
            return view('adminShowComplaint',['data'=>$data , 'resolved' => true]);
    }

    function resolvedComplaint($id, Request $request)
    {
        $Complaint = complaint::find($id);
        $request->session()->flash('status', 'Complaint ' . $Complaint->id . ' resolved successfully');

        $Complaint->isResolved = 1;
        $Complaint->save();
        return redirect()->back();
    }
}
