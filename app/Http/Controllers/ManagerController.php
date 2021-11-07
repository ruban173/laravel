<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('manager.panel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('manager.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('manager.register');

    }
    public function registerPost(Request $request)
    {
        $validated = $request->validate([
            'login' => 'required|unique:users|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|same:repeat_password',
        ],
        [
            'login.required'=>'Обязательное поле',
            'login.unique'=>'Логин существует',
            'login.min'=>'Не менее 5 символов',

            'email.required'=>'Обязательное поле',
            'email.email'=>'Не является email',
            'email.unique'=>'Email существует',

            'password.required'=>'Обязательное поле',
            'password.min'=>'Не менее 8 символов',
            'password.same'=>'Проверте пароли',
        ]);

        if(User::create($validated)){
               return  redirect()->route('home');
        };

        return view('manager.register');

    }
    public function forgotPassword()
    {
        return view('manager.forgot');

    }

}
