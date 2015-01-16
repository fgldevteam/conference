<!DOCTYPE html>
<html lang="en">

    @include('app/includes/header')
    <body>
        @include('app/includes/nav')


        <div class="content-area">
            @yield('content')
        </div>

        @include('app/includes/footer')

    </body>
</html>
