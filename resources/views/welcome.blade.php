@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: black;
            background-image: url('https://laravel.com/assets/img/welcome/background.svg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            /* Ensure full viewport height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* Vertically center content */
            align-items: center;
            /* Horizontally center content */
            margin: 0;
            /* Remove default margin */
        }

        h1,
        h2 {
            margin: 0;
            /* Remove default margin */
        }

        .no-underline {
            text-decoration: none;
            /* Remove underline from links */
        }

        .text-white {
            color: white;
            /* Ensure text is white */
        }

        .text-center {
            text-align: center;
            /* Center text alignment */
        }
    </style>

    <div>
        <h1 class="text-center text-white">Welcome to Inventory System</h1>
        <a href="/items" class="no-underline">
            <h2 class="text-center text-white">Click here to log</h2>
        </a>
    </div>
@endsection
