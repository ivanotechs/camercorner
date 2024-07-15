<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <title>@yield('title') | CamerCorner</title>
    <link rel="shortcut icon" href="{{asset('images')}}/ccl.png">
    @yield('more-meta')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    @livewireStyles

    @yield('style')
</head>

<body class="bg-secondary-2">
<div class="">
    @yield('content')
</div>




@livewireScripts
<!-- Scripts -->
<script src="{{asset('be_assets')}}/js/vendor.min.js"></script>
<script src="{{asset('be_assets/js/toastr.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>
<script>
    $(function () { //ready

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "hideDuration": "1000",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        Livewire.on('success', message => {
            toastr.success(message);
        })

        @if(session()->has('success'))
        toastr.success('{{session()->get("success")}}');
        @endif

        @if(session()->has('error'))
        toastr.error('{{session()->get("error")}}');
        @endif

        Livewire.on('error', message => {
            toastr.error(message);

        })

    });
</script>

</body>
</html>