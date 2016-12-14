@extends('admin.Admin')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Forms</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Basic Form Elements
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">

                            {!! Form::open(['method'=>'post','action'=>'Admin_Dash_Controller@store']) !!}
                                <div class="form-group">
                                    {!! Form::label('name','Name:') !!}
                                    {!! Form::text('name', null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('email','Email') !!}
                                    {!! Form::email('email', null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('password','Password') !!}
                                    {!! Form::password('password',['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('role_id','Role') !!}
                                    {!! Form::select('role_id', array(1=>'Admin',0=>'Manager'),null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
                                </div>

                            {!! Form::close() !!}
                               @include('partials.errors')
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

@stop