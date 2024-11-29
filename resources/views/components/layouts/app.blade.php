<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }


        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .bg-light {
            background-color: #f8faff !important;
        }

        .shadow {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .rounded {
            border-radius: 10px;
        }

        .text-muted {
            color: #6c757d !important;
        }

        .btn-primary {
            background-color: #0047ab;
            border-color: #0047ab;
        }

        .btn-primary:hover {
            background-color: #003a91;
        }

        .image-center {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .custom-card {
            background-color: #f8faff !important; /* Yorqin fon */
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }

        .custom-img {
            width: 100%;
            height: auto; /* Rasm balandligini asl holatiga qaytardik */
            object-fit: cover; /* Rasmni konteynerga mos sig'dirish */
        }

        .custom-heading {
            font-size: 2rem;
            font-weight: bold;
            color: #212529;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .info-card {
            min-height: 450px; /* Qisqacha ma'lumot kartasining balandligi */
            display: flex;
            background-color: #f8faff !important;
            flex-direction: column;
            justify-content: space-between; /* Tugmani pastga joylashadi */
        }



    </style>


    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
{{ $slot }}

@livewire('notifications')

@filamentScripts
@vite('resources/js/app.js')
</body>
</html>
