<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
<body class="container mx-auto">
    <!-- sidebar-left -->
    <div class="w-full lg:w-1/2">
        
    </div>
    <!-- sidebar-right -->
    <div class= "w-full lg:w-1/2">
        @foreach($categrory_l_lists as $category_l_list) 
            <h2 class="c-contentHeadline_title">$category_l_list</h2>
            <div class="">
                
            </div>
    </div>
</body>
</html>
