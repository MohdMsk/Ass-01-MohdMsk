<!DOCTYPE html>
<html>
<head>
    <title>CV website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container">
@include('navbar')
    <div class="card" style="margin-top: 40px;">
        <div class="card-body">
        @yield('content')
        </div>
    </div>
</div>


</body>
</html>