<!DOCTYPE html>
<html lang="en">
@include('includes.header')

<body >
<section id="container" class="">
    @include('includes.topMenu')
    @if(Auth::user()->hasRole('admin'))
    	@include('includes.sideBar')
    @else
    @endif
    <section id="main-content">
        <section class="wrapper site-min-height">
            @yield('content')
        </section>
    </section>
    {{--include rightSideBar--}}


    @include('includes.footer')


</body>
</html>