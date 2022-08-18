<?php 

// use code only 
namespace App\Http\Controllers;

use PDO;
use Illuminate\Http\Request;

class ItemsController extends Controller{

    public function index(){
        return view('items.index');
    }
}


