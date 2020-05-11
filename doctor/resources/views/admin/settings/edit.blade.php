
@extends('admin.layouts.header')
@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Form horizontal -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">edit Settings</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" action="{{ url('admin/settings/'.$settings->id) }}" method="post">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$settings->id}}">
                    <fieldset class="content-group">
                        <legend class="text-bold">edit {{ App\AppoinmetSchduale::WORKINGDAY[$settings->day_number] }} </legend>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Time From</label>
                            <div class="col-lg-10">
                                <input type="time" class="form-control" name="time_from" value="{{ $settings->time_from }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Time To</label>
                            <div class="col-lg-10">
                                <input type="time" class="form-control" name="time_to" value="{{ $settings->time_to }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Duration</label>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" name="duration" value="{{ $settings->duration }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">is holiday ?</label>
                            <div class="col-lg-10">
                                <input type="checkbox" class="styled" @if($settings->is_weekend == 1)checked="checked" @endif name="is_weekend">
                            </div>
                        </div>
                    </fieldset>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form horizontal -->


        <!-- Footer -->
        <div class="footer text-muted">
            &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
        </div>
        <!-- /footer -->

    </div>
    <!-- /content area -->
@endsection
