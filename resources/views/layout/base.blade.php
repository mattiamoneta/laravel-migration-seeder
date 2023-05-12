<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Styles -->
    @vite('resources/js/app.js')
    
    <title>@yield('page-title')</title>
</head>
<body>
    <div class="container">
        <div class="row py-5">
            <div class="card">
                <div class="card-body">
                    @yield('result')
                </div>
              </div>
           
        </div>
    </div>
</body>
</html>