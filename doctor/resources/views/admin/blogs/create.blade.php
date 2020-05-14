@extends('admin.layouts.header')
@section('content')
<!-- Content area -->
<div class="content">

    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Add blogs</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <form class="form-horizontal" action="{{ url('admin/blogs') }}" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <fieldset class="content-group">
                    <legend class="text-bold">Add blog </legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="title" placeholder="enter title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">description</label>
                        <div class="col-lg-10">
                            <textarea type="text" rows="5" cols="5" class="form-control" name="description" placeholder="enter description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">image</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" name="file">
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
