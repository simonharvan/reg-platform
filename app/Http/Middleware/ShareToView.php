<?php

namespace App\Http\Middleware;

use App\Models\CodeText;
use App\Models\Event;
use App\Models\EventLink;
use App\Models\EventMenuItem;
use App\Models\EventPage;
use App\Models\EventText;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class ShareToView
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, $next)
    {
        $event = Event::find(Session::get('event_id'));
        $code_text = CodeText::getCodeTextForEvent(Session::get('code_id'), Session::get('event_id'), App::getLocale());
        $event_text = EventText::where('event_id', '=', Session::get('event_id'))->where('language_code', '=', App::getLocale())->first();
        $event_menu_items = EventMenuItem::where('event_id', '=', Session::get('event_id'))->where('language_code', '=', App::getLocale())->get();
        $event_pages = EventPage::where('event_id', '=', Session::get('event_id'))->where('language_code', '=', App::getLocale())->get();
        $event_links = EventLink::where('event_id', '=', Session::get('event_id'))->where('language_code', '=', App::getLocale())->get();
        View::share('code_text', $code_text);
        View::share('event', $event);
        View::share('event_text', $event_text);
        View::share('event_menu_items', $event_menu_items);
        View::share('event_pages', $event_pages);
        View::share('event_links', $event_links);

        return $next($request);
    }
}
