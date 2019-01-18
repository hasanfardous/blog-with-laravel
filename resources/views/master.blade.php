@include('header')

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          @yield('content-head')
          
          
          @yield('content')

        </div>

        @include('sidebar')

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

@include('footer')