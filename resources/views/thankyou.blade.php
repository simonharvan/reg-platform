@extends('layouts.blank')

@section('title')
    @parent
    - {{ __('app.thanks') }}
@stop

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">{{ __('app.registrationSuccess') }}</h3>
                </div>
                <div class="panel-body text-center">
                    <div class="col-lg-12">
                        <h2 class="text-center">{{ __('app.thanks') }}</h2>
                        <p class="text-muted text-center">{!! __('app.confirmationText') !!}</p>
                        @if (!empty($event_text->email_questionnaire))
                            <p class="text-center">
                                <strong>{!! __($event_text->email_questionnaire) !!}</strong>
                            </p>
                        @endif

                        <a class="btn btn-default" href="{{ URL::to('welcome-page') }}" role="button">Go back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
