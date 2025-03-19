@include('header.header')


<div class="container text-center" style="height:auto; margin:200px auto; width:100%; display:flex;">
<div style="margin:auto;">
    <h1 class="display-4">404</h1>
    <p class="lead">Oops! The page you are looking for was not found.</p>
    <a href="{{ route('home') }}" class="btn btn-primary">Go to Home</a>
    </div></div>
@include('header.footer')