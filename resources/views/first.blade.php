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
        <center>
        <h1> Welcome To Our Webite ... You can freely submit you CV </h1>
        <img src="/images/image.jpg" alt="Cover Image" width=1000 height=400>
    </center>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-primary" href="{{ route('cvs.create') }}">Apply Now</a>
   </div>
    </div>
    </div>
</div>


</body>
</html>