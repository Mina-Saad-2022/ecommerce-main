<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Login') }}</title>
    <link rel="stylesheet" href="{{asset('assets/login.css')}}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{--icon page --}}
    <link rel="icon" href="{{asset('assets/admin/dist/img/link.png')}}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">


    <main class="py-0">
        <div id="container" class="container">
            {{--TODO sing up--}}
            <div class="row">
                <div class="col align-items-center flex-col sign-up">
                    <div class="form-wrapper align-items-center">
                        <div class="form sign-up">
                            @yield('registration')
                        </div>
                    </div>
                </div>

                <div class="col align-items-center flex-col sign-in">
                    <div class="form-wrapper align-items-center">
                        <div class="form sign-in">
                            @yield('login')
                        </div>
                    </div>
                </div>
            </div>

            <div class="row content-row">
                @yield('text_login_registration')
            </div>
        </div>
    </main>
</div>
</body>


<script>
    let container = document.getElementById('container')

    toggle = () => {
        container.classList.toggle('sign-in')
        container.classList.toggle('sign-up')
    }

    setTimeout(() => {
        container.classList.add('sign-in')
    }, 200)

</script>
</html>
