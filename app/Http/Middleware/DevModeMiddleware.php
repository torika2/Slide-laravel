<?php

namespace App\Http\Middleware;

use App\Models\Settings\Settings;
use Closure;
use Illuminate\Support\Facades\Request;

class DevModeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $devMode = Settings::where('key', 'devmode')->first();

        if ($devMode->data['devmode'] == 1) {
            if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $userip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $userip = $_SERVER['REMOTE_ADDR'];
            }

            $allowedIps = array_map('trim', explode(';', $devMode->data['allowed_ips']));


            if (in_array($userip, $allowedIps)) {
                return $next($request);
            } else {
                return response(view('errors.devmode'));
            }
        } else {
            return $next($request);
        }
    }
}
