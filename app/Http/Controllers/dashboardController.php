<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class dashboardController extends Controller
{
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

      return view('dashboard.all_marketer',['marketer' => $marketer]);
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
        


      'name' => $request-> marketer_name,
         'email' => $request-> marketer_email,
         'username' => $request-> marketer_username,
         'phone' => $request-> marketer_phone,
         'nid' => $request-> marketer_nid,
         'address' => $request-> marketer_address,
        
         'manager' => $request-> area_manager,
         
   ]);
   return redirect('all/marketer');
}
// end delete marketer data methode 
public function deleteMarketer($id){

   DB::table('users')->where('id',$id)->delete();
   return back();


}
}

