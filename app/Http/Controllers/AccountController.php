<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AccountController extends Controller
{
    public function index(){
        $accounts = Account::all();
        return view('home', ['accounts' => $accounts]);
    }

public function account($username) {
        $account = Account::where('username', $username) -> first();
        if (!$account) {
            return redirect() -> back() -> with('message', 'Account not found');
        }
    return view('form.Account', ['account' => $account]);
}


//Login
    public function showLogin() {
        return view('form.LoginForm');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $accounts = Auth::account();
            return response()->json([
                'fullname' => $accounts->fullname,
                'username' => $accounts->username,
                'email' => $accounts->email,
                'phone' => $accounts->phone,
                'address' => $accounts->address,
            ]);
        }
        return redirect()->back()->withErrors(['message' => 'Wrong username or password'])->withInput();
    }

//checkingLogin
    public function checkLogin(Request $request) {

        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        $account = Account::where('username', $request-> username)-> first();
        if ($account && Hash::check($request-> password, $account-> password)) {
            auth() -> login($account);

            return redirect() -> route('account', ['username' => $account-> username]);
        }
        return redirect()->back()->with('message', 'Wrong username or password. Please try again.');
    }



//register
    public function showRegister(){
        return view('form.RegisterForm');
    }
    public function register(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string',
            'username' => 'required|string|unique:accounts',
            'password' => 'required|string|min:8',
            'email' => 'required|string|email|unique:accounts',
            'phone' => 'required|string|unique:accounts',
            'address' => 'required|string',
        ]);
        if ($request->input('password') !== $request->input('re_password')) {
            return redirect()->back()->withInput()->withErrors(['password' => 'The password and password confirmation do not match.']);
        }

//        dd($request-> all());

            $account = new Account();
            $account -> fullname = $request -> input('fullname');
            $account -> username = $request -> input('username');
            $account-> password = Hash::make($request-> input('password'));
            $account -> email = $request -> input('email');
            $account -> phone = $request -> input('phone');
            $account -> address = $request -> input('address');
            $account -> save();

//            dd($account -> all());
        return redirect() -> back() -> with('success', 'Congratulation.');
    }
}
