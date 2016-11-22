<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use View;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       
    }
    public function imgUpload(Request $request){
       $this->validate($request, [
            'userImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //$file =$request->file('image');
        $imageName = time().'.'.$request->userImage->getClientOriginalExtension();
        $request->userImage->move(public_path('/uploads/images'), $imageName);
        $data->userImage= $imageName;
        $data->save();


    }
    public function index(){
	   $users=User::all();
     return view('home', compact('users'));
	  }
    public function create(){
      return view('/auth/register');
    }

	
    public function store(Request $request)
    {
      //
         
        $data= User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'userImage' =>$this->imgUpload($request),
        ]);
       
   			return redirect('admin')->with($data);

    }

   
   public function edit($id){
   		$user=User::find($id);
   	  return view('editUser',compact('user'));
   }
     public function show(){
        $users=User::all();
        // var_dump($users);
        // die()
        return view('admin',compact('users'));

    }
    public function update($id, Request $request)
   {
         
   		 $user=User::find($id);
   		 $userUpdate= $request->all([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'userImage' =>($request['userImage']),
        ]);
   		 $user->update($userUpdate);
  		 return redirect('admin');
   }
   public function destroy($id)
   {
      
       User::find($id)->delete();
   	   return redirect('admin');
   }

}
