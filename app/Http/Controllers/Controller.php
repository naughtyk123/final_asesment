<?php

namespace App\Http\Controllers;

use App\Models\Runners;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     public function getdata(Request $request){
         try {
             $or = Runners::find($request->runnerId);
             foreach ($or->formdata as $form) {
                 $age = $form->age;
                 $sex = $form->sex;
                 $color = $form->color;
             }

//             if ($or) {
                 return response()->json([
                     'success' => 'true',
                     'races' => $or->races->name,
                     'meeting' => $or->races->meeting->name,
                     'data' => [[
                         'runner_name' => $or->name,
                         'age' => $age,
                         'sex' => $sex,
                         'color' => $color,
                         'last_runs' => $or->lastrun,
                     ]],
                     'status' => '200',
                 ]);
//             } else {
//                 return response()->json([
//                     'success' => 'false',
//                     'status' => '200',
//                 ]);
//             }
         }catch (\Exception $e) {
             return response()->json([
                 'errors' => ['code' => 'product-001', 'message' => trans('custom.no_data_found')]
             ], 404);
//             return response()->json([
//                 'success' => 'false',
//                 'status' => '404',
//                 'message' => 'no_data_found',
//             ],404);
         }


    }
}

