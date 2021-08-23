<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Inertia\Inertia; 

class Spotify extends Controller
{


    //FACEBOOK --> Conexión
   /**
     * Create a new controller instance.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToFB()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function handleCallback()
    {
        try {
            
            
            $user = Socialite::driver('facebook')->user();
            

            $saveUser = User::updateOrCreate([
             'facebook_id' => $user->getId(),
            ],[
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => Hash::make($user->getName().'@'.$user->getId())
                
            ]);
            console.log($saveUser);

            Auth::loginUsingId($saveUser->id);
            
            
           
               return Inertia::render('Home/index'); 
            
            
           /* $finduser = User::where('social_id', $user->id)->first();

            if($finduser){
                Auth::login($finduser);
                return redirect('/dashboard');

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'social_type'=> 'facebook',
                    'password' => encrypt('my-facebook')
                ]);

                Auth::login($newUser);

                return redirect('/dashboard');
            }*/

        }
        catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}

