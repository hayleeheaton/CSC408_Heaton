<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yellow Bucket</title>

    <!-- Bootstrap -->
    {!! Html::style('dist/css/bootstrap.min.css') !!}
    {!! Html::style('dist/css/bootstrap-datepicker3.min.css') !!}

    <!-- Page specific styles and scripts -->
    @yield('header')


    <!-- Custom Fonts -->
    {!! Html::style('font-awesome/css/font-awesome.min.css') !!}

    {!! Html::style('https://fonts.googleapis.com/css?family=Open+Sans:300,400, 600|Roboto:400,500,700|Roboto+Condensed:700') !!}

    {!! Html::style('css/app.css') !!}

    <!-- Custom CSS -->
    {!! Html::style('css/landing-page.css') !!}

    {!! Html::style('css/default.css') !!}


            <!-- Html5 Shim and Respond.js IE8 support of Html5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- Navigation and header -->
@include('layouts.menu')

<!-- Content -->
<div class="container content">
    @yield('content')
</div>

<!-- Footer -->
<div class="container-fluid">
    <div class="row">
        <div id="footer" class="center-block">
            <p>All content copyright Yellow Bucket Inc. 2015</p>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js') !!}

<!-- Include all compiled plugins (below), or include individual files as needed -->
{!! Html::script('dist/js/bootstrap.min.js') !!}

<!-- Datatables javascript library -->
{!! Html::script('//cdn.datatables.net/1.10.7/js/jquery.dataTables.js') !!}


<script>
    $(document).ready(function() {
        $("#msg").delay(5000).slideUp("slow");
    })

</script>

@yield('extraJS')

</body>
</html>

