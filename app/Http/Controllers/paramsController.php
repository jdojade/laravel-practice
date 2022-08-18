<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paramsController extends Controller
{
    public function index($name)
    {
        $arraySample = [
            's1' => 'sample1',
            's2' => 'sample2',
            's3' => 'sample'
        ];
        return view('params.index',
         ['sample' => $arraySample[$name] ??
          'array' . $name . 'does not exists'])->with('arraySample',$arraySample);
    }

    // public function index($id)
    // {
    //     $id;
    //     $sampleVar = "text text text";
    //     return view('params.index',
    //           ['sample' => $id[$id],
    //           'sampleVar'=>  $sampleVar ??
    //        'array' . $id . 'does not exists']);
    //     }
    // }
}