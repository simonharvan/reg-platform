@extends('layouts.platform')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Statistics</h1>
    </div>
    <div class="col-lg-12">
        Number of registrations for this event: {{ $registrations->count() }}
    </div>
    <!-- /.col-lg-12 -->
</div>


@stop


@section('javascript')

<script type="text/javascript">
    $(document).ready(function(){

        $('#dataTables-example').dataTable();

    });
</script>

@stop
