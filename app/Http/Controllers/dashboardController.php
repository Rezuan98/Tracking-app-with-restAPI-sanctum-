<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

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

    $marketer = DB::table('users')->where('id',$id)->get();

     $performance = DB::table('performances')->where('user_id',$id)->get();

     $task = DB::table('tasks')->where('user_id',$id)->get();

   

   return view('dashboard.view',compact('marketer','task','performance'));
}

}