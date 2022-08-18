<?php

namespace App\Http\Controllers;

use App\Models\files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Response;

class UploadFileController extends Controller
{
    public function index(){
        $data=files::all();
        return view('upload-files.index', compact('data', $data));
    }

    public function download(Request $fileUrl){

        // if (Storage::disk('public')->exists("pdf/$fileUrl->file")){
        //     $path = Storage::disk('public')->path("pdf/$fileUrl->file");
        //     $content = file_get_contents($path);

        //     return response($content)->withHeaders([
        //         'Content-Type'=>mime_content_type($path)
        //     ]);
        // }
        // else{
        //     return redirect('/404');
        // }

        if (Storage::disk('public')->exists("files/$fileUrl->file")){
            $path = Storage::disk('public')->path("files/$fileUrl->file");
            $content = file_get_contents($path);

            return response($content)->withHeaders([
                'Content-Type'=>mime_content_type($path)
            ]);
        }
        else{
            return redirect('/404');
        }
        // $pathToFile = storage_path('files/'. $fileUrl);
        // return response()->download($pathToFile)
        // $file = Storage::disk('files/')->get($fileUrl);
        // $file= public_path('files/').$fileUrl;
        // return Storage::download($file);
        // return response()->download($file);
        // $file = Storage::disk('public')->get($fileUrl);
  
        // $tempImage = tempnam(sys_get_temp_dir('public/'), $fileUrl);
        // $file = storage_path('files');
        // return response()->download($file, $fileUrl);

        // $file = Storage::disk('public')->get($fileUrl);
        // return Storage::download('public/1660739432.jpg');
    }
  

    public function store(Request $request){

        $data=new files();
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('storage/files',$filename);
        $data->fileUrl=$filename;

        $data->fileName=$request->fileName;

        $data->save();
        return redirect()->back();
    }
    
}
