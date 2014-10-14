@extends('layouts.master')

@section('content')
<div class='container'>
    <div class='row'>

        <!-- this shows a message after submitting a post -->
        @if (Session::has('successMessage'))
        <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
        <div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>{{{ Session::get('errorMessage') }}}</div>
        @endif

        <!-- PAGE MAIN CONTENT -->
        @yield('specific')

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div> <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Vidya</a></li>
                            <li><a href="#">Television</a></li>
                            <li><a href="#">Category Name</a></li>
                            <li><a href="#">Category Name</a></li>
                        </ul>
                    </div> <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Programming</a></li>
                            <li><a href="#">Life Lessons</a></li>
                            <li><a href="#">Work</a></li>
                            <li><a href="#">Education</a></li>
                        </ul>
                    </div> <!-- /.col-lg-6 -->
                </div> <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Dumb Fortune Here</h4>
                <?php // $output = shell_exec('/usr/games/fortune'); echo "$output";?>
                <p>No mo' fortune.</p>
            </div>
        </div>
    </div> <!-- END ROW - CONTAINS THE INNER CONTENT -->
</div> <!-- END CONTAINER -->
@stop