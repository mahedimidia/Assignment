<!DOCTYPE html>
<html lang="en">
@include('home.partials.head') <!-- Include head partial for meta tags and stylesheets -->

<body class="bg-gray-50 font-sans">
    <!-- Header/Navigation -->
    @include('home.partials.header') <!-- Include header partial for navigation -->

    <!-- Hero Section -->
    @yield('home_content') <!-- This section will be filled by the content of the home page -->

    <!-- Footer -->
    @include('home.partials.footer') <!-- Include footer partial for copyright and links -->

<script src="{{asset('js/script.js')}}"></script> 
</body>
</html>