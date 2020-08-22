<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

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
    protected $is_admin = 1;

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
            'reg_name' => ['required', 'string', 'max:255'],
            'reg_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'reg_password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'captcha' => ['required','captcha']

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
       ///dd($data); 

        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_admin' => $this->is_admin,
        ]);
          
           /*=======Validation for customer and user by Ghazanfar on 11-2-2020=========*/
            

        if($this->is_admin > 0) {
            $customer =new CustomerController();
            $customer->savingCustomer($data,$user->id);
        }

       return $user;
       
    }


    public function register(Request $request)
    {
        
       
        if(strpos($request->server('HTTP_REFERER'), 'register')  == true) {
            $is_admin = 0;
        } 
        
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }


    protected function registered(Request $request, $user)
    {
        if($user->is_admin > 0){
            Session::forget('guest_customer_id');
            return redirect('/checkout/payment');
        }

        
    }
}
