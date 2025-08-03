<?php
// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function create_user()
    {
        $model= New User();
        $model->user_insert();
        die("111");
    }

    public function login_check(Request $request)
    {
        $response   = [];
        $email      = $request->post('email');
        $password   = $request->post('password');
        
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) 
        {
            $response['status'] = false;
            $response['errors'] = $validator->errors();
            echo json_encode($response);die;
        }

        $credentials = $request->only('email', 'password');
     
        if (!Auth::attempt($credentials)) 
        {
            $response['status'] = false;
            $response['errors'] = 'Invalid email or password.';
        }
        else
        {
            if (Auth::attempt($request->only('email', 'password'))) {
                $user = Auth::user();
            
                // ✅ Set custom session values
                session([
                    'user_id'   => $user->id,
                    'user_name' => $user->name,
                    'user_email'=> $user->email,
                ]);
            
                $response['status'] = true;
            }
        }

        echo json_encode($response);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $response['status'] = true;
        echo json_encode($response);
    }
}
