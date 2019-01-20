@extends('layouts.master')

@section('header')
    <!-- Datatables Styles -->
    {!! Html::style('//cdn.datatables.net/1.10.7/css/jquery.dataTables.css') !!}
@stop

@section('content')

    <!-- will be used to show any messages -->
    @include('layouts.partials.messages')

    <div class="row">
        <div class="col-xs-4 h3">Rental History</div>
    </div>

    <div class="row">
        @if ($rentals)
            <table id="data_table" class="table table-striped">
                {{-- Fx this for javascript --}}
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Rating</th>
                    <th>Length (min)</th>
                    <th>Type</th>
                    <th>Rent Date</th>
                    <th>Return Date</th>
                </tr>
                </thead>
                <tbody id="fbody">

                @foreach ($rentals as $rental)
                    <tr>
                        <td><img src="/images/movie_{{ $rental['movie']['id'] }}.jpg"
                                 width="50px"> {!! $rental['movie']['title'] !!}</td>
                        <td>{!! $rental['movie']['rating'] !!}</td>
                        <td>{!! $rental['movie']['length'] !!}</td>
                        <td>{!! $rental['disc_type'] !!}</td>
                        <td>{!! $rental['rent_date'] !!}</td>
                        <td>{!! $rental['return_date'] !!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!--  $rentals->links() !!} -->
        @else
            <h4>No rented movies at this time.</h4>
        @endif
    </div>

@stop

@section('extraJS')

    <script>
        $(document).ready(function () {
            $('#data_table').DataTable();
        });

        $(document).ready(function () {

            $('.delbtn').click(function () {

                return confirm("Are You sure?");

            });
        });


    </script>


@stop