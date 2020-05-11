@extends('admin.layouts.header')
@section('content')
<!-- Content area -->
<div class="content">

    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Add Settings</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <form class="form-horizontal" action="{{ url('admin/settings') }}" method="post">
                {{ csrf_field() }}
                <fieldset class="content-group">
                    <legend class="text-bold">Add Settings </legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Time From</label>
                        <div class="col-lg-10">
                            <input type="time" class="form-control" name="time_from">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Time To</label>
                        <div class="col-lg-10">
                            <input type="time" class="form-control" name="time_to">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Duration</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" name="duration">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-lg-2"> Select Holiday</label>
                        <div class="col-lg-10">
                            <select multiple="multiple" class="form-control" name="holiday[]">
                                <option value="5" selected="selected">friday</option>
                                <option value="6" selected="selected">saturday</option>
                                <option value="0">sunday</option>
                                <option value="1">monday</option>
                                <option value="2">tuesday</option>
                                <option value="3">wednesday</option>
                                <option value="4">thursday</option>

                            </select>
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
