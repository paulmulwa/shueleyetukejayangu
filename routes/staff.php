public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // return redirect(RouteServiceProvider::HOME);
            if(Auth::check() && Auth::user()->role == 'user'){
                return redirect('/dashboard');
            }
            if(Auth::check() && Auth::user()->role == 'agent'){
                return redirect('/agent/dashboard');
            } if(Auth::check() && Auth::user()->role == 'admin'){
                return redirect('/admin/dashboard');
            }

            }
        }

        return $next($request);
    }
}
