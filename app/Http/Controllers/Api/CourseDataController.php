<?php

namespace App\Http\Controllers\Api;

use App\Models\video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class CourseDataController extends Controller
{
    public function courseData(){
          $courseData = video::get();
         $groupedData = $courseData->groupBy('workShop');
         $workShop = $courseData->pluck('workShop')->unique()->values();
            return response()->json([
            'workShop' => $workShop,
           'courseData' =>  $groupedData,
           'message' => 'success'
        ]);

    }

    public function getMoreData(Request $request){
         $workShop = $request->workShop;
          $workShopData = video::where('workShop',$workShop)->get();
          $week = $workShopData->groupBy('Week_No');
            return response()->json([
                'workShopWeek' => $workShopData,
                'week' => $week,
                'message' => 'success'
        ]);
    }
    public function getWeekData($workShop,$weekId){
        $weekId = $weekId;
        $workShop = $workShop;
         $weekData = video::where("Week_No",$weekId)->where("workShop",$workShop)->get();
            return response()->json([
            'weekData' => $weekData,
           'message' => 'success'
        ]);

    }

    public function getVideo(Request $request){
        $weekNo = $request->weekNo;
        $id = $request->id;
        $workShop = $request->workShopQ;
        $video= video::where('id',$id)->first();
        $week=video::where('workShop',$workShop)->where('Week_No',$weekNo)->get();

         return response()->json([
            'video'=> $video,
          'week' => $week,
           'message' => 'success'
        ]);

    }

    public function getOverview(Request $request){
        $workShop = $request->workShopTitle;
        $LessonData = video::where('workShop',$workShop)->get();
       $uniqueWeek = $LessonData->pluck('Week_No')->unique()->sort()->values()->toArray();

    // Log the unique 'Week_No' values to debug
    logger($LessonData);
        logger($uniqueWeek);
         return response()->json([
            'uniqueWeek'=> $uniqueWeek,
          'LessonData' => $LessonData,
           'message' => 'success'
        ]);
    }

    public function doneStatus(Request $request){
        $status = $request->Status;
        $id = $request->id;
        video::where('id',$id)->update([
            'Status'=> $status
        ]);
         $statusChange = video::where('id',$id)->first();
         return response()->json([
          'statusChange' => $statusChange,
           'message' => 'success'
        ]);
    }


}
