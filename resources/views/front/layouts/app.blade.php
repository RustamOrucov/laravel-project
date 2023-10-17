<!DOCTYPE html> <html lang="en">

@include('front.partials._head')

<body>
     @include('front.partials._header')
    

   <main id="main">

       @yield('_content')

   </main>

    
    @include('front.partials._footer')

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('front.partials._scripts')

    </body>

    </html>