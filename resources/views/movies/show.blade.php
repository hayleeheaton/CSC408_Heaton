@extends('layouts.master')

@section('content')

    <div class="row">
        <!-- will be used to show any messages -->
        @include('layouts.partials.messages')
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <h4 class="under">Movie Information</h4>
            </div>

            <div class="row top10">
                <div class="col-xs-12 col-sm-4 col-sm-offset-1">
                    <div class="row">
                        <img src="{!! Html::photoLink($movie['id']) !!}"  alt="Photo of {!! $movie['title'] !!}"/>
                    </div>
                    <div class="row top10">
                        <div class="col-sm-6">
                            {!! Form::open(['url' => '/movies/rent', 'method' => 'post']) !!}
                                {!! Form::hidden('movie_id', $movie['id']) !!}
                                {!! Form::hidden('dvd', '1') !!}
                                {!! Form::submit('Rent DVD', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::open(['url' => '/movies/rent', 'method' => 'post']) !!}
                                {!!Form::hidden('movie_id', $movie['id']) !!}
                                {!! Form::hidden('dvd', '0') !!}
                                {!! Form::submit('Rent BluRay', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-sm-offset-1">
                    <div class="row">
                        <div class="col-sm-4 text-right">{!! 'Title:' !!}</div>
                        <div class="col-sm-8 text-left">{!! $movie['title'] !!}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-right">{!! 'Rating:' !!}</div>
                        <div class="col-sm-8 text-left">{!! $movie['rating'] !!}</div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 text-right">{!! 'Plot:' !!}</div>
                        <div class="col-sm-8 text-left">{!! $movie['description'] !!}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-right">{!! 'Length:' !!}</div>
                        <div class="col-sm-8 text-left">{!! $movie['length'] !!} minutes</div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 text-right">{!! 'DVD:' !!}</div>
                        <div class="col-sm-8 text-left">{!! Html::yesNo($movie['onDVD']) !!}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-right">{!! 'Blu-Ray:' !!}</div>
                        <div class="col-sm-8 text-left">{!! Html::yesNo($movie['onBluRay']) !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('extraJS')

    <script type="text/javascript">
        $(document).ready( function () {
            $.fn.stars = function () {
                return $(this).each(function () {
                    // Get the value
                    var val = parseFloat($(this).html());
                    // Make sure that the value is in 0 - 5 range, multiply to get width
                    var size = Math.max(0, (Math.min(5, val))) * 24;
                    // Create stars holder
                    var $span = $('<span />').width(size);
                    // Replace the numerical value with stars
                    $(this).html($span);
                });
            };

            $(function() {
                $('span.stars').stars();
            });
        });
    </script>


@stop