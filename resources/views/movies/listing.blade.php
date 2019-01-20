@extends('layouts.main')


@section('content')

    <!-- will be used to show any messages -->
    @include('layouts.partials.messages')

    <div class="row text-right">
        <a href="/rentals/return" class="btn btn-info">Movie Return</a>
    </div>

    <div class="row top15">
    @if ($movies)

        @foreach ($movies as $movie)

            <div class="col-sm-4 col-md-3">
                <div class="thumbnail  profile" style="text-align: center">
                    <a href="/movies/{!! $movie['id'] !!}"><img src="/images/movie_{!! $movie['id'] !!}.jpg"  alt="Photo of {!! $movie['title'] !!}" ></a>
                    <div class="caption">
                        <h4>{!! $movie['title'] !!}</h4>
                        <p>Rated: {!! $movie['rating'] !!}</p>
                        <div class="row">
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
                </div>
            </div>

        @endforeach

        <!--  $movies->links() !!} -->
    @else
        <h4>No Movies in the catalog yet!</h4>
    @endif

    </div>

@stop

@section('extraJS')

    <script>
        $(document).ready( function () {
            $('#data_table').DataTable();
        } );

        $(document).ready(function(){

            $('.delbtn').click(function(){

                return confirm("Are You sure?");

            });
        });
    </script>


@stop