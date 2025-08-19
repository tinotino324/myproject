<?php
// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Author;
use App\Mail\UserRegisteredMail;
use App\Mail\checkingMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // User::factory()->count(5)->create();
        return view('auth.login');
    }

    public function registerForm()
    {
        return view('auth.register');
    }

    public function create_user(Request $request)
    {
        $response   = FALSE;
        $name       = $request->post('name');
        $email      = $request->post('email');
        $password   = $request->post('password');
        $model      = New User();

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:20|string|regex:/^[A-Za-z\s]+$/|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        if($validator->fails())
        {
            $errors                = $validator->errors();
            $response['status']    = FALSE; 
            $response['message']   = $errors->getMessages();
            echo json_encode($response);die;
        }

        $data = [
            'name' => $name,
            'email' => $email,
            'usertype' => 2,
            'password' => Hash::make($password), // ✅ properly hashed
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $userData = [
            'name' => ucfirst($name),
            'email' => $email,
            'usertype' => 2,
            'password' => $password,
        ];
        
        $insert = $model->user_insert($data);

        if($insert)
        {
            Mail::to($email)->send(new UserRegisteredMail($userData));
            $response['status']     = TRUE;
            $response['message']    = "Registered Successfully";
            echo json_encode($response);die;
        }
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
     
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
        
            // ✅ Set custom session values
            session([
                'user_id'   => $user->id,
                'user_name' => $user->name,
                'user_email'=> $user->email,
                'usertype'  => $user->usertype,
            ]);
        
            $response['status'] = true;
        }
        else
        {
            $response['status'] = false;
            $response['errors'] = 'Invalid email or password.';
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
