@extends('layouts.platform')


@section('content')

    @php
        if (!empty($event_form->form)) {
            $form = json_decode($event_form->form);
            $array = get_object_vars($form);
            uasort($array, 'sortForm');
            $list = array_keys($array);
        } else {
            $list = array_keys($registrations[0]->toArray());
        }
    @endphp
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

                                @foreach($list as $key)
                                    @if (isset($form) && $form->$key->type === 'note')
                                        @continue
                                    @elseif (isset($form) && isset($form->$key->label))
                                        <th>
                                            {{-- This is to check whether the label is suppose to be translated. It is if the first character is `.` --}}
                                            {{ substr($form->$key->label, 0, 1) == '.' ? trans('registration'. $form->$key->label) : ucwords(str_replace('_', ' ', $form->$key->label)) }}
                                        </th>
                                    @else
                                        <th>
                                            {{ ucwords(str_replace('_', ' ', $key)) }}
                                        </th>
                                    @endif
                                @endforeach


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
                                           class="btn btn-danger btn-circle delete-btn" data-following="false" data-id="{{ $registration->id }}"><i
                                                class="fa fa-trash-alt" data-id="{{ $registration->id }}"></i></a>
                                        {{--<a href="{{ URL::action('RegistrationController@downloadBadge', array($registration->id)) }}"--}}
                                        {{--class="btn btn-info btn-circle" data-following="false"><i class="fas fa-id-badge" aria-hidden="true"></i></a>--}}
                                    </td>
                                    @if (!empty($registrations[0]))
                                        @foreach($list as $key)

                                            @if (isset($form) && $form->$key->type === 'file' && $registration->hasImage($key))
                                                <td>
                                                    <a href="{{ URL::to('registration/' . $registration->id . '/download/' . $key) }}"
                                                       target="_blank"><img
                                                            src="{{ URL::to('registration/' . $registration->id . '/download/' . $key) }}"
                                                            class="img-responsive"></a>
                                                </td>
                                            @elseif (isset($form) && $form->$key->type === 'note')
                                                @continue
                                            @else
                                                <td>{{ $registration->$key }}</td>
                                            @endif
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
            var table = $('#dataTables-example').DataTable({
                lengthMenu: [
                    [25, 50, -1],
                    [25, 50, 'All']
                ],
                scrollX: true,
                scrollY: '50vh',
                scrollCollapse: false
            });
            $('#dataTables-example').on('click', '.delete-btn', function (e) {
                e.preventDefault();
                console.log('registration/' + e.target.dataset.id);
                if (confirm('Do you really want to delete this registration?')) {
                    console.log('registration/' + e.target.dataset.id);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: 'registration/' + e.target.dataset.id,
                        type: 'DELETE',
                        success: function (result) {
                            document.location.href = '/registration';
                        },
                        error: function (result) {
                            console.error(result);
                            alert('Something went wrong, please try again');
                        }
                    });
                }
            });
        });
    </script>

@stop
