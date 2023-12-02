<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Authentication;
use Illuminate\Http\Request;
use App\Http\Requests\FrontendUser\Auth\SignupRequest;
use App\Http\Requests\FrontendUser\Auth\SigninRequest;
use Exception;
use Illuminate\Support\Facades\Hash;
use Toastr;

class AuthenticationnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function signUpForm(){
        return view('frontenduser.auth.register');
    }

    public function signUpStore(SignupRequest $request){
        try{
            $user=new Authentication;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->contact=$request->contact;
            $user->password=Hash::make($request->password);
            if($user->save())
                return redirect('frontenduser/login')->with('success','Successfully Registred');
            else
                return redirect('frontenduser/login')->with('danger','Please try again');
        }catch(Exception $e){
            dd($e);
            return redirect('frontenduser/login')->with('danger','Please try again');;
        }
    }

    public function signInForm(){
        return view('frontenduser.auth.login');
    }

    public function signInCheck(SigninRequest $request){
        try{
            $user=User::where('contact',$request->username)
                        ->orWhere('email',$request->username)->first();
            if($user){
                if($user->status==1){
                    if(Hash::check($request->password , $user->password)){
                        $this->setSession($user);
                        return redirect()->route('dashboard')->with('success','Successfully login');
                    }else
                        return redirect()->route('frontenduser/login')->with('error','Your phone number or password is wrong!');
                }else
                    return redirect()->route('frontenduser/login')->with('error','You are not active user. Please contact to authority!');
        }else
                return redirect()->route('frontenduser/login')->with('error','Your phone number or password is wrong!');
        }catch(Exception $e){
            // dd($e);
            return redirect()->route('frontenduser/login')->with('error','Your phone number or password is wrong!');
        }
    }

   

    public function signOut(){
        request()->session()->flush();
        return redirect('frontenduser.login')->with('danger','Succfully Logged Out');
    }
}
