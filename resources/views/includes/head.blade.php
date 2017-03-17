<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Styles -->
<link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
<!-- <link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet" /> -->
<link href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet" />
<link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
<!-- Icons -->
<!-- <link href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" /> -->
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Delius|Montserrat" rel="stylesheet">

<!-- Scripts -->
<script src="{{ asset('/js/app.js') }}"></script>
<!-- <script src="{{ asset('/js/select2.min.js') }}"></script> -->
<script src="https://use.fontawesome.com/50e08cc1c1.js"></script>
<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/js/script.js') }}"></script>

<!-- Scripts -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
