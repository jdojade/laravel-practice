<?php

// use  php artisan make:controller (Controller name)
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Items2 extends Controller
{
    public function index()
    {
        // send var to views another sample
        // Compact method
        // $sampleVar = "Sample var to text";
        // $anotherSample = "Another Sample";
        // // send array to views 
        // $arraySample = ['sample1', 'sample2', $sampleVar];

        // print_r(route('items2'));
        // return view('itmes2.index',compact('sampleVar', 'anotherSample'));
        return view('items2.index');
    }

    // under items2 folder 
    public function about()
    {

        // select all query function 
        // $data = DB::select('select * from practices');

        //select data from table use id
        // $data = DB::select('select * from practices where id = ?', [1]);

        // get method chain 
        // $data = DB::table('practices')
        //     ->where('id', $id)
        //     ->get();


        // get the specific all data with named of table rows
        // $data = DB::table('practices')
        //     ->select('name')
        //     ->get();

        // get the data with ascending order, desc for descending
        // $data = DB::table('practices')
        //     ->orberBy('name', 'asc')
        //     ->get();

        //get the  data with latest input, use oldest to get the oldest first
        // $data = DB::table('practices')
        // ->latest()
        // ->get();

        // get the data with random order
        // $data = DB::table('practices')
        // ->inRandomOrder('name')
        // ->get();

        //find the data with matching id
        // $data = DB::table('practices')
        //    ->find($id);

        // insert data in database 
        // $data = DB::table('practices')
        //         ->insert([
        //             'name' => 'sample2',
        //             'status' => 'not edited',
        //         ]);

        // Edit data in database table 
        // $data = DB::table('practices')
        // ->where('id', '=', $id)
        // ->update([
        //     'status' => 'Edited'
        // ]);

        //delete data in database selected the id
        // $data = DB::table('practices')
        // ->where('id', '=', $id)
        // ->delete();

        // dd($data);


        $title = "Sample Title";
        $arraySample = ['sample1', 'sample2', 'arraySample'];
        // With method 
        // routing using . and file name in folder
        return view('items2.about.about')->with('title', $title);
    }
}
