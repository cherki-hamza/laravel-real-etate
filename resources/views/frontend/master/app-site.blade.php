@include('frontend.layouts.header')


@if (request()->url() === route('site.home') )
  @include('frontend.layouts.menu-home')
@else
  @include('frontend.layouts.menu')
@endif


@yield('content')

@include('frontend.layouts.footer')
