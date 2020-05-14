@extends('admin.layouts.header')
@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Basic responsive table -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">View {{ $status }} Appointments</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>
            <div class="page-header page-header-default">
                <div class="page-header-content">
                </div>
                <br>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>name</th>
                        <th>phone</th>
                        <th>email</th>
                        <th>time from</th>
                        <th>time to</th>
                        <th>date</th>
                        <th>approved ?</th>
                        <th>cancel ?</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->name }}</td>
                        <td>{{ $appointment->phone }}</td>
                        <td>{{ $appointment->email }}</td>
                        <td>{{ $appointment->time_from }}</td>
                        <td>{{ $appointment->time_to }}</td>
                        <td>{{ $appointment->date }}</td>
                       @if($appointment->status == 3 || $appointment->approved == false )
                            <td> <a href="{{ url('admin/appointments/approve/'.$appointment->id) }}"><button class="label label-success">approved</button></a></td>
                           @else
                           <td>-</td>
                        @endif
                        @if(($appointment->status == 0 && $appointment->approved == false) )
                            <td><a href="{{ url('admin/appointments/cancel/'.$appointment->id) }}"><button class="label label-danger">cancel</button></a> </td>
                        @else
                            <td>-</td>
                        @endif

                    </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /basic responsive table -->



        <!-- Footer -->
        <div class="footer text-muted">
            &copy; 2020. <a href="#">Doctor</a> by <a href="{{ url('/') }}" target="_blank">Eugene Kopyov</a>
        </div>
        <!-- /footer -->

    </div>
    <!-- /content area -->
@endsection
