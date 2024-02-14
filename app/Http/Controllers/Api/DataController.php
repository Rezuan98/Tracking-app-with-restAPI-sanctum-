<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\tasks;
use App\Models\Attendance;

class DataController extends BaseController
{
    public function profile(Request $request)
{
    $user = auth()->user();

    if (!$user) {
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    try {
        $data = User::findOrFail($user->id);
        return $this->sendResponse($data, 'data retrieved successfully');

    } catch (\Exception $e) {
        return response()->json(['error' => 'Error retrieving user data'], 500);
    }
}

public function insertTask(Request $request){
    // $validate = $request->validate([
    //     'name' => 'required',
    //     'mobile	' => 'required',
    //     'district	' => 'required',
    //     'upazilla' => 'required',
    //     'address	' => 'required',
    //     'photo'=> 'required',
    //     'charge'=> 'required',
    //     'monthlyfee'=> 'required',
    //     'note'=> 'required',
    // ]);

    // if($validator->fails()){

    //     return $this->sendError('validation Error', $validate->errors());
    // }
    $taskphoto = time() . '.' . $request->file('photo')->extension();
    $request->photo->move(public_path('/taskImages'), $taskphoto);
      $user_id = auth()->user()->id;
   $dataInsert = DB::table('tasks')->insert(
        [
            'user_id' => $user_id,
            'name' => $request->name,
        'mobile' =>  $request->mobile, 
        'district' =>  $request->district, 
        'upazilla' =>  $request->upazilla, 
        'address' =>  $request->address, 
        'photo' =>$taskphoto, 
        'status' => $request->status, 
        'charge' =>  $request->charge, 
        'monthlyfee' =>  $request->monthlyfee, 
        'note' =>  $request->note,  
        'created_at'=> Carbon::now(),
        'updated_at' => Carbon::now(),
        
        
        ]);

        $success['Marketer_Name'] = auth()->user()->name;

        if($dataInsert){

            return $this->sendResponse($success,'Task Data inserted successfully' );
}else {
    return $this->sendError('Data could not Insert',);
}

}

public function getTaskData(Request $request){

$userid = auth()->user();

$data = tasks::where('user_id',$userid->id)->get();

$success['tasks'] = $data;
$success['Marketer_Name'] = $userid->name;

        return $this->sendResponse($success, ' task data retrieved successfully');

}

public function startTask(Request $request){
        

    $user = auth()->user();
    $date = Carbon::now()->toDateString();
     $time = Carbon::now()-> toTimeString();
    DB::table('attendances')->insert([
        'user_id' => $user->id,
        'name'=> $user->name,
        'date' => $date,
        'starting_time' => $time,

    ]);
    $success['name'] = $user->name;
    $success['starting_at'] =  $time;
    return $this->sendResponse($success, ' Task successfully started');
}
public function endTask(Request $request){
        

    $user = auth()->user();
    $date = Carbon::now()->toDateString();
     $time = Carbon::now()-> toTimeString();
    DB::table('attendances')->insert([
        'user_id' => $user->id,
        'name'=> $user->name,
        'date' => $date,
        'end_time' => $time,

    ]);
    $success['name'] = $user->name;
    $success['Ending_at'] =  $time;
    return $this->sendResponse($success, ' Task successfully ended');

}

public function totalTask(){
   
    $user_id = auth()->user()->id;


    $latestDate = Attendance::where('user_id', $user_id)->max('starting_time');
    $attendances = Attendance::where('user_id', $user_id)->whereDate('starting_time', $latestDate)->get();

    $totalWorkingTimeSeconds = 0;

    foreach ($attendances as $attendance) {
        $startTime = $attendance->starting_time;
        $endTime = $attendance->end_time;

        if ($startTime && $endTime) {
            $startDateTime = Carbon::parse($startTime);
            $endDateTime = Carbon::parse($endTime);

            // Calculate the difference in seconds
            $workingSeconds = $endDateTime->diffInSeconds($startDateTime);

            // Accumulate the total working time in seconds
            $totalWorkingTimeSeconds += $workingSeconds;
        }
    }

    // Convert total working time to hours, minutes, and seconds if needed
    $totalHours = intdiv($totalWorkingTimeSeconds, 3600);
    $totalMinutes = intdiv(($totalWorkingTimeSeconds % 3600), 60);
    $totalSeconds = $totalWorkingTimeSeconds % 60;

    return [
        "hours" => $totalHours,
        "minutes" => $totalMinutes,
        "seconds" => $totalSeconds,
    ];

    }
    

public function totalProject(){
    $user_id = auth()->user();

    $totalproject = DB::table('tasks')->where('user_id', $user_id->id)->count();

    $success['Name'] = $user_id->name;
    $success['Total Project'] = $totalproject;

    return $this->sendResponse($success, ' Task successfully Counted');
}

public function totalIncome(){
    $user_id = auth()->user();

    $totalIncome = DB::table('tasks')->where('user_id',$user_id->id)->sum('charge');
   
    $success['Total Income'] = $totalIncome;
    return $this->sendResponse($success, ' Total income retrieved successfully');

}
public function performance(){
    
    $user_id = auth()->user();
}}
