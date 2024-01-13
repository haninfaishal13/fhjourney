<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Not Found</title>
    @include('wedding._layout.style')
</head>
<body>
    <div class="fullpage d-flex align-items-center bg-color">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-md-10 col-12">
                    {{-- <img src="{{asset('assets/image/error/404.jpg')}}" alt="" width="400"> --}}
                    <h1>404</h1>
                    <h3>Page Not Found</h3>
                    <p>Don't worry, the page you requested is just not found.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
