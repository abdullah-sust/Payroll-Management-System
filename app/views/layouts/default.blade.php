<!DOCTYPE html>
<html lang="en">
@include('includes.header')

<body >
<section id="container" class="">
    @include('includes.topMenu')
    @include('includes.sideBar')
    <section id="main-content">
        <section class="wrapper site-min-height">
            @yield('content')
        </section>
    </section>
    {{--include rightSideBar--}}


    @include('includes.footer')


</body>
</html>