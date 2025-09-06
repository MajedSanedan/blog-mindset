<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // إذا المستخدم مسجل دخول وله role = admin
        if (auth()->check() && auth()->user()->role->name === 'admin') {
            return $next($request);
        }

        // إذا مو admin → رجّعه للصفحة الرئيسية أو 403
        return redirect('/')->with('error', 'You are not authorized to access this page.');
    }
}
