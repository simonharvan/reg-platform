@extends('layouts.platform')


@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ __('app.welcome') }}</h1>
        </div>
        <div class="col-lg-12">
            {!! $welcome_text !!}
        </div>
    </div>
    <!-- /.col-lg-12 -->
    </div>


@stop

