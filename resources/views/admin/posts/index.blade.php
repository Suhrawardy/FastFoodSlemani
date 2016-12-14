@extends('admin.Admin')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Posts</h1>
            </div>
            @if(Session::has('deleted_user'))

                <p class="bg-danger"> {{session('deleted_user')}}</p>


                @endif
                        <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        DataTables Advanced Tables
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Name</th>

                                <th>Address</th>
                                <th>Photo</th>
                                <th>Longitude</th>
                                <th>latitude</th>
                                <th>Phone</th>
                                <th>Delivery</th>
                                <th>Email</th>
                                <th>Category</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr class="gradeU">
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->user->name}}</td>
                                    <td>{{$post->post_name}}</td>

                                    <td>{{$post->address}}</td>
                                    <td><img height="50" src="\images\profile\{{$post->photo}}" alt=""></td>
                                    <td>{{$post->longitude}}</td>
                                    <td>{{$post->latitude}}</td>
                                    <td>{{$post->phone}}</td>
                                    <td>{{$post->delivery_status}}</td>
                                    <td>{{$post->email}}</td>
                                    <td>{{$post->category}}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>

    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@stop