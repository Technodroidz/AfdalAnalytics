<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckTenantDomain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $subdomain = $request->route('subdomain');
        $company = \App\Models\User::where('company', $subdomain)->first();
        if (!$company) {
            // @todo redirect to not exists page
            return redirect()->route('signup');
        }
        // @todo:

        // 1. Is not active -> redirect to not active page
        // 2. Is not exists ->
        //   if (!$shop->is_active) {
        //       return 'NOT ACTIVE';
        //   }
        return $next($request);
    }
}
