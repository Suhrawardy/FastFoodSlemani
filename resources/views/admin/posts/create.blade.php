@extends('admin.Admin')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Create Post</h1>
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

                                {!! Form::open(['method'=>'post','action'=>'AdminPostController@store','files'=>true]) !!}
                                <div class="form-group">
                                    {!! Form::label('post_name','Name:') !!}
                                    {!! Form::text('post_name', null ,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('post_desc','Description') !!}
                                    {!! Form::textarea('post_desc', null,['class'=>'form-control','id'=>'note']) !!}
                                    <script>
                                        CKEDITOR.replace( 'note' );
                                    </script>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('address','Address') !!}
                                    {!! Form::text('address', null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('photo','Name:') !!}
                                    {!! Form::file('photo', null ,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('longitude','Longitude') !!}
                                    {!! Form::text('longitude',null ,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('latitude','Latitude') !!}
                                    {!! Form::text('latitude',null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('phone','Phone') !!}
                                    {!! Form::number('phone', null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('delivery_status','Has Delivery') !!}
                                    {!! Form::text('delivery_status', null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('email','Email') !!}
                                    {!! Form::text('email', null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('category','Category') !!}
                                    {!! Form::text('category', null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::file('myfile[]', ['multiple' => 'multiple']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
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