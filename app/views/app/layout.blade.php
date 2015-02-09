<!DOCTYPE html>
<html lang="en">

    @include('app/includes/header')
    <body>
        @include('app/includes/nav')


        <div class="content-area" style="">
            @yield('content')


            @include('app/includes/footer')
        </div>



    </body>
</html>
