<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorizeUser
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = $request->user(); 

        if (!$user || !in_array($user->getRole(), $roles)) {
            abort(403, 'Forbidden. Kamu tidak punya akses ke halaman ini');
        }

        return $next($request);
    }
}
