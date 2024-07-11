<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    public function videoUpload(Request $request){
         $validator =Validator::make($request->all(), [
            'workShop'=> 'required',
            'weekNumber' => 'required',
            'title' => 'required',
            'cartoon' => 'required',
            'video' => 'required',
            'teacherName' => 'required',
            'purpose' => 'required'
        ]);
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
    $data = $this->getVideoData($request);

     if($request->hasFile('video')){
        $videoName = uniqid().'_'.$request->file('video')->getClientOriginalName();
     $request->file('video')->storeAs('public/videos',$videoName);
        $data['Video'] = $videoName;
            }
    video::create($data);
     $data = video::get();
    return redirect()->route('video#upload',compact('data'));
    }

    public function getVideo(){
        $data = video::get();
       return view('post/postCreate',compact('data'));
    }

    private function getVideoData($request){
        return [
            'workShop'=>$request->workShop,
            'Week_No'=>$request->weekNumber,
            'Title' => $request->title,
            'Cartoon'=> $request->cartoon,
            'Video' => $request->video,
            'Teacher_name'=> $request->teacherName,
            'Purpose'=> $request->purpose,
            'Notes' => $request->note,
        ];
    }

}