<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Courier Service Provider</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('/Fronted/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('/Fronted/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/Fronted/img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/Fronted/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{url('/Fronted/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{url('/Fronted/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{url('/Fronted/css/theme.css')}}" rel="stylesheet" />
    @notifyCss

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

      
@include('notify::components.notify')

   
    <!-- Header -->
    @include('Frontend.fixed.header')
       <div class="container">

         <div class="container">

           <div class="container bg-danger">
           @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
           </div>
           @yield('content')
         </div>
       </div>

  
      <!-- ============================================-->


      @include('Frontend.fixed.footer')


    </main>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{url('/Fronted/js/scripts.js')}}"></script>
    <script src="{{url('/Fronted/js/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{url('/Fronted/js/scripts.js')}}"></script>
    <script src="{{url('/Fronted/js/scripts.js')}}"></script>
    <script src="{{url('/Fronted/js/scripts.js')}}"></script>
    <script src="{{url('/Fronted/js/theme.js')}}"></script>


    <link href="{{url('/Fronted/js/scripts.js')}}" rel="stylesheet">
    @notifyJs
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>