<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Carbon\CarbonInterval;
class dashboardController extends Controller
{

   public function login(){

      return view('dashboard.login');

   }
   public function home(){

    return view('dashboard.index');
   }

   public function addMarketer(){
      
      return view('dashboard.add_marketer');
   }
//start inserting marketer data methode
   public function addMarketerData(Request $request){

    $validate = validator::make($request->all(),[
          'name' => 'required',
         'email' => 'required|email|unique:users',
         
          'phone' => 'required',
          'nid' => 'required',
          'address' => 'required',
          'password' => 'required|min:6',
         
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
  ]);
   $marketerimage = time() . '.' . $request->file('photo')->extension();
//    $request->file('photo')->storeAs('public/marketerImage', $marketerimage);
   $request->photo->move(public_path('/marketerImages'), $marketerimage);
     

        User::insert([

         'name' => $request-> name,
         'email' => $request-> email,
         'phone' => $request-> phone,
         'nid' => $request-> nid,
         'address' => $request-> address,
         'password' => Hash::make($request->password),
         'image' => $marketerimage,
         
        
      ]);
      return redirect('/add/marketer');
   }
   //end inserting marketer data methode




   //start retrieving marketer data methode
   public function allMarketer(){

      $marketer = DB::table('users')->get();
      $date = Carbon::now()->toDateString();
      $attendance = [];
  
      foreach ($marketer as $marketerid) {
          $attendance[$marketerid->id] = DB::table('attendances')
              ->where('user_id', $marketerid->id)
              ->whereDate('date', $date)
              ->first();
      }
  
      return view('dashboard.all_marketer', compact('marketer', 'attendance'));
  }
  
   // end retrieving marketer data methode 


//start edit marketer data methode
public function editAllMarketer($id){

   $marketerData = DB::table('users')->where('id',$id)->first();

   return view('dashboard.edit_all_marketer',compact('marketerData'));
}
public function updateMarketer(Request $request,$id){

   // $data = $request->id;
   DB::table('users')->where('id',$id)->update([
        


      'name' => $request-> name,
      'email' => $request-> email,
      'phone' => $request-> phone,
      'nid' => $request-> nid,
      'address' => $request-> address,
      
     
         
         
   ]);
   return redirect('all/marketer');
}
// end delete marketer data methode 
public function deleteMarketer($id){

   DB::table('users')->where('id',$id)->delete();
   return back();


}

// public function showAttendance($id){


   

//    $attendance = DB::table('attendances')->where('user_id',$id)->where('date', )->first();


//    return view('dashboard.all_marketer',compact('attendance'));
//   $present = 'Yes';
   // if($attendance){
   // return view('dashboard.all_marketer',compact('present'));
   // }else{

   //    $present = 'No';

   //    return view('dashboard.all_marketer',compact('present'));

   // }

public function viewData($id){
   $date = carbon::now()->setTimezone('Asia/Dhaka')->toDateString();


    $marketer = DB::table('users')->where('id',$id)->get();
   
     $totaltask = DB::table('tasks')->where('user_id',$id)->count();

     
     $todaytask = DB::table('tasks')->where('user_id',$id)->whereDate('date',$date)->count();



    

 
       

       
        $attendances = DB::table('attendances')
        ->select('starting_time', 'end_time')
        ->where('user_id', $id)
        ->whereDate('date', $date)
        ->get();

 
    $totalDuration = 0;
    $startTime = null;
    $endTime = null;
    $thegrandtotal = null;
    // Loop through each pair of starting and ending times
    $attendanceCount = count($attendances);
for ($i = 0; $i < $attendanceCount; $i++) {
    $attendance = $attendances[$i];

    // Check if it's a start time
    if (!isset($startTime) && isset($attendance->starting_time)) {
        $startTime = Carbon::parse($attendance->starting_time);
    } elseif (isset($attendance->end_time)) { // It's an end time
        $endTime = Carbon::parse($attendance->end_time);

      
        $duration = $endTime->diffInSeconds($startTime);
        $totalDuration += $duration;

        

        
        $startTime = null;
        $endTime = null;
    }
}

      $interval = CarbonInterval::seconds($totalDuration);
      
    $totalFormatted = $interval->cascade()->forHumans(['parts' => 3]);
    
    $attendances2 = DB::table('attendances')
        ->select('starting_time', 'end_time')
        ->where('user_id', $id)
        ->get();

 
    $totalDuration2 = 0;
    $startTime = null;
    $endTime = null;
   
    // Loop through each pair of starting and ending times
    $attendanceCount2 = count($attendances2);
for ($i = 0; $i < $attendanceCount2; $i++) {
    $attendance2 = $attendances2[$i];

    // Check if it's a start time
    if (!isset($startTime) && isset($attendance2->starting_time)) {
        $startTime = Carbon::parse($attendance2->starting_time);
    } elseif (isset($attendance2->end_time)) { // It's an end time
        $endTime = Carbon::parse($attendance2->end_time);

      
        $duration2 = $endTime->diffInSeconds($startTime);
        $totalDuration2 = $totalDuration2 + $duration2;

        

        
       
        
    }
}
$interval2 = CarbonInterval::seconds($totalDuration2)->cascade();
      
$totalFormatted2 = $interval2->cascade()->forHumans(['parts' => 3]);
$totalFormatted2 = preg_replace('/(\d+ days?)/', '', $totalFormatted2);

$totalincome = DB::table('tasks')->where('user_id',$id)->sum('charge');
    
   return view('dashboard.view',compact('marketer','totaltask','totalFormatted','todaytask','totalFormatted2','totalincome'));
}




public function todayTask($id){
   $date = Carbon::now()->toDateString();

   $todaytask = DB::table('tasks')->where('user_id', $id)->whereDate('date', $date)->get();
   $user = DB::table('users')->where('id', $id)->first();
   $name2 = $user->name;

   return view('dashboard.today_task', compact('todaytask', 'name2'));
}







public function totalTask($id){

   $totaltask = DB::table('tasks')->where('user_id',$id)->get();
   $user = DB::table('users')->where('id', $id)->first();
   $name2 = $user->name;
   return view('dashboard.total_task',compact('totaltask','name2'));
}

}
