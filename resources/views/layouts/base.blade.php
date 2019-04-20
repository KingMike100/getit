<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
       <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">

       <title>{{ config('app.name', 'Get It') }}</title>

    {{-- <link rel="stylesheet" href="{{asset('csst/app.css')}}">
    <link rel="stylesheet" href="{{asset('csst/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js"></script>

    <script src="{{asset('jst/app.js')}}"></script> --}}




{{-- start --}}
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet">

{{-- end --}}

    <style>
        .comment-reply{
            display: none;
        }
        .fa {
        margin-right: 5px;
        }

        .rating .fa {
            font-size: 22px;
        }

        .rating-num {
            margin-top: 0px;
            font-size: 60px;
        }

        .progress {
            margin-bottom: 5px;
        }

        .progress-bar {
            text-align: left;
        }

        .rating-desc .col-md-3 {
            padding-right: 0px;
        }

        .sr-only {
            margin-left: 5px;
            overflow: visible;
            clip: auto;
        }
        .icon-a{
            color: orange;
        }
        /* Avatar styles */
        .avatar{
            position: relative;
           
        }

        .category{
            width: 250px;
        }
        /* Search icon */
       /* profile card */
       .profilecard{
           width: 260px;
           height: 320px;
       }
        /*Modal login  */
        
    </style>
</head>
<body>

<div id="app">
        @include('inc.navtest')
        <div class="container">
                @include('layouts.messages')
                       
                    
                     @yield('content')
                        

                        

             
        </div>
</div>

{{-- start --}}
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js"></script>
{{-- end --}}
@yield('scripts')
<footer id="footer">
    <div class="container">
        <span>Get It &copy; 2019</span>
    </div>
</footer>
</body>
</html>


