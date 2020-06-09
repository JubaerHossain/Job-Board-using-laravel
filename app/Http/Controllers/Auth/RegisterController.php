<?php

namespace App\Http\Controllers\Auth;

use App\Country;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|string',
            'country' => 'required|string',
            'gender' => 'required|string|max:1',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $role = 'admin';
        if($role == 'admin'){
            $this->redirectTo = 'admin/dashboard';
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'country' => $data['country'],
            'state' => 'state',
            'role' => $role,
            'password' => Hash::make($data['password']),
        ]);
    }

    //show company registration form
    public function showCompany()
    {
        $country = Country::all()->pluck('name');
        return view('home.companyRegister',compact('country'));
    }

    //register a company
    public function regCompany()
    {
        $this->validate(request(),[
            'username' => 'required|max:25',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'company_person' => 'required',
            'name' => 'required',
            'person_contact' => 'required',
            'person_designation' => 'required',
            'country' => 'required',
            'address' => 'required',
            'check' => 'required',
            'phone' => 'required',
            'state' => 'required'
        ]);

        User::create([
            'name' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'phone' => request('phone'),
            'country' => request('country'),
            'gender' => 1,
            'state' => request('state'),
            'role' => 'company',

        ])->company()->create([
            'name' => request('name'),
            'company_person' => request('company_person'),
            'person_contact' => request('person_contact'),
            'person_designation' => request('person_designation'),
            'address' => request('address'),
            'status' => '1'
        ]);

        return redirect('/company-login')->with('RegSuccess','Register Success. Login to continue');
    }

    //show employee registration
    public function showEmployee()
    {
        $country = Country::all()->pluck('name');
        return view('home.employeeRegister',compact('country'));
    }

    //register an employee
    public function registerEmployee()
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'phone' => 'required|numeric',
            'country' => 'required',
            'state' => 'required',
            'gender' => 'required',
            'check' => 'required'
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'phone' => request('phone'),
            'country' => request('country'),
            'state' => request('state'),
            'gender' => request('gender'),
            'role' => 'employee',

        ]);

        $emp = $user->employee()->create();
        $emp->training()->create();
        $emp->reference()->create();

        return redirect('/login')->with('regSucc','Registration Successful. Login to continue!');
    }
}
