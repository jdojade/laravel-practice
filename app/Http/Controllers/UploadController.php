<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index(){
        return view('upload');
    }

    public function store(Request $request){
        if($request->hasFile('receipt')) {
            $receipt = $request->file('receipt');
            $receiptName = time().'.'.$receipt->getClientOriginalExtension();
            $path = Storage::disk('s3')->put($receiptName, file_get_contents($receipt), 'public');
            $receiptUrl = Storage::disk('s3')->put($receiptName, 'public');

            // here you can save $receiptUrl to your RDS database

            return back()->with('success','Receipt successfully uploaded');
        } else {
            return back()->with('error','No file selected');
        }
    }
}
