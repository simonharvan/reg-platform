<!DOCTYPE html>
<html lang="sk">

<?php use App\Models\Event;
$event = Event::find(Session::get('event_id')); ?>

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
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
    {{ Html::style('css/sb-admin.css') }}
    {{ Html::style('css/ladda-themeless.min.css') }}
    {{ Html::style('css/flag-icon.min.css') }}
    {{ Html::style('css/dataTables.bootstrap.css') }}
    {{ Html::style('css/datepicker.css') }}
    {{ Html::style('css/app.css') }}

</head>

<body>

<div id="wrapper">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"
               href="{{ URL::to('/') }}">{{ Session::get('event_name', 'Registration Platform') }}</a>
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
                                            class="flag-icon flag-icon-{{ $language->language_code }}"></span> {{strtoupper($language->language_code)}}
                                </a></li>
                        @endif
                    @endforeach
                </ul>
                {{--<!-- /.dropdown-language -->--}}
            </li>
            {{--<!-- /.dropdown -->--}}
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{ URL::to('welcome-page') }}"><i
                                    class="fa fa-home fa-fw"></i> {{ __('platform.welcome') }}</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('registration/create') }}"><i
                                    class="fa fa-th-list fa-fw"></i> {{ __('platform.register') }}
                        </a>
                    </li>
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

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">

        <!-- Content -->
        @yield('content')

    </div>
    <!-- /#page-wrapper -->
    <footer><span><a href="{{ URL::to('/admin/') }}">Created with <3</a> by bero.tech</span></footer>
</div>
<!-- /#wrapper -->


<!-- Core JavaScript Files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript"
        src="https://cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"></script>

{{ Html::script('js/bootstrap.min.js') }}
{{ Html::script('js/bootstrap-datepicker.js') }}

<script>
$(document).ready(function () {
  if (window.innerWidth < 768) {
    $('.sidebar-collapse').addClass('collapse');
  } else {
    $('.sidebar-collapse').removeClass('collapse');
  }
  $('input[type=date]').datepicker({
    format: 'yyyy-mm-dd',
    language: 'sk'
  });

  $('#registration').bootstrapValidator({
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    live: 'enabled',
    submitButtons: 'input[type="submit"]'
  }).on('error.form.bv', function (e) {
    // $(e.target)  --> The field element
    // data.bv      --> The BootstrapValidator instance
    // data.field   --> The field name
    // data.element --> The field element
    console.log('error.form.bv')
  }).on('success.form.bv', function (e) {
    console.log('success.form.bv')

    var form = $(e.target);

    // Get the BootstrapValidator instance
    var bv = form.data('bootstrapValidator');
    if (bv.isValid()) {
      e.preventDefault();
      bv.destroy()
      setTimeout(function () {
        $('#submit').click()
      }, 200);

    }

  });


});
$(window).resize(function () {
  if (window.innerWidth < 768) {
    $('.sidebar-collapse').addClass('collapse');
  } else {
    $('.sidebar-collapse').removeClass('collapse');
  }
});
</script>

@yield('javascript')

</body>
</html>
