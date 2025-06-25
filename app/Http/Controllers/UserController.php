<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\user;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index()
    {
        $data['users']= user ::all();
        return view('users', $data);
      

      
    }
    public function submit(Request $request)
    {
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password) // Hashing the password
    ];
    user::insert($data);
    return redirect()->route ('users.table');
    }


    public function delete($id){
  if(!$id){
    return redirect()->back();
  }
  $user = User::find($id);
  if($user){
    $user->delete();
  }
  return redirect()->back();
}


public function edit($id){
  if(!$id){
    return redirect()->back();
  }
  $user = User::find($id);
  if($user){
     return view('edit',compact('user'));
  }
  return redirect()->back();
}

public function update(Request $request,$id){
  if(!$id){
    return redirect()->back();
  }
  $user = User::find($id);
  if($user){
   $data =[ 'name' => $request->name,
    'email' => $request->email,
    'password' =>'fdsd',
  ];
  User::where('id',$id)->update($data);
  return redirect()->route('users.table');
  }
  return redirect()->back();

}
public function signup(Request $request)
{
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password   // plain-text for practice only
    ];

    User::insert($data); // or User::create($data);

    // Step 3: Redirect after signup
    return redirect()->route('users.table')->with('success', 'Signup successful!');
}

public function login(Request $request){

  $request->validate([
    'email' => 'required|email',
    'password' => 'required|min:6', 
  ]);

  $user = User::where('email', $request->email)->first();
 
  if($user){
    if (Hash::check($request->password, $user->password)) {
      
      Auth::login($user);
        return redirect()->route('users.table')->with('success', 'Login successful!');
    }
  }

  return redirect()->back()->with('error', 'Invalid credentials. Please try again.');


}


}