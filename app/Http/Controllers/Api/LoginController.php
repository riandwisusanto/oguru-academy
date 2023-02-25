<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email    = $request->email;
        $password = $request->password;

        try {
            $user = User::where('email', $email)->first();
            
            if($user){
                if(Hash::check($password, $user->password)){
                    return response()->json([
                        'status' => true,
                        'message'=> 'Login Success',
                        'data'   => $user
                    ]);
                }
                else{
                    return response()->json([
                        'status' => false,
                        'message'=> 'Wrong password',
                        'data'   => null
                    ]);
                }
            }
            else{
                return response()->json([
                    'status' => false,
                    'message'=> 'Email not registered',
                    'data'   => null
                ]);
            }
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message'=> $e->getMessage(),
                'data'   => null
            ]);
        }
    }
}
