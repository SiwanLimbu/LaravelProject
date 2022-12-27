<?php

namespace App\Http\Controllers;
use App\Models\customer;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callbackGoogle()
    {
        try{
            $google_user = Socialite::driver('google')->user();
            $user = customer::where('email',$google_user->getEmail())->first();
            if(!$user){
                 customer::create([
                    'customer-name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                ]);
                return view('dashboard');
            }
            else
            {
                return view('dashboard');
                
            }
        }catch(\Throwable $th)
        {
            dd("something went wrong!". $th->getMessage());
        }
    }
}

