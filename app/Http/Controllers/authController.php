<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class authController extends Controller
{
    function redirect() {
        return Socialite::driver('google')->redirect();
    }

    function callback() {
        

        $user = Socialite::driver('google')->user();
        $id = $user->id;
        $email = $user->email;
        $name = $user->name;

        $cek = User::where('email', $email)->count();
        if($cek > 0) {
            $user = User::updateOrCreate(
                ['email' => $email],
                ['name' => $name,
                'google_id' => $id
                ],
            );
            return '<h1>Selamat Anda Berhasil Masuk</h1>';
        }else {
            return '<h1>Email Tidak Terdaftar</h1>';
        }

        
    }
}
