<?php

namespace App\Http\Middleware;

use App\Models\PageSeo;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class SharePageSeo
{
    public function handle(Request $request, Closure $next): Response
    {
        $pageSeo = null;

        try {
            $routeName = $request->route()?->getName();
            if ($routeName && Schema::hasTable('page_seo')) {
                $pageSeo = PageSeo::cachedFor($routeName);
            }
        } catch (\Throwable) {
            $pageSeo = null;
        }

        View::share('pageSeo', $pageSeo);

        return $next($request);
    }
}
