@extends('layouts.blank')

@section('title')
    @parent
    - login
@stop

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">This form is code protected</h3>
                </div>
                <div class="panel-body">

                    {{ Form::open(['id' => 'loginForm', 'method' => 'post']) }}
                    @if(isset($error_message))
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <ul>
                                @foreach($error_message as $error)
                                    <li class="error">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <fieldset>
                        <div class="form-group">
                            {{ Form::text('password', '', array('class' => 'form-control', 'placeholder'=>'please enter the code')) }}
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        {{ Form::submit('Submit', array('class' => 'btn btn-lg btn-success btn-block')) }}
                    </fieldset>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@stop
