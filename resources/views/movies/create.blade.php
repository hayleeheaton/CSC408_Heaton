@extends('layouts.master')

@section('content')
    <div class="col-xs-12 col-sm-12">
        <div class="col-xs-12">
            <div class="row">
                <h4 class="under">Add A Movie</h4>
            </div>
            <div class="row">

                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                    @include('layouts.partials.errors')
                </div>
            </div>

            {!! Form::open(['url' => 'movies', 'class' => 'form-horizontal', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}

            <div class="form-group required">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 text-right">
                    {!! Form::label('title', 'Title', array('class' => 'control-label') ) !!}
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                    <div class="col-xs-12 col-sm-5">
                        {!! Form::text('title', old('title'),  array('placeholder'=>'Movie Title', 'class'=>'form-control input-sm')) !!}
                    </div>
                </div>
            </div>

            <div class="form-group required">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 text-right">
                    {!! Form::label('rating', 'Rating', array('class' => 'control-label') ) !!}
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                    <div class="col-xs-12 col-sm-5">
                        {!! Form::select('rating', ['' => '', 'G' => 'G', 'PG' => 'PG', 'PG-13' => 'PG-13', 'R' => 'R'], old('rating'), ['class'=>'form-control input-sm']  ) !!}
                    </div>
                </div>
            </div>

            <div class="form-group required">
                <div class="lblcol col-xs-12 col-sm-3 col-md-3 col-lg-2 text-right">
                    {!! Form::label('length', 'Running time (minutes)', array('class' => 'control-label') ) !!}
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                    <div class="col-xs-12 col-sm-5">
                        {!! Form::text('length', old('length'),  ['placeholder'=>'Length', 'class'=>'form-control input-sm']) !!}
                    </div>
                </div>
            </div>

            <div class="form-group required">
                <div class="lblcol col-xs-12 col-sm-3 col-md-3 col-lg-2 text-right">
                    {!! Form::label('onDVD', 'Availble on DVD', array('class' => 'control-label') ) !!}
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                    <div class="col-xs-12 col-sm-5">
                        {!! Form::select('onDVD', ['1' => 'Yes', '0' => 'No'], old('onDVD'), ['class'=>'form-control input-sm']  ) !!}
                    </div>
                </div>
            </div>

            <div class="form-group required">
                <div class="lblcol col-xs-12 col-sm-3 col-md-3 col-lg-2 text-right">
                    {!! Form::label('onBluRay', 'Availble on BluRay', array('class' => 'control-label') ) !!}
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                    <div class="col-xs-12 col-sm-5">
                        {!! Form::select('onBluRay', ['1' => 'Yes', '0' => 'No'], old('onBluRay'), ['class'=>'form-control input-sm']  ) !!}
                    </div>
                </div>
            </div>

            <div class="form-group required">
                <div class="lblcol col-xs-12 col-sm-3 col-md-3 col-lg-2 text-right">
                    <label for="cover_photo" class="control-label">Cover Photo</label>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10" style="padding-bottom: 5px;">
                    <div class="col-xs-12 col-sm-5">
                        <input id="cover_photo" name="cover_photo" type="file" class="form-control input-sm">
                    </div>
                </div>
            </div>

            <div class="form-group required">
                <div class="lblcol col-xs-12 col-sm-3 col-md-3 col-lg-2 text-right">
                    {!! Form::label('description', 'Description', array('class' => 'control-label') ) !!}
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                    <div class="col-xs-12 col-sm-5">
                        {!! Form::textarea('description', old('description'),  ['placeholder'=>'Tell us about the movie plot...', 'class'=>'form-control input-sm', 'size' => '30x5']) !!}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 text-right">
                    &nbsp;
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                    <div class="col-xs-12 col-sm-5">
                        {!! Form::submit('Submit', array('class'=>'btn btn-success btn-sm')) !!}
                        <br><br>
                        <p><span style="color: #F00">*</span> Denotes a required field.</p>
                    </div>
                </div>
            </div>
            {!! Form::Close() !!}
        </div>
    </div>

@stop


