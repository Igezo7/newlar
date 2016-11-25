<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class FuncController extends Controller
{
    //
    public function download()
    {
        //echo $_SERVER['PHP_SELF']."";
        return response()->download('../storage/app/public/test.txt');
    }

    public function upload(Request $request)
    {
//        var_dump($_FILES['files']);
//        var_dump($_FILES['files']['size']);
//        $files = Input::file('files');
//        var_dump($files->isValid());
//
     //   $files = Request::file('files');
        $file = $request->file('files');

        if ($file->isValid())
        {
           var_dump($file);
       //     var_dump($file['test']);
     //       $test = [];
       //     $origin = $file->getClientOriginalName();
    //        $ext = $file->getClientOriginalExtension();
    //        $real = $file->getRealPath();
    //        $type = $file->getClientMimeType();
    //        array_push($test, compact($originname,$ext,$real,$type));
     //       var_dump($origin);
            $request->file('files')->move('../storage/app/1/2');
            $this->test($file);
        }
    }

    public function test(Request $request)
    {
        $info = $request->file('files');
        var_dump($info);
        var_dump($info->isVaild());
    }

}
