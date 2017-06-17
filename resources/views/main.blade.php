<!DOCTYPE HTML>
<html lang="en">
<head>
@include('partials.head')
</head>
<body>
<!-- navbar -->
@include('partials.navbar')
<!-- Header area -->
@include('partials.header')
<!-- spacer section -->
@include('partials.spacer')
<!-- end spacer section -->
<!-- section: team -->
@include('partials.about')
<!-- end section: team -->
<!-- section: services -->
@include('partials.services')
<!-- end section: services -->
<!-- section: works -->
@include('partials.works')
<!-- spacer section -->
@include('partials.second_spacer')
<!-- end spacer section -->
<!-- section: blog -->
@include('partials.blog')
<!-- end spacer section -->
<!-- section: contact -->
@include('partials.contact')

@include('partials.footer')

<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>

@include('partials.javascripts')

</body>
</html>
