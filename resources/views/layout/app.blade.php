<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sample app</title>
        <link rel="stylesheet" href="/css/app.css">
</head>
<body>
        @include('layout.inc.navbar')  
        <div class="container mainbodyclass">   
                @if(Request::is('/'))
                        @include('layout.inc.showcase')  
                @endif
                <div class="row">
                        <div class="col-md-8 col-lg-8">
                                @include('layout.inc.messages')
                                @yield('content')
                        </div>
                        <div class="col-md-4 col-lg-4">
                                @include('layout.inc.sidebar')
                        </div>
                </div>
        </div> 
       
        <footer class="page-footer  text-center" id="footer" style="margin-top:10px">
                <div class="container">
                        <p class="text-muted">Copyright &copy; 2017 Indra Shastri</p>
                </div>
        </footer>
              
</body>
</html>