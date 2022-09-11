<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use illuminate\Http\Request;

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
    | ログインコントローラー
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     * ログイン後に遷移するページ
     * @var string
     */
    protected $redirectTo = '/memo';

    /**
     * ログイン時のバリデーション
     * @return Request $request
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|max:255|email',
            'password' => 'required|min:8|max:255|regex:/^[a-zA-Z0-9]+$/',
        ],
        [
            'password.regex' => ':attributeは半角英数字で入力してください',
        ]);
    }


    /**
     * Create a new controller instance.
     * コンストラクタ
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
