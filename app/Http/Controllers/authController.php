<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Laravel\Socialite\Facades\Socialite;

class authController extends Controller
{
    function index()
    {
        return view('auth.index');
    }
    
    function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    function callback()
    {
        $user = Socialite::driver('google')->user();
        $id = $user->id;
        $email = $user->email;
        //dd($id, $email);
        $name = $user->name;
        $avatar = $user->avatar;

        //return "$id - $email - $name";
        $cek = User::where('email', $email)->count();
        if($cek > 0) {
            $avatar_file = $id.'.jpg';
            $fileContent = file_get_contents($avatar);
            File::put(public_path('admin/images/faces/'.$avatar_file), $fileContent);
            $user = User::updateOrCreate(
                ['email' => $email],
                [
                    'name' => $name,
                    'google_id' => $id,
                    'avatar' => $avatar_file
                ]
            );

            Auth::login($user);
            return redirect()->to('dashboard')->with('success', 'login berhasil');
        }else{
            return redirect()->to('auth')->with('error', 'email tidak terdaftar');
        }

        
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('auth');
    }
}
