<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function sendLoginResponse(Request $request){
        $request->session()->regenerate();
        $this->clearLoginAttempts($request);
        if(Auth::user()->role === 'admin'){
            return redirect()->route('admDashboard');
        }elseif (Auth::user()->role === 'employee'){
            if(session()->get('prevUrl')!=null){
                $url = session()->get('prevUrl');
//                dd(session()->get('prevUrl'));
                session()->forget('prevUrl');
                return redirect()->to($url);
            }else{
                return redirect()->route('empDashboard');
            }
        }
    }

    public function showLoginForm()
    {
        if(strpos(URL::previous() , 'jobapply/view')){
            session()->put('prevUrl',URL::previous());
        }
        return view('home.employeeLogin');
    }

    public function showCompanyLogin()
    {
        return view('home.companyLogin');
    }
}
