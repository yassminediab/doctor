@extends('admin.layouts.header')
@section('content')
    <!-- Content area -->
    <div class="content">
        <!-- Basic responsive table -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">View blogs</h5>
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
                 <a href="{{ url('admin/blogs/create') }}"> <button class="btn btn-primary">Add blog</button></a>
                </div>
                <br>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>title</th>
                        <th>description</th>
                        <th>image</th>
                        <th>edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->description }}</td>
                        <td>
                            <img src="{{ asset('images/'.$blog->image) }}" style="height: 20%;">
                        </td>

                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="text-primary-600">
                                    <a href="{{ url('admin/blogs/'.$blog->id.'/edit') }}">
                                        <i class="icon-pencil7"></i>
                                    </a>
                                </li>
                                <li class="text-danger-600">
                                    <a href="{{ url('admin/blogs/delete/'.$blog->id) }}">
                                        <i class="icon-trash"></i>
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
