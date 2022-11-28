<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud de Eventos com Laravel</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    @yield('content')
    <script src="{{url('assets/javascript.js')}}"></script>

    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js">
    </script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    </script>

    <script
        src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js">
    </script>

    <script
        src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js">
    </script>

    <script>
        @yield('script')
    </script>


</body>
</html>
