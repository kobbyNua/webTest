<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Farmer;
//use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //\
    
     function index(){
         return "hello";
     }
    function login(){
        return view('pages/login',['title'=>'auth']);
    }

    function auth(Request $request){
             $auth_request=$request->validate(['username'=>required,'password'=>required]);
             if(Auth::attempt($auth_request)){
                $request->session()->regenerate();
                return response()->json(['status'=>"success",'success'=>'login successful<br> redirecting to dashboard']);
             }  
             else{
                return (['status'=>"error",'error'=>'login not successful']);
             }
    }
    function detests(){
         return view('pages/lopps',['title'=>'auth']);
    }
    function dashboard(){
        if(Auth::check())
        {
            $user=Auth::user();
            return view('pages/dashboard',['title'=>'Dashboard','user'=>$user]);
        } else{
            return redirect('/auth/');
        } 
    }
    function farmersDashboard(){
        if(Auth::check()){
            $user=Auth::user();
            $data=DB::table('farmers')->get();
            return view('pages/farmers',['title'=>'farmers','data'=>$data,'user'=>$user]);
        }
        else{
            return redirect('/auth/');
        }

    }
    
    function register(){
        return view('pages/register',['title'=>'register']);
    }

    function viewFarmers($id){
       // echo 'hello'.$id;
        $data=DB::table('farmers')->where('id',$id)->get();
        return response()->json(['data'=>$data]);
    }
    function user_auth(Request $request){
       // $username=$request->email;
        //$password=$request->password;
        //return response()->json(['status'=>"success",'success'=>[$password,$username]]);
        $auth_request=$request->validate(['email'=>['required','email'],'password'=>['required']]);
        if(Auth::attempt($auth_request)){
           $request->session()->regenerate();
           return response()->json(['status'=>"success",'success'=>'login successful<br> redirecting to dashboard']);
        }  
        else{
           return (['status'=>"error",'error'=>'login not successful']);
        }
    }

    function user_registration(Request $request){
         $first_name = $request->fname;
         $last_name=$request->lname;
         $username=$request->username;
         $email=$request->email;
         $role=$request->role;
         $password=$request->password;
         $data=['first_name'=>$first_name,'last_name'=>$last_name,'username'=>$username,"email"=>$email,"role"=>$role,"password"=>password_hash($password,PASSWORD_BCRYPT)];
         $new_staff=self::create_newstaff($data);
         if($new_staff == 1){
            return response()->json(['status'=>"success",'success'=>'staff created']);
         }
         else{
            return response()->json(['status'=>"error",'error'=>'could not create staff']);
         }

         
    }

    function createNewFarmers(Request $request){
        $first_name = $request->fname;
        $last_name=$request->lname;
        $birth_place=$request->birth_place;
        $house_number=$request->house_number;
        $occupation=$request->occupation;
        $region=$request->region;  
        
        $dob = $request->dob;
        $community=$request->community;
        $district=$request->district;
        $marital_status=$request->marital_status;
        $bio=$request->bio;
        $photo=$request->file('load_photo');
        $gender=$request->gender;
        $photo->move('uploads',$photo->getClientOriginalName());
        $data=['first_name'=>$first_name,'last_name'=>$last_name,"birth_place"=>$birth_place,"house_number"=>$house_number,"occupation"=>$occupation,"region"=>$region,"dob"=>$dob,"community"=>$community,"district"=>$district,"marital_statu"=>$marital_status,"bio"=>$bio,"photo"=>$photo->getClientOriginalName(),'gender'=>$gender];
        $create_farmer=self::create_newfarmers($data);
       // echo "hello ".$create_farmer;
        if($create_farmer == 1){
            return response()->json(['status'=>"success",'success'=>'Famer details created successfuly']);
        }
        else{
            return response()->json(['status'=>"error",'error'=>'unable to create farmer details']);
        }
       
    
    }

    function create_newstaff($data){
        $create_farmer=DB::table('users')->insert([$data]);
        return $create_farmer;

   }

    function create_newfarmers($data){
         $create_farmer=DB::table('farmers')->insert([$data]);
         return $create_farmer;

    }

    function logout(Request $request){
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect('/');
    }
}
