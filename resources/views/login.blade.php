<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ f_page_title($title ?? null) }}</title>

        {{-- BOOTSTRAP --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <style>
        .error {
            color: #f00;
            font-size: 14px;
        }
        .bg-primary- {
            background-color: #55f;
        }
        .btn-login {
            color: #fff;
            background-color: #55f;
        }
        .btn-login:hover {
            color: #fff;
            opacity: 0.7;
        }
    </style>
    @livewireStyles

    <body style="background: #F6F6F6">


        <header style="padding: 80px 0px;" class="bg-primary-">
            <h4 class="text-white text-center">CONNEXION BACK-OFFICE GTI</h4>
        </header>

        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10 mx-auto p-4 rounded border text-black bg-white" style="margin-top: -50px">
            @livewire('login')
        </div>

        @livewireScripts
        {{-- BOOTSTRAP --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
