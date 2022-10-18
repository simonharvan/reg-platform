<!DOCTYPE html>
<html lang="sk">

<?php
use App\Models\CodeText;
use App\Models\Event;
use App\Models\EventLink;
use App\Models\EventPage;
use App\Models\EventText;
use App\Models\EventMenuItem;
use Illuminate\Support\Facades\DB;

$event = Event::find( Session::get( 'event_id' ) );

$event_text = EventText::where( 'event_id', '=', Session::get( 'event_id' ) )->where( 'language_code', '=', App::getLocale() )->first();
$event_menu_items = EventMenuItem::where( 'event_id', '=', Session::get( 'event_id' ) )->where( 'language_code', '=', App::getLocale() )->get();
$event_pages = EventPage::where( 'event_id', '=', Session::get( 'event_id' ) )->where( 'language_code', '=', App::getLocale() )->get();
$event_links = EventLink::where( 'event_id', '=', Session::get( 'event_id' ) )->where( 'language_code', '=', App::getLocale() )->get();
$is_welcome_page_available = true;
$code_text = CodeText::where( 'code_id', '=', Session::get( 'code_id' ) )->where( 'language_code', '=', App::getLocale() )->first();
$code_text = CodeText::where( 'code_id', '=', Session::get( 'code_id' ) )->where( 'language_code', '=', App::getLocale() )->first();
if (!isset($code_text)) {
    $code_text = DB::table('code_texts')
        ->join('codes', 'code_texts.code_id', '=', 'codes.id')
        ->select('code_texts.*', 'codes.event_id')
        ->where('codes.event_id', '=', Session::get('event_id'))
        ->first();
}
if (!isset($code_text)) {
    $is_welcome_page_available = false;
}
$is_registration_available = isset($event->available_until) && strtotime($event->available_until) >= time();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="NOOKOM">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @section('title')
            {{ trans('platform.title') }}
        @show
    </title>


    <!-- CSS are placed here -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
    {{ Html::style('css/sb-admin.css') }}
    {{ Html::style('css/ladda-themeless.min.css') }}
    {{ Html::style('css/flag-icon.min.css') }}
    {{ Html::style('css/app.css?version=1.0.0') }}


</head>

<body>

<div id="wrapper">

    <nav id="navbar" class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"
               href="{{ URL::to('/') }}">{{ $event_text->title }}</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="flag-icon flag-icon-{{App::getLocale()}}"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    @foreach ($event->languages as $language)
                        @if ($language->language_code!= App::getLocale())
                            <li><a href="{{ URL::to('/language/' . $language->language_code) }}"><span
                                            class="flag-icon flag-icon-{{ $language->language_code }}"></span> {{ucfirst($language->language_name)}}
                                </a></li>
                        @endif
                    @endforeach
                </ul>
                {{--<!-- /.dropdown-language -->--}}
            </li>
            {{--<!-- /.dropdown -->--}}
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default navbar-static-side upper-margin-div" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    @if ($is_welcome_page_available)
                    <li>
                        <a href="{{ URL::to('welcome-page') }}"><i
                                    class="fa fa-home fa-fw"></i> {{ __('platform.welcome') }}</a>
                    </li>
                    @endif
                    @if ($is_registration_available)
                    <li>
                        <a href="{{ URL::to('registration/create') }}"><i
                                    class="fa fa-th-list fa-fw"></i> {{ __('platform.register') }}
                        </a>
                    </li>
                    @endif
                    @if (isset($event_pages))
                        @foreach($event_pages as $page)
                            <li>
                                <a href="{{ URL::to('/event-page/' . $page->id) }}"><i
                                            class="fa
                                            @if (isset($page->icon))
                                            {{ $page->icon }}
                                            @else
                                            {{ "fa-file" }}
                                            @endif fa-fw"></i> {{ $page->title }}</a>
                            </li>
                        @endforeach
                    @endif
                    @if (isset($event_menu_items))
                        @foreach($event_menu_items as $menu_item)
                            <li>
                                <a target="_blank" href="{{ URL::to('/storage/' . $menu_item->url) }}"><i
                                            class="fa fa-file fa-fw"></i> {{ $menu_item->name }}</a>
                            </li>
                        @endforeach
                    @endif
                    @if (isset($event_links))
                        @foreach($event_links as $event_link)
                            <li>
                                <a href="{{ $event_link->url }}"><i
                                        class="fa
                                        @if (isset($event_link->icon))
                                        {{ $event_link->icon }}
                                        @else
                                        {{ "fa-external-link-alt" }}
                                        @endif fa-fw"></i> {{ $event_link->title }}</a>
                            </li>
                        @endforeach
                    @endif
                    @if (Session::get('group_id', 0)==3)
                        <li>
                            <a href="{{ URL::to('registration') }}"><i
                                        class="fa fa-users fa-fw"></i> {{ __('platform.registered')}}</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('statistics')}}"><i
                                        class="fa fa-bar-chart-o fa-fw"></i> {{ trans('platform.statistics')}}</a>
                        </li>
                    @endif
                    <li>
                        <a href="{{ URL::to('logout') }}" class="text-danger"><i
                                    class="fa fa-sign-out-alt fa-fw"></i> {{ trans('platform.logout')}}</a>
                    </li>
                    @if ($event->logo_url)
                        <li>
                            <img src="{{ URL::to('/storage/'. $event->logo_url) }}" class="img-responsive"
                                 style="padding: 20px"/>
                        </li>
                    @endif

                </ul>
            </div>

            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper" class="upper-margin-div">

        <!-- Content -->
        @yield('content')

    </div>
    <!-- /#page-wrapper -->
    <footer>Created by <a href="http://amitis.sk">Amitis</a> | <a href="{{ URL::to('/admin/') }}">Admin</a></footer>
</div>
<!-- /#wrapper -->


<!-- Core JavaScript Files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript"
        src="https://cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
{{ Html::script('js/bootstrap.min.js') }}

<script>
    $(document).ready(function () {
        if (window.innerWidth < 768) {
            $('.sidebar-collapse').addClass('collapse');
        } else {
            $('.sidebar-collapse').removeClass('collapse');
        }

        $('#registration').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            live: 'enabled',
            submitButtons: 'input[type="submit"]'
        })


    });
    $(window).resize(function () {
        if (window.innerWidth < 768) {
            $('.sidebar-collapse').addClass('collapse');
        } else {
            $('.sidebar-collapse').removeClass('collapse');
        }
    });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161907026-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-161907026-1');
</script>
{{ Html::script('js/custom-app.js') }}


@yield('javascript')

</body>
</html>
