@extends('layouts.platform')


@section('content')


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Registrated Users</h1>
            @if (Session::has('message'))
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                    </button>{{ Session::get('message') }}</div>
            @endif
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ App\Models\Event::find(Session::get('event_id'))->name }}
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>{{ __('app.operations') }}</th>
                                @if (!empty($registrations[0]))
                                    @foreach(array_keys($registrations[0]->toArray()) as $key)
                                        <th>{{ $key }}</th>
                                    @endforeach
                                @endif

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($registrations as $registration)
                                <tr class="odd gradeX">
                                    <td>
                                        <a href="{{ URL::action('RegistrationController@show', array($registration->id)) }}"
                                           class="btn btn-info btn-circle" data-following="false"><i
                                                    class="fa fa-search"></i></a>
                                        <a href="{{ URL::action('RegistrationController@edit', array($registration->id)) }}"
                                           class="btn btn-info btn-circle" data-following="false"><i
                                                    class="fa fa-edit"></i></a>
                                        <a href="{{ URL::action('RegistrationController@destroy', array($registration->id)) }}"
                                           class="btn btn-danger btn-circle delete-btn" data-following="false"><i
                                                    class="fa fa-trash-alt" data-id="{{ $registration->id }}"></i></a>
                                        {{--<a href="{{ URL::action('RegistrationController@downloadBadge', array($registration->id)) }}"--}}
                                        {{--class="btn btn-info btn-circle" data-following="false"><i class="fas fa-id-badge" aria-hidden="true"></i></a>--}}
                                    </td>
                                    @if (!empty($registrations[0]))
                                        @foreach(array_keys($registrations[0]->toArray()) as $key)
                                            <td>{{ $registration->$key }}</td>
                                        @endforeach
                                    @endif

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <div class="well">
                        <a class="btn btn-default btn-lg btn-block" target="_blank"
                           href="{{ URL::to('registration/downloadExcel') }}">Download Excel File</a>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@stop


@section('javascript')

    <script type="text/javascript">
    $(document).ready(function () {
      $('.delete-btn').click((e) => {
        e.preventDefault();
        if (confirm('Do you really want to delete this registration?')) {
          console.log('registration/' + e.target.dataset.id);
          $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'registration/' + e.target.dataset.id,
            type: 'DELETE',
            success: function(result) {
              document.location.href = '/registration';
            },
            error: function(result) {
              console.error(result);
              alert('Something went wrong, please try again');
            }
          });
        }
      })
    });
    </script>

@stop
