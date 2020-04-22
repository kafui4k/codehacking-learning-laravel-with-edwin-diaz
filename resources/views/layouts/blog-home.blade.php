@include('includes.front_header')

    <!-- Navigation -->
    @include('includes.front_nav')

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- Blog Post -->
                @yield('content')

            </div>

            

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

@include('includes.front_footer')