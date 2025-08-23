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
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
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
        $profile    = $request->post('profile');
        $model      = New User();

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:20|string|regex:/^[A-Za-z\s]+$/|unique:users,name',
            'profile'  => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
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

        $profilePath = null;
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            // Generate unique filename
            $filename = time() . '_' . $file->getClientOriginalName();
            // Store in storage/app/public/profiles
            $profilePath = $file->storeAs('profiles', $filename, 'public');
        }

        $data = [
            'name' => $name,
            'email' => $email,
            'usertype' => 2,
            'password' => Hash::make($password), // ✅ properly hashed
            'profile_image' => $profilePath, // ✅ properly hashed
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
                'profile'   => $user->profile_image,
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

    public function profile_edit()
    {
        $data['user']  = user::find(session('user_id'));
        return view('auth.profileEdit', $data);
    }

    function edit_profile(Request $request)
    {
        $name       = $request->post('name');
        $email      = $request->post('email');
        $profile    = $request->post('profile');
        $password   = $request->post('password');
        $user_id    = $request->post('user_id');
        $model      = new user;

        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:user, name, ' .$user_id. ',id',
            'email' => 'required|email|unique:user, email,' .$user_id. ',id',
        ]);

        $profilePath = null;

        if($request->hasFile('profile'))
        {
            $file           = $request->file('profile');
            $filename       = time() . '_' . $file->getClientOriginalName();
            $profilePath    = $file->storeAs('profiles', $filename, 'public');
        }

        $data['profile_image']   = $profilePath;

        if(!empty($data))
        {
            $update = $model->edit_profile($user_id, $data);
        }

        // echo "<pre>";print_r(session('profile'));die;

    }

    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();             // clears all session data
        $request->session()->invalidate(); // invalidate session
        $request->session()->regenerateToken(); // regenerate CSRF token
        $response['status'] = true;
        echo json_encode($response);
    }
}
