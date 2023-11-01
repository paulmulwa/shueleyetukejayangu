<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $id = Auth::user()->id;
        //we are geting the username fro the model user with a va
        //a variable admin data that i used to get data fro t he model and find the id
        //the variable username is ised to access name from the daatabase
        $adminData = User::find($id);
        $username = $adminData->name;
        $request->session()->regenerate();

         $notification = array(
            'message' => 'User '.$username.'Admin Login Successfully',
            'alert-type' => 'info'
        );
        $url = '';// declaring url

        if($request->user()->role === 'admin'){
            $url = 'admin/dashboard';
        }
        elseif($request->user()->role === 'agent'){
            $url = 'agent/dashboard';

        }
        elseif($request->user()->role === 'user'){
            $url = '/dashboard';

        }

        return redirect()->intended($url);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
