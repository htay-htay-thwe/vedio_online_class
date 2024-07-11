<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userRegister(Request $request){
          $data =[
            'role'=>$request->role,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phoneNumber' => $request->phoneNumber,
          ];
          logger($data);

         User::create($data);

          $user = User::where('email',$request->email)->first();
           return response()->json([
            'user' => $user,
            'token' => $user->createToken(time())->plainTextToken
        ]);
    }

    public function userLogin(Request $request){
          $user = User::where('email',$request->email)->first();
          logger($user);
          logger($request->password);
      if(isset($user)){
        if(Hash::check($request->password,$user->password)){
            return response()->json([
                'user' => $user,
                'token' => $user->createToken(time())->plainTextToken
            ]);
        }else{
            return response()->json([
            'user' => null,
            'token' => null
        ]);
        }
      }else{
        return response()->json([
            'user' => null,
            'token' => null
        ]);
      }
    }
}