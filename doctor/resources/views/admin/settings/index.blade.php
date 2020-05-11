@extends('admin.layouts.header')
@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Basic responsive table -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">View Settings</h5>
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
                 <a href="{{ url('admin/settings/create') }}"> <button class="btn btn-primary">Add Seetings</button></a>
                </div>
                <br>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>day</th>
                        <th>time from</th>
                        <th>time to</th>
                        <th>duration</th>
                        <th>edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($settings as $setting)
                    <tr>
                        <td>{{  App\AppoinmetSchduale::WORKINGDAY[$setting->day_number] }}</td>
                        <td>@if($setting->is_weekend == 0){{ $setting->time_from }} @else -- @endif</td>
                        <td>@if($setting->is_weekend == 0){{ $setting->time_to }} @else -- @endif</td>
                        <td>@if($setting->is_weekend == 0){{ $setting->duration }} @else -- @endif</td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li >
                                    <a href="{{ url('admin/settings/'.$setting->id.'/edit') }}">
                                        <i class="icon-pencil7"></i>
                                    </a>
                                </li>
                            </ul>
                        </td>
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
